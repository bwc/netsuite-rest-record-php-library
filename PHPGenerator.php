<?php
include_once('base/Formatter.php');
class PHPGenerator
{
    const REQUEST_DIR = 'NSRecord/';
    const REQUEST_CLASS_PREFIX = 'NSRecord_';
    const DOC_TYPE_TAB_SPACES = '24';
    const TEMPLATE_REQUEST_CLASS = "<?php\nclass %s extends RequestAbstract\n{\n%s}\n";
    const TEMPLATE_FUNCTION = "   /**\n    * %s\n    */\n    %s\n    {\n%s\n    }\n";

    /**
     * @var string
     */
    private $_baseDirectory;

    /**
     * PHPGenerator constructor.
     *
     * @param string $baseDirectory
     */
    public function __construct($baseDirectory)
    {
        $this->_baseDirectory = $baseDirectory;
    }

    /**
     * @param RecordDefinitionsParser $requestParser
     * @param RecordSchemaParser $schemaParser
     */
    public function run($requestParser, $schemaParser)
    {
        // NOTE: Changes to $requestParser & $schemaParser may require manual changes to base/NSRecord/CustomRecord.php
        $i = 0;
        $requests = $requestParser->getData();
        $schemaData = $schemaParser->getData();
        $recordCount = count($requests);
        foreach ($requests as $requestName => $request) {
            $className = Formatter::formatClassName($requestName, self::REQUEST_CLASS_PREFIX);
            $classFileName = Formatter::formatClassName($requestName);
            $phpFunctions = [];
            echo sprintf(
                "\nGenerating Record Definition...\tRequest %d/%d - %s...\n",
                ++$i,
                $recordCount,
                $className
            );

            $j = 0;
            $functionCount = count($request);
            foreach ($request as $functionName => $functionData) {
                echo sprintf(
                    "Generating Record Definition...\t\tFunction %d/%d - $functionName...\n",
                    ++$j,
                    $functionCount
                );
                $phpFunctions[] = $this->_generatePhpFunction($functionName, $functionData);
            }

            $phpClassContents = sprintf(
                self::TEMPLATE_REQUEST_CLASS,
                $className,
                implode(PHP_EOL, $phpFunctions)
            );

            file_put_contents(
                sprintf(
                    '%s%s%s.php',
                    $this->_baseDirectory,
                    self::REQUEST_DIR,
                    $classFileName
                ),
                $phpClassContents
            );
        }
    }

    /**
     * @param string $name
     * @param array $data
     * @return string
     * @
     */
    private function _generatePhpFunction($name, $data)
    {
        $functionParameters = [];
        $phpDocLines = [];
        $queryParameters = [];
        $returnTypes = [];
        $phpFunctionDefinition = "public function $name(%s)";

        $hasBodyToPost = false;
        $phpDocLines[] = "{$data['PATH']['method']} {$data['PATH']['path']}";
        $phpDocLines[] = '';
        if (!empty($data['REQUEST BODY'])) {
            $hasBodyToPost = true;
            $functionParameters[] = '$body';
            $phpDocLines[] = '@param $body {' . $data['REQUEST BODY']['schema-name'] . '}';
        }
        foreach ($data['REQUEST PARAMETERS'] as $p) {
            list($param, $phpDocLine, $queryName, $functionName) = $this->_generatePhpFunctionParameter($p);
            $functionParameters[] = $param;
            $phpDocLines[] = $phpDocLine;
            $queryParameters[$queryName] = [
                'query_name'    => $queryName,
                'function_name' => $functionName,
                'required'      => $p['required']
            ];
        }
        foreach ($data['RESPONSES'] as $r) {
            if ($r['title'] === '200 OK') {
                $phpDocLines[] = "@return string json:{$r['schema']} - {$r['value']}";
            } else {
                $phpDocLines[] = "@response [{$r['title']}] {$r['schema']} - {$r['value']}";
            }

        }

        $phpFunctionDefinition = sprintf(
            $phpFunctionDefinition,
            implode(', ', $functionParameters)
        );

        return sprintf(
            self::TEMPLATE_FUNCTION,
            implode("\n    * ", $phpDocLines),
            $phpFunctionDefinition,
            $this->_generatePhpFunctionBody(
                $data['PATH']['path'],
                $data['PATH']['method'],
                $queryParameters,
                $hasBodyToPost
            )
        );
    }

    /**
     * @param array $data
     * @return array
     * @throws NetsuiteException
     */
    private function _generatePhpFunctionParameter($data)
    {
        $type = Formatter::parseTypes($data['type']);
        $param = sprintf(
            '%s = null',
            Formatter::formatCamelCase($data['name'], true)
        );
        $queryName = $data['name'];
        $functionName = Formatter::formatCamelCase($queryName, true);

        $enum = $data['enumValues'] ? ' enum(' . implode(', ', $data['enumValues']) . ')' : '';
        $required = $data['required'] ? ' [Required]' : '';
        $docLineLength = strlen($type . $enum . $data['name'] . $required);
        $spacing = $docLineLength < self::DOC_TYPE_TAB_SPACES
            ? str_repeat(' ', self::DOC_TYPE_TAB_SPACES - $docLineLength) : '';
        $phpDocLine = sprintf(
            '@param %s%s %s%s%s',
            $type,
            $enum,
            $functionName,
            $required,
            $spacing
        );
        $phpDocLine .= "{$data['desc']}" . ($data['subtitle'] ? " ({$data['subtitle']})" : '');

        return [
            $param,
            $phpDocLine,
            $queryName,
            $functionName,
        ];
    }

    /**
     * @param string $path
     * @param string $method
     * @param array $queryParameters
     * @param bool $hasBodyToPost
     * @return string
     */
    private function _generatePhpFunctionBody($path, $method, $queryParameters, $hasBodyToPost)
    {
        $buildPath = sprintf("\$path = \"%s\";", $path);
        $buildVar = sprintf(
            "\n%s\$args = \$this->_argsToHttpParams(\n%s[\n",
            Formatter::tab(2),
            Formatter::tab(3)
        );

        $hasArgs = false;
        ksort($queryParameters);
        foreach ($queryParameters as $config) {
            $search = "{{$config['query_name']}}";
            if (strpos($path, $search) !== false) {
                // DELETE /account/{id} to DELETE /account/$id
                $buildPath = str_replace($search, $config['function_name'], $buildPath);
            } else {
                $buildVar .= sprintf(
                    "%s'%s' => %s,\n",
                    Formatter::tab(4),
                    $config['query_name'],
                    $config['function_name']
                );
                $hasArgs = true;
            }
        }
        $buildVar .= sprintf(
            "%s]\n%s);\n",
            Formatter::tab(3),
            Formatter::tab(2),
            Formatter::tab(2),
            $method
        );
        if ($hasArgs) {
            $buildPath .= $buildVar;
        }

        return sprintf(
            "%s%s\n%sreturn \$this->_makeRequest('%s', \$path, %s%s);",
            Formatter::tab(2),
            $buildPath,
            Formatter::tab(2),
            $method,
            $hasArgs ? '$args' : '[]',
            $hasBodyToPost ? ', $body' : ''
        );

    }
}
