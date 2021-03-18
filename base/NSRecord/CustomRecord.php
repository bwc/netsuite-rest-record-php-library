<?php

/**
 * Class for Custom Records
 */
class NSRecord_CustomRecord extends RequestAbstract
{
    /**
     * Format: customrecord_1234_abcdef
     *
     * @var string
     */
    private $_customRecordName = '';

    /**
     * @var array
     */
    public static $schema = [];

    public function setCustomRecordName($customRecordName)
    {
        $this->_customRecordName = $customRecordName;

        return $this;
    }

    public function getCustomRecordName()
    {
        if (empty($this->_customRecordName)) {
            throw new NetsuiteException('Custom Record Name is not set');
        }

        return $this->_customRecordName;
    }

    /**
     * GET /{customrecord_1234_abcdef}
     *
     * @param string $q                 Search query used to filter results. (in query)
     * @param int $limit                The limit used to specify the number of results on a single page. (in query)
     * @param int $offset               The offset used for selecting a specific page of results. (in query)
     * @return string json:customRecordCollection - List of records
     * @meta [default] nsError - Error response
     */
    public function getListOfRecords($q = null, $limit = null, $offset = null)
    {
        $parts = [];
        $path = "/{$this->getCustomRecordName()}";
        if ($q) {
            $parts[] = 'q=' . urlencode((string)$q);
        }
        if ($limit) {
            $parts[] = 'limit=' . urlencode((string)$limit);
        }
        if ($offset) {
            $parts[] = 'offset=' . urlencode((string)$offset);
        }
        if ($parts) {
            $path .= '?' . implode('&', $parts);
        }
        $response = $this->_makeRequest('GET', $path);

        return $response;
    }

    /**
     * POST /{customrecord_1234_abcdef}
     *
     * @param $body {customrecord_1234_abcdef}
     * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
     * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
     * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
     * @meta [204 No Content]  - Inserted record
     * @meta [default] nsError - Error response
     */
    public function insertRecord($body, $replace = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null)
    {
        $parts = [];
        $path = "/{$this->getCustomRecordName()}";
        if ($replace) {
            $parts[] = 'replace=' . urlencode((string)$replace);
        }
        if ($xNetSuitePropertyNameValidation) {
            $parts[] = 'X-NetSuite-PropertyNameValidation=' . urlencode((string)$xNetSuitePropertyNameValidation);
        }
        if ($xNetSuitePropertyValueValidation) {
            $parts[] = 'X-NetSuite-PropertyValueValidation=' . urlencode((string)$xNetSuitePropertyValueValidation);
        }
        if ($parts) {
            $path .= '?' . implode('&', $parts);
        }
        $response = $this->_makeRequest('POST', $path, $body);

        return $response;
    }

    /**
     * DELETE //{customrecord_1234_abcdef}/{id}
     *
     * @param numeric $id [Required]    Internal identifier (in path)
     * @meta [204 No Content]  - Removed record
     * @meta [default] nsError - Error response
     */
    public function removeRecord($id = null)
    {
        $path = "/{$this->getCustomRecordName()}/$id";
        $response = $this->_makeRequest('DELETE', $path);

        return $response;
    }

    /**
     * GET //{customrecord_1234_abcdef}/{id}
     *
     * @param numeric $id [Required]    Internal identifier (in path)
     * @param bool $expandSubResources  Set to true to automatically expand all sublists, sublist lines and subrecords on this record. (in query)
     * @return string json:customRecord - Retrieved record
     * @meta [default] nsError - Error response
     */
    public function getRecord($id = null, $expandSubResources = null)
    {
        $parts = [];
        $path = "/{$this->getCustomRecordName()}/$id";
        if ($expandSubResources) {
            $parts[] = 'expandSubResources=' . urlencode((string)$expandSubResources);
        }
        if ($parts) {
            $path .= '?' . implode('&', $parts);
        }
        $response = $this->_makeRequest('GET', $path);

        return $response;
    }

    /**
     * PATCH //{customrecord_1234_abcdef}/{id}
     *
     * @param $body {customrecord_1234_abcdef}
     * @param numeric $id [Required]    Internal identifier (in path)
     * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
     * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
     * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
     * @meta [204 No Content]  - Updated record
     * @meta [default] nsError - Error response
     */
    public function updateRecord($body, $id = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null, $replace = null)
    {
        $parts = [];
        $path = "/{$this->getCustomRecordName()}/$id";
        if ($xNetSuitePropertyNameValidation) {
            $parts[] = 'X-NetSuite-PropertyNameValidation=' . urlencode((string)$xNetSuitePropertyNameValidation);
        }
        if ($xNetSuitePropertyValueValidation) {
            $parts[] = 'X-NetSuite-PropertyValueValidation=' . urlencode((string)$xNetSuitePropertyValueValidation);
        }
        if ($replace) {
            $parts[] = 'replace=' . urlencode((string)$replace);
        }
        if ($parts) {
            $path .= '?' . implode('&', $parts);
        }
        $response = $this->_makeRequest('PATCH', $path, $body);

        return $response;
    }
}
