<?php
class NSRecord_Subsidiary extends RequestAbstract
{
   /**
    * [subsidiary]
    * 
    *
    * @var array
    */
    public static $schema = [
        'country',                 // string enum(PR, PS, PT, PW, PY, QA, AD, AE, AF, AG)
        'currency',                // Currency
        'email',                   // string
        'externalId',              // string
        'fax',                     // string
        'fullName',                // string
        'id',                      // string
        'internalId',              // int
        'isElimination',           // bool
        'isInactive',              // bool
        'lastModifiedDate',        // string
        'legalName',               // string
        'links',                   // NsLink, [read_only]
        'mainAddress',             // SubsidiaryMainAddress
        'name',                    // string
        'parent',                  // Subsidiary
        'refName',                 // string, [read_only]
        'representingCustomer',    // Customer
        'representingVendor',      // Vendor
        'returnAddress',           // SubsidiaryReturnAddress
        'shippingAddress',         // SubsidiaryShippingAddress
        'state',                   // string
        'tranInternalPrefix',      // string
        'url',                     // string
    ];    

   /**
    * GET /subsidiary
    * 
    * @param string $q                 Search query used to filter results. (in query)
    * @param int $limit                The limit used to specify the number of results on a single page. (in query)
    * @param int $offset               The offset used for selecting a specific page of results. (in query)
    * @return string json:subsidiaryCollection - List of records
    * @response [default] nsError - Error response
    */
    public function getListOfRecords($q = null, $limit = null, $offset = null)
    {
        $parts = [];
        $path = "/subsidiary";
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
    * GET /subsidiary/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @param bool $expandSubResources  Set to true to automatically expand all sublists, sublist lines and subrecords on this record. (in query)
    * @return string json:subsidiary - Retrieved record
    * @response [default] nsError - Error response
    */
    public function getRecord($id = null, $expandSubResources = null)
    {
        $parts = [];
        $path = "/subsidiary/$id";
        if ($expandSubResources) {
            $parts[] = 'expandSubResources=' . urlencode((string)$expandSubResources);
        }
        if ($parts) {
            $path .= '?' . implode('&', $parts);
        }
        $response = $this->_makeRequest('GET', $path);

        return $response;
    }
}
