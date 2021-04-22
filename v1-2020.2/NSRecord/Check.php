<?php
class NSRecord_Check extends RequestAbstract
{
   /**
    * GET /check
    * 
    * @param string $q                 Search query used to filter results. (in query)
    * @param int $limit                The limit used to specify the number of results on a single page. (in query)
    * @param int $offset               The offset used for selecting a specific page of results. (in query)
    * @return string json:checkCollection - List of records
    * @response [default] nsError - Error response
    */
    public function getListOfRecords($q = null, $limit = null, $offset = null)
    {
        $path = "/check";
        $args = $this->_argsToHttpParams(
            [
                'limit' => $limit,
                'offset' => $offset,
                'q' => $q,
            ]
        );

        return $this->_makeRequest('GET', $path, $args);
    }

   /**
    * POST /check
    * 
    * @param $body {check}
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @response [204 No Content]  - Inserted record
    * @response [default] nsError - Error response
    */
    public function insertRecord($body, $replace = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null)
    {
        $path = "/check";
        $args = $this->_argsToHttpParams(
            [
                'X-NetSuite-PropertyNameValidation' => $xNetSuitePropertyNameValidation,
                'X-NetSuite-PropertyValueValidation' => $xNetSuitePropertyValueValidation,
                'replace' => $replace,
            ]
        );

        return $this->_makeRequest('POST', $path, $args, $body);
    }

   /**
    * DELETE /check/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @response [204 No Content]  - Removed record
    * @response [default] nsError - Error response
    */
    public function removeRecord($id = null)
    {
        $path = "/check/$id";
        return $this->_makeRequest('DELETE', $path, []);
    }

   /**
    * GET /check/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @param bool $expandSubResources  Set to true to automatically expand all sublists, sublist lines and subrecords on this record. (in query)
    * @return string json:check - Retrieved record
    * @response [default] nsError - Error response
    */
    public function getRecord($id = null, $expandSubResources = null)
    {
        $path = "/check/$id";
        $args = $this->_argsToHttpParams(
            [
                'expandSubResources' => $expandSubResources,
            ]
        );

        return $this->_makeRequest('GET', $path, $args);
    }

   /**
    * PATCH /check/{id}
    * 
    * @param $body {check}
    * @param numeric $id [Required]    Internal identifier (in path)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @response [204 No Content]  - Updated record
    * @response [default] nsError - Error response
    */
    public function updateRecord($body, $id = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null, $replace = null)
    {
        $path = "/check/$id";
        $args = $this->_argsToHttpParams(
            [
                'X-NetSuite-PropertyNameValidation' => $xNetSuitePropertyNameValidation,
                'X-NetSuite-PropertyValueValidation' => $xNetSuitePropertyValueValidation,
                'replace' => $replace,
            ]
        );

        return $this->_makeRequest('PATCH', $path, $args, $body);
    }

   /**
    * PUT /check/{id}
    * 
    * @param $body {check}
    * @param string $id [Required]     External identifier (in path)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @response [204 No Content]  - Upserted record
    * @response [default] nsError - Error response
    */
    public function insertOrUpdateRecord($body, $id = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null, $replace = null)
    {
        $path = "/check/$id";
        $args = $this->_argsToHttpParams(
            [
                'X-NetSuite-PropertyNameValidation' => $xNetSuitePropertyNameValidation,
                'X-NetSuite-PropertyValueValidation' => $xNetSuitePropertyValueValidation,
                'replace' => $replace,
            ]
        );

        return $this->_makeRequest('PUT', $path, $args, $body);
    }

   /**
    * POST /check/{id}/!transform/journalEntry
    * 
    * @param $body {journalEntry}
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param numeric $id [Required]    Internal identifier (in path)
    * @response [204 No Content] journalEntry - Transformed record
    * @response [default] nsError - Error response
    */
    public function transformToJournalEntry($body, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null, $replace = null, $id = null)
    {
        $path = "/check/$id/!transform/journalEntry";
        $args = $this->_argsToHttpParams(
            [
                'X-NetSuite-PropertyNameValidation' => $xNetSuitePropertyNameValidation,
                'X-NetSuite-PropertyValueValidation' => $xNetSuitePropertyValueValidation,
                'replace' => $replace,
            ]
        );

        return $this->_makeRequest('POST', $path, $args, $body);
    }
}
