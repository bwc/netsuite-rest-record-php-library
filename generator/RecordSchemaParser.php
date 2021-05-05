<?php
declare(strict_types=1);

class RecordSchemaParser
{
    /**
     * @var DOMXPath
     */
    private $_domXPath = null;

    /**
     * @var array
     */
    private $_data = [];

    public function __construct($domXPath)
    {
        $this->_domXPath = $domXPath;
        $this->_parse();
    }

    private function _parse()
    {
        if (!empty($this->_data)) {
            return;
        }

        $panelNodes = $this->_domXPath->query('//div[@class="definition panel"]');
        foreach ($panelNodes as $panelNode) {
            $title = Index::extractTextFromNode(
                $this->_domXPath, './/h2[@class="panel-title"]', $panelNode, true
            );
            $desc = Index::extractTextFromNode(
                $this->_domXPath, './/section[@class="json-schema-description"]', $panelNode, true
            );
            $fields = [];
            $fieldNodes = $this->_domXPath->query(
                './/section[@class="json-schema-properties"]/dl//dt', $panelNode
            );
            $lastName = '';
            foreach ($fieldNodes as $fieldNode) {
                $fieldName = Index::extractTextFromNode(
                    $this->_domXPath, './/span[@class="json-property-name"]', $fieldNode, true
                );
                $fieldType = Index::extractTextFromNode(
                    $this->_domXPath, './/span[@class="json-property-type"]', $fieldNode, true
                );
                $fieldFormat = Index::extractTextFromNode(
                    $this->_domXPath, './/span[@class="json-property-format"]', $fieldNode, true
                );
                $fieldRange = Index::extractTextFromNode(
                    $this->_domXPath, './/span[@class="json-property-range"]', $fieldNode, true
                );
                $fieldReadOnly = $this->_domXPath->query(
                    './/span[@class="json-property-read-only"]', $fieldNode
                )->length > 0;
                $enumNodes = $this->_domXPath->query('.//span[@class="json-property-enum"]', $fieldNode);
                $fieldEnum = [];
                foreach ($enumNodes as $enumNode) {
                    $enumValues = [];
                    $enumsNode = $this->_domXPath->query(
                        './/span[@class="json-property-enum-item"]',
                        $enumNode
                    );
                    if ($enumsNode->length > 0) {
                        foreach ($enumsNode as $enumNode) {
                            $fieldEnum[] =  $enumNode->textContent;
                        }
                    }
                }

                if (empty($fieldName)) {
                    if ($lastName === '') {
                        throw new Exception('Two empty sequential rows');
                    } else {
                        $fields[$lastName]['sub-field'] = [
                            'type' => $fieldType,
                            'read_only' => $fieldReadOnly,
                        ];
                        $lastName = '';
                    }
                } else {
                    $fields[$fieldName] = [
                        'type' => $fieldType,
                        'format' => $fieldFormat,
                        'range' => $fieldRange,
                        'read_only' => $fieldReadOnly,
                        'enum_items' => $fieldEnum
                    ];
                    $lastName = $fieldName;
                }
            }

            $this->_data[$title] = [
                'desc' => $desc,
                'fields' => $fields
            ];
        }
    }

    public function getData()
    {
        return $this->_data;
    }
}