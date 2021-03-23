<?php
class NSRecord_Workplace extends RequestAbstract
{
   /**
    * [workplace]
    * This record is available as a beta record.
    *
    * @var array
    */
    public static $schema = [
        'externalId',              // string
        'fullName',                // string
        'id',                      // string
        'internalId',              // int
        'isInactive',              // bool
        'jurisdictioncounty',      // string enum(359522B29141429D9D0AD5F5D2C4A70C, 294689854D6F438792BBD81B078635DD, 67CE28BFBD684E42832242C5E08A9535, 90F275170D6A4096AE97FD957F4537DA, 84ED26FAC74F93A038E7B30B7CF04CTJ, BE436B3FD397402AA54C1EC60CBD3516, 7B8DCB673A914E8599927E5752533533, CE932A55D2374746B4A53361D59DC55C, 02F1C79052A6446B90560C6012342F0A, B778F8B5CAF040AC9AEAB2A262A84215)
        'jurisdictionfederal',     // string enum(359522B29141429D9D0AD5F5D2C4A70C, 294689854D6F438792BBD81B078635DD, 67CE28BFBD684E42832242C5E08A9535, 90F275170D6A4096AE97FD957F4537DA, 84ED26FAC74F93A038E7B30B7CF04CTJ, BE436B3FD397402AA54C1EC60CBD3516, 7B8DCB673A914E8599927E5752533533, CE932A55D2374746B4A53361D59DC55C, 02F1C79052A6446B90560C6012342F0A, B778F8B5CAF040AC9AEAB2A262A84215)
        'jurisdictionhist',        // WorkplaceJurisdictionhistCollection
        'jurisdictionlocal',       // string enum(359522B29141429D9D0AD5F5D2C4A70C, 294689854D6F438792BBD81B078635DD, 67CE28BFBD684E42832242C5E08A9535, 90F275170D6A4096AE97FD957F4537DA, 84ED26FAC74F93A038E7B30B7CF04CTJ, BE436B3FD397402AA54C1EC60CBD3516, 7B8DCB673A914E8599927E5752533533, CE932A55D2374746B4A53361D59DC55C, 02F1C79052A6446B90560C6012342F0A, B778F8B5CAF040AC9AEAB2A262A84215)
        'jurisdictionschool',      // string enum(359522B29141429D9D0AD5F5D2C4A70C, 294689854D6F438792BBD81B078635DD, 67CE28BFBD684E42832242C5E08A9535, 90F275170D6A4096AE97FD957F4537DA, 84ED26FAC74F93A038E7B30B7CF04CTJ, BE436B3FD397402AA54C1EC60CBD3516, 7B8DCB673A914E8599927E5752533533, CE932A55D2374746B4A53361D59DC55C, 02F1C79052A6446B90560C6012342F0A, B778F8B5CAF040AC9AEAB2A262A84215)
        'jurisdictionstate',       // string enum(359522B29141429D9D0AD5F5D2C4A70C, 294689854D6F438792BBD81B078635DD, 67CE28BFBD684E42832242C5E08A9535, 90F275170D6A4096AE97FD957F4537DA, 84ED26FAC74F93A038E7B30B7CF04CTJ, BE436B3FD397402AA54C1EC60CBD3516, 7B8DCB673A914E8599927E5752533533, CE932A55D2374746B4A53361D59DC55C, 02F1C79052A6446B90560C6012342F0A, B778F8B5CAF040AC9AEAB2A262A84215)
        'links',                   // NsLink, [read_only]
        'mainAddress',             // WorkplaceMainAddress
        'name',                    // string
        'parent',                  // Workplace
        'refName',                 // string, [read_only]
        'subsidiary',              // Subsidiary
    ];    

   /**
    * GET /workplace
    * 
    * @param string $q                 Search query used to filter results. (in query)
    * @param int $limit                The limit used to specify the number of results on a single page. (in query)
    * @param int $offset               The offset used for selecting a specific page of results. (in query)
    * @return string json:workplaceCollection - List of records
    * @response [default] nsError - Error response
    */
    public function getListOfRecords($q = null, $limit = null, $offset = null)
    {
        $parts = [];
        $path = "/workplace";
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
    * POST /workplace
    * 
    * @param $body {workplace}
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @response [204 No Content]  - Inserted record
    * @response [default] nsError - Error response
    */
    public function insertRecord($body, $replace = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null)
    {
        $parts = [];
        $path = "/workplace";
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
    * DELETE /workplace/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @response [204 No Content]  - Removed record
    * @response [default] nsError - Error response
    */
    public function removeRecord($id = null)
    {
        $path = "/workplace/$id";
        $response = $this->_makeRequest('DELETE', $path);

        return $response;
    }

   /**
    * GET /workplace/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @param bool $expandSubResources  Set to true to automatically expand all sublists, sublist lines and subrecords on this record. (in query)
    * @return string json:workplace - Retrieved record
    * @response [default] nsError - Error response
    */
    public function getRecord($id = null, $expandSubResources = null)
    {
        $parts = [];
        $path = "/workplace/$id";
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
    * PATCH /workplace/{id}
    * 
    * @param $body {workplace}
    * @param numeric $id [Required]    Internal identifier (in path)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @response [204 No Content]  - Updated record
    * @response [default] nsError - Error response
    */
    public function updateRecord($body, $id = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null, $replace = null)
    {
        $parts = [];
        $path = "/workplace/$id";
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

   /**
    * PUT /workplace/{id}
    * 
    * @param $body {workplace}
    * @param string $id [Required]     External identifier (in path)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @response [204 No Content]  - Upserted record
    * @response [default] nsError - Error response
    */
    public function insertOrUpdateRecord($body, $id = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null, $replace = null)
    {
        $parts = [];
        $path = "/workplace/$id";
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
        $response = $this->_makeRequest('PUT', $path, $body);

        return $response;
    }
}
