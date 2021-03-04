<?php
class NSRecord_Location extends RequestAbstract
{
   /**
    * [location]
    * This record is available as a beta record.
    *
    * @var array
    */
    public static $schema = [
        'allowstorepickup',        // bool
        'autoassignmentregionsetting',// string enum(0, 1, 2, 3)
        'bufferstock',             // int
        'businesshours',           // LocationBusinesshoursCollection
        'canshipfromlocation',     // bool
        'classtranslation',        // LocationClasstranslationCollection
        'cutOffTimeZone',          // string
        'dailyshippingcapacity',   // int
        'defaultallocationpriority',// float
        'docNumbering',            // LocationDocNumberingCollection
        'excludelocationregions',  // LocationExcludelocationregionsCollection
        'externalId',              // string
        'fullName',                // string
        'geolocationmethod',       // string enum(POSTALCODE, LATLONG)
        'hasbins',                 // bool
        'hasopensalesorders',      // string
        'hastransactions',         // bool
        'id',                      // string
        'includechildren',         // bool
        'includeincontroltower',   // bool
        'includeinsupplyplanning', // bool
        'includelocationregions',  // LocationIncludelocationregionsCollection
        'internalId',              // int
        'invtturnovervelocity',    // int
        'isInactive',              // bool
        'lastModifiedDate',        // string
        'latitude',                // float
        'links',                   // NsLink, [read_only]
        'locationtype',            // string enum(1, 2)
        'logo',                    // NsResource
        'longitude',               // float
        'mainAddress',             // LocationMainAddress
        'makeinventoryavailable',  // bool
        'makeinventoryavailablestore',// bool
        'name',                    // string
        'nextpickupcutofftime',    // string
        'parent',                  // Location
        'pickupalertemail',        // string
        'refName',                 // string, [read_only]
        'returnAddress',           // LocationReturnAddress
        'samedayshipcutoff',       // string
        'samedayshipcutoff_picker',// string enum(2020-10-12 01:00:00, 2020-10-12 00:30:00, 2020-10-12 08:00:00, 2020-10-12 16:00:00, 2020-10-12 21:00:00, 2020-10-12 11:00:00, 2020-10-12 18:00:00, 2020-10-12 03:00:00, 2020-10-12 06:00:00, 2020-10-12 20:30:00)
        'sopredconfidence',        // float
        'sopredicteddays',         // int
        'storefulfillmentmemo',    // string
        'storepickupbufferstock',  // float
        'subsidiary',              // SubsidiaryCollection
        'timezone',                // string enum(America/Sao_Paulo, Asia/Vladivostok, Africa/Nairobi, Asia/Hong_Kong, Asia/Riyadh, Pacific/Kwajalein, America/Montevideo, Africa/Cairo, Africa/Windhoek, Europe/Moscow)
        'topredconfidence',        // float
        'topredicteddays',         // int
        'totalshippingcapacity',   // int
        'tranInternalPrefix',      // string
        'tranNumbering',           // LocationTranNumberingCollection
        'tranPrefix',              // string
        'usebins',                 // bool
        'usewarehousemanagement',  // bool
    ];    

   /**
    * GET /location
    * 
    * @param string $q                 Search query used to filter results. (in query)
    * @param int $limit                The limit used to specify the number of results on a single page. (in query)
    * @param int $offset               The offset used for selecting a specific page of results. (in query)
    * @return string json:locationCollection - List of records 
    * @meta [default] nsError - Error response 
    */
    public function getListOfRecords($q = null, $limit = null, $offset = null)
    {
        $parts = [];
        $path = "/location";
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
    * POST /location
    * 
    * @param $body {location}
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @meta [204 No Content]  - Inserted record 
    * @meta [default] nsError - Error response 
    */
    public function insertRecord($body, $replace = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null)
    {
        $parts = [];
        $path = "/location";
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
    * DELETE /location/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @meta [204 No Content]  - Removed record 
    * @meta [default] nsError - Error response 
    */
    public function removeRecord($id = null)
    {
        $path = "/location/$id";
        $response = $this->_makeRequest('DELETE', $path);

        return $response;
    }

   /**
    * GET /location/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @param bool $expandSubResources  Set to true to automatically expand all sublists, sublist lines and subrecords on this record. (in query)
    * @return string json:location - Retrieved record 
    * @meta [default] nsError - Error response 
    */
    public function getRecord($id = null, $expandSubResources = null)
    {
        $parts = [];
        $path = "/location/$id";
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
    * PATCH /location/{id}
    * 
    * @param $body {location}
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
        $path = "/location/$id";
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
    * PUT /location/{id}
    * 
    * @param $body {location}
    * @param string $id [Required]     External identifier (in path)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @meta [204 No Content]  - Upserted record 
    * @meta [default] nsError - Error response 
    */
    public function insertOrUpdateRecord($body, $id = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null, $replace = null)
    {
        $parts = [];
        $path = "/location/$id";
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
