<?php
class RecordDefinitionsParser
{
    /**
     * @var DOMXPath
     */
    private $_domXPath = null;

    /**
     * @var array
     */
    private $_data = [];

    /**
     * RecordDefinitionsParser constructor
     *
     * @param DOMXPath $domXPath
     * @throws NetsuiteException
     */
    public function __construct($domXPath)
    {
        $this->_domXPath = $domXPath;
        $this->_parse();
    }

    /**
     * Extract Request data from the documentation
     *
     * @throws NetsuiteException
     */
    private function _parse()
    {
        if (!empty($this->_data)) {
            return;
        }

        $classNodes = $this->_domXPath->query(
            '//article
            //div[contains(@class, "ns-support-")]'
        );
        if (!$classNodes) {
            throw new NetsuiteException('Failed to parse');
        }

        /** @var DOMNode $classNodes */
        foreach ($classNodes as $classNode) {
            $className = Index::extractTextFromNode($this->_domXPath, './/h1', $classNode);
            $this->_data[$className] = [];
            $functionNodes = $this->_domXPath
                ->query('.//div[@class="operation panel"]', $classNode);
            foreach ($functionNodes as $functionNode) {
                $functionName = str_replace(' ', '', lcfirst(ucwords(
                    Index::extractTextFromNode(
                        $this->_domXPath,
                        './/h2[@class="operation-title"]',
                        $functionNode
                    )
                )));
                $this->_data[$className][$functionName] = [
                    'PATH'                  => $this->_parseFunctionPath($functionNode),
                    'REQUEST BODY'          => $this->_parseRequestBody($functionNode),
                    'REQUEST PARAMETERS'    => $this->_parseFunctionRequestParamters($functionNode),
                    'RESPONSES'             => $this->_parseFunctionResponses($functionNode),
                ];
            }
        }
    }

    /**
     * @param DOMNode $contextNode
     * @return array|null
     * @throws NetsuiteException
     */
    private function _parseFunctionPath($contextNode)
    {
        $nodes = $this->_domXPath->query(
            './/div[@class="doc-row"]
            //div[@class="doc-copy"]
            //section[@class="swagger-operation-path"]',
            $contextNode
        );
        if ($nodes->length === 0) {
            return null;
        } elseif ($nodes->length > 1) {
            throw new NetsuiteException(
                "Found more than one node for _parseFunctionPath"
            );
        }

        return [
            'method' => Index::extractTextFromNode(
                $this->_domXPath,
                './/span[@class="operation-method"]',
                $nodes->item(0)
            ),
            'path' => Index::extractTextFromNode(
                $this->_domXPath,
                './/span[@class="operation-path"]',
                $nodes->item(0)
            )
        ];
    }

    /**
     * @param DOMNode $contextNode
     * @return array|null
     * @throws NetsuiteException
     */
    private function _parseRequestBody($contextNode)
    {
        $nodes = $this->_domXPath->query(
            './/div[@class="doc-row"]
            //div[@class="doc-copy"]
            //section[@class="swagger-request-body"]
            //div[@class="prop-row"]',
            $contextNode
        );
        if ($nodes->length === 0) {
            return null;
        } elseif ($nodes->length > 1) {
            throw new NetsuiteException(
                "Found more than one node for _parseRequestBody"
            );
        }

        $bodyNode = $nodes->item(0);

        return [
            'schema-ref' => $this->_domXPath->query('.//@href', $bodyNode)->item(0)->textContent,
            'schema-name' => $this->_domXPath->query('.//a', $bodyNode)->item(0)->textContent,
            'schema-desc' => Index::extractTextFromNode(
                $this->_domXPath,
                './/div[contains(@class, "prop-value")]/p',
                $bodyNode
            ),
        ];
    }

    /**
     * @param DOMNode $contextNode
     * @return array|null
     * @throws NetsuiteException
     */
    private function _parseFunctionRequestParamters($contextNode)
    {
        $parameters = [];
        $nodes = $this->_domXPath->query(
            './/div[@class="doc-row"]
            //div[@class="doc-copy"]
            //section[@class="swagger-request-params"]
            //div[@class="prop-row prop-group"]',
            $contextNode
        );
        if ($nodes->length === 0) {
            return null;
        }
        foreach ($nodes as $i => $parameterNode) {

            $enumValues = [];
            $enumsNode = $this->_domXPath->query(
                './/div[@class="prop-name"]
                //span[@class="json-property-enum"]
                //span',
                $parameterNode
            );
            if ($enumsNode->length > 0) {
                foreach ($enumsNode as $enumNode) {
                    $enumValues[] =  $enumNode->textContent;
                }
            }

            $parameters[] = [
                'name' =>
                    explode(
                    ':',
                    Index::extractTextFromNode(
                        $this->_domXPath,
                        './/div[@class="prop-name"]',
                        $parameterNode
                    )
                )[0],
                'type' => Index::extractTextFromNode(
                    $this->_domXPath,
                    './/div[@class="prop-name"]
                    //span[@class="json-property-type"]',
                    $parameterNode
                ),
                'subtitle' => Index::extractTextFromNode(
                    $this->_domXPath,
                    './/div[@class="prop-name"]
                    //div[@class="prop-subtitle"]',
                    $parameterNode
                ),
                'desc' => Index::extractTextFromNode(
                    $this->_domXPath,
                    './/div[@class="prop-value"]
                    /p',
                    $parameterNode
                ),
                'enumValues' => $enumValues,
                'range' => Index::extractTextFromNode(
                    $this->_domXPath,
                    './/div[@class="prop-name"]
                    //span[@class="json-property-range"]',
                    $parameterNode,
                    true
                ),
                'default_value' => Index::extractTextFromNode(
                    $this->_domXPath,
                    './/div[@class="prop-name"]
                    //span[@class="json-property-default-value"]',
                    $parameterNode,
                    true
                ),
                'required' => $this->_domXPath->query(
                    './/span[@class="json-property-required"]',
                    $parameterNode
                )->length > 0,
            ];
        }

        return $parameters;
    }

    /**
     * @param DOMNode $contextNode
     * @return array|null
     * @throws NetsuiteException
     */
    private function _parseFunctionResponses($contextNode)
    {
        $nodes = $this->_domXPath->query(
            './/div[@class="doc-row"]
            //div[@class="doc-copy"]
            //section[@class="swagger-responses"]',
            $contextNode
        );
        if ($nodes->length === 0) {
            return null;
        } elseif ($nodes->length > 1) {
            throw new NetsuiteException(
                "Found more than one node for _parseFunctionResponses"
            );
        }

        $responses = [];
        $responseNodes = $this->_domXPath->query(
            './/div[@class="prop-row prop-group"]',
            $nodes->item(0)
        );
        foreach ($responseNodes as $i => $responseNode) {
            $responses[] = [
                'title' => Index::extractTextFromNode(
                    $this->_domXPath,
                    './/div[@class="prop-title"]',
                    $responseNode
                ),
                'schema' => Index::extractTextFromNode(
                    $this->_domXPath,
                    './/div[@class="prop-ref"]
                    //a[@class="json-schema-ref"]',
                    $responseNode,
                    true
                ),
                'value' => Index::extractTextFromNode(
                    $this->_domXPath,
                    './/div[@class="prop-value"]
                    //p',
                    $responseNode
                ),
            ];
        }

        return $responses;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->_data;
    }
}
