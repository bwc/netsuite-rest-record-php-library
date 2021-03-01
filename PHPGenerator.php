<?php
include_once('base/Formatter.php');
class PHPGenerator
{
    const REQUEST_DIR = 'NSRecord/';
    const REQUEST_CLASS_PREFIX = 'NSRecord_';
    const DOC_TYPE_TAB_SPACES = '16';
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
     */
    public function run(RecordDefinitionsParser $requestParser)
    {
        $i = 0;
        $requests = $requestParser->getData();
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

        $phpDocLines[] = "{$data['PATH']['method']} {$data['PATH']['path']}";
        $phpDocLines[] = '';
        if (!empty($data['REQUEST_BODY'])) {
            $phpDocLines[] = "{$data['REQUEST_BODY']}";
        }
        foreach ($data['REQUEST PARAMETERS'] as $p) {
            [$param, $phpDocLine, $queryName, $functionName] = $this->_generatePhpFunctionParameter($p);
            $functionParameters[] = $param;
            $phpDocLines[] = $phpDocLine;
            $queryParameters[] = [
                'query_name'    => $queryName,
                'function_name' => $functionName,
                'required'      => $p['required']
            ];
        }
        foreach ($data['RESPONSES'] as $r) {
            if ($r['title'] === '200 OK') {
                $phpDocLines[] = "@return string json:{$r['schema']} - {$r['value']} ";
            } else {
                $phpDocLines[] = "@meta [{$r['title']}] {$r['schema']} - {$r['value']} ";
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
                $queryParameters
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
     * @return string
     */
    private function _generatePhpFunctionBody($path, $method, $queryParameters)
    {
        $hasUrlParams = false;
        $buildPath = sprintf("\$path = \"%s\";", $path);
        foreach ($queryParameters as $config) {
            $search = "{{$config['query_name']}}";
            if (strpos($path, $search) !== false) {
                // DELETE /account/{id} to DELETE /account/$id
                $buildPath = str_replace($search, $config['function_name'], $buildPath);
            } else {
                // GET /account to /account?q=$q&limit=$limit&offset=$offset
                if ($config['required']) {
                    $buildPath .= sprintf(
                        "\n%s\$parts[] = \"%s=%s\";",
                        Formatter::tab(2),
                        $config['query_name'],
                        $config['function_name']
                    );
                    $hasUrlParams = true;
                } else {
                    $buildPath .= sprintf(
                        "\n%sif (%s) {\n%s\$parts[] = '%s=' . urlencode((string)%s);\n%s}",
                        Formatter::tab(2),
                        $config['function_name'],
                        Formatter::tab(3),
                        $config['query_name'],
                        $config['function_name'],
                        Formatter::tab(2)
                    );
                    $hasUrlParams = true;
                }
            }
        }

        if ($hasUrlParams) {
            $buildPath = "\$parts = [];\n" . Formatter::tab(2) . $buildPath;
            $buildPath .= sprintf(
                "\n%sif (\$parts) {\n%s\$path .= '?' . implode('&', \$parts);\n%s}",
                Formatter::tab(2),
                Formatter::tab(3),
                Formatter::tab(2)
            );
        }

        $body = sprintf(
            "%s%s\n%s\$response = \$this->_makeRequest('%s', \$path);\n\n%sreturn \$response;",
            Formatter::tab(2),
            $buildPath,
            Formatter::tab(2),
            $method,
            Formatter::tab(2)
        );

        return $body;
    }
}
