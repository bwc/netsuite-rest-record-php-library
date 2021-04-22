<?php
class NSRecord_AssemblyItem extends RequestAbstract
{
   /**
    * GET /assemblyItem
    * 
    * @param string $q                 Search query used to filter results. (in query)
    * @param int $limit                The limit used to specify the number of results on a single page. (in query)
    * @param int $offset               The offset used for selecting a specific page of results. (in query)
    * @return string json:assemblyItemCollection - List of records
    * @response [default] nsError - Error response
    */
    public function getListOfRecords($q = null, $limit = null, $offset = null)
    {
        $path = "/assemblyItem";
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
    * POST /assemblyItem
    * 
    * @param $body {assemblyItem}
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @response [204 No Content]  - Inserted record
    * @response [default] nsError - Error response
    */
    public function insertRecord($body, $replace = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null)
    {
        $path = "/assemblyItem";
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
    * DELETE /assemblyItem/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @response [204 No Content]  - Removed record
    * @response [default] nsError - Error response
    */
    public function removeRecord($id = null)
    {
        $path = "/assemblyItem/$id";
        return $this->_makeRequest('DELETE', $path, []);
    }

   /**
    * GET /assemblyItem/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @param bool $expandSubResources  Set to true to automatically expand all sublists, sublist lines and subrecords on this record. (in query)
    * @return string json:assemblyItem - Retrieved record
    * @response [default] nsError - Error response
    */
    public function getRecord($id = null, $expandSubResources = null)
    {
        $path = "/assemblyItem/$id";
        $args = $this->_argsToHttpParams(
            [
                'expandSubResources' => $expandSubResources,
            ]
        );

        return $this->_makeRequest('GET', $path, $args);
    }

   /**
    * PATCH /assemblyItem/{id}
    * 
    * @param $body {assemblyItem}
    * @param numeric $id [Required]    Internal identifier (in path)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @response [204 No Content]  - Updated record
    * @response [default] nsError - Error response
    */
    public function updateRecord($body, $id = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null, $replace = null)
    {
        $path = "/assemblyItem/$id";
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
    * PUT /assemblyItem/{id}
    * 
    * @param $body {assemblyItem}
    * @param string $id [Required]     External identifier (in path)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @response [204 No Content]  - Upserted record
    * @response [default] nsError - Error response
    */
    public function insertOrUpdateRecord($body, $id = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null, $replace = null)
    {
        $path = "/assemblyItem/$id";
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
    * POST /assemblyItem/{id}/!transform/assemblyBuild
    * 
    * @param $body {assemblyBuild}
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param numeric $id [Required]    Internal identifier (in path)
    * @response [204 No Content] assemblyBuild - Transformed record
    * @response [default] nsError - Error response
    */
    public function transformToAssemblyBuild($body, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null, $replace = null, $id = null)
    {
        $path = "/assemblyItem/$id/!transform/assemblyBuild";
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
    * POST /assemblyItem/{id}/!transform/workOrder
    * 
    * @param $body {workOrder}
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param numeric $id [Required]    Internal identifier (in path)
    * @response [204 No Content] workOrder - Transformed record
    * @response [default] nsError - Error response
    */
    public function transformToWorkOrder($body, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null, $replace = null, $id = null)
    {
        $path = "/assemblyItem/$id/!transform/workOrder";
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
