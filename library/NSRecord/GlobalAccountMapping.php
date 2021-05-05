<?php
class NSRecord_GlobalAccountMapping extends RequestAbstract
{
   /**
    * GET /globalAccountMapping
    * 
    * @param string $q                 
    * @param int $limit                
    * @param int $offset               
    * @param string enum(respond-async) $prefer
    * @return string json:globalAccountMappingCollection - List of records.
    * @response [default] nsError - Error response.
    */
    public function getListOfRecords($q = null, $limit = null, $offset = null, $prefer = null)
    {
        $path = "/globalAccountMapping";
        $args = $this->_argsToHttpParams(
            [
                'Prefer' => $prefer,
                'limit' => $limit,
                'offset' => $offset,
                'q' => $q,
            ]
        );

        return $this->_makeRequest('GET', $path, $args);
    }

   /**
    * POST /globalAccountMapping
    * 
    * @param $body {globalAccountMapping}
    * @param string $replace           
    * @param string enum(respond-async) $prefer
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidation
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidation
    * @response [204 No Content]  - Inserted record.
    * @response [default] nsError - Error response.
    */
    public function insertRecord($body, $replace = null, $prefer = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null)
    {
        $path = "/globalAccountMapping";
        $args = $this->_argsToHttpParams(
            [
                'Prefer' => $prefer,
                'X-NetSuite-PropertyNameValidation' => $xNetSuitePropertyNameValidation,
                'X-NetSuite-PropertyValueValidation' => $xNetSuitePropertyValueValidation,
                'replace' => $replace,
            ]
        );

        return $this->_makeRequest('POST', $path, $args, $body);
    }

   /**
    * DELETE /globalAccountMapping/{id}
    * 
    * @param int $id [Required]        
    * @param string enum(respond-async) $prefer
    * @response [204 No Content]  - Removed record.
    * @response [default] nsError - Error response.
    */
    public function removeRecord($id = null, $prefer = null)
    {
        $path = "/globalAccountMapping/$id";
        $args = $this->_argsToHttpParams(
            [
                'Prefer' => $prefer,
            ]
        );

        return $this->_makeRequest('DELETE', $path, $args);
    }

   /**
    * GET /globalAccountMapping/{id}
    * 
    * @param int $id [Required]        
    * @param bool $expandSubResources  
    * @param bool $simpleEnumFormat    
    * @param string $fields            
    * @param string enum(respond-async) $prefer
    * @return string json:globalAccountMapping - Retrived record.
    * @response [default] nsError - Error response.
    */
    public function getRecord($id = null, $expandSubResources = null, $simpleEnumFormat = null, $fields = null, $prefer = null)
    {
        $path = "/globalAccountMapping/$id";
        $args = $this->_argsToHttpParams(
            [
                'Prefer' => $prefer,
                'expandSubResources' => $expandSubResources,
                'fields' => $fields,
                'simpleEnumFormat' => $simpleEnumFormat,
            ]
        );

        return $this->_makeRequest('GET', $path, $args);
    }

   /**
    * PATCH /globalAccountMapping/{id}
    * 
    * @param $body {globalAccountMapping}
    * @param int $id [Required]        
    * @param string $replace           
    * @param bool $replaceSelectedFields
    * @param string enum(respond-async) $prefer
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidation
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidation
    * @response [204 No Content]  - Updated record.
    * @response [default] nsError - Error response.
    */
    public function updateRecord($body, $id = null, $replace = null, $replaceSelectedFields = null, $prefer = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null)
    {
        $path = "/globalAccountMapping/$id";
        $args = $this->_argsToHttpParams(
            [
                'Prefer' => $prefer,
                'X-NetSuite-PropertyNameValidation' => $xNetSuitePropertyNameValidation,
                'X-NetSuite-PropertyValueValidation' => $xNetSuitePropertyValueValidation,
                'replace' => $replace,
                'replaceSelectedFields' => $replaceSelectedFields,
            ]
        );

        return $this->_makeRequest('PATCH', $path, $args, $body);
    }

   /**
    * PUT /globalAccountMapping/{id}
    * 
    * @param $body {globalAccountMapping}
    * @param string $id [Required]     
    * @param string $replace           
    * @param bool $replaceSelectedFields
    * @param string enum(respond-async) $prefer
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidation
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidation
    * @response [204 No Content]  - Upserted record.
    * @response [default] nsError - Error response.
    */
    public function insertOrUpdateRecord($body, $id = null, $replace = null, $replaceSelectedFields = null, $prefer = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null)
    {
        $path = "/globalAccountMapping/$id";
        $args = $this->_argsToHttpParams(
            [
                'Prefer' => $prefer,
                'X-NetSuite-PropertyNameValidation' => $xNetSuitePropertyNameValidation,
                'X-NetSuite-PropertyValueValidation' => $xNetSuitePropertyValueValidation,
                'replace' => $replace,
                'replaceSelectedFields' => $replaceSelectedFields,
            ]
        );

        return $this->_makeRequest('PUT', $path, $args, $body);
    }
}
