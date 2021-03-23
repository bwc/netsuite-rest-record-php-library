<?php
class NSRecord_OtherName extends RequestAbstract
{
   /**
    * [otherName]
    * This record is available as a beta record.
    *
    * @var array
    */
    public static $schema = [
        'accountNumber',           // string
        'addressBook',             // OtherNameAddressBookCollection
        'altEmail',                // string
        'altName',                 // string
        'autoName',                // bool
        'balance',                 // float
        'bcn',                     // string
        'bulkMerge',               // OtherNameBulkMergeCollection
        'campaigns',               // OtherNameCampaignsCollection
        'category',                // OtherNameCategory
        'comments',                // string
        'companyName',             // string
        'contact',                 // Contact
        'contactList',             // ContactCollection
        'creditLimit',             // float
        'currency',                // Currency
        'dateCreated',             // string
        'defaultAddress',          // string
        'defaultBillingAddress',   // string
        'defaultShippingAddress',  // string
        'defaultTaxReg',           // string
        'defaultTaxRegOptions',    // string
        'edition',                 // string enum(XX, AU, UK, JP, US, CA)
        'email',                   // string
        'emailPreference',         // string enum(PDF, HTML, DEFAULT)
        'emailVal',                // string
        'entityId',                // string
        'entityNumber',            // int
        'entityStatus',            // string
        'entityTitle',             // string
        'externalId',              // string
        'fax',                     // string
        'firstName',               // string
        'globalSubscriptionStatus',// string enum(1, 2, 3, 4)
        'glommedName',             // string
        'hasShippingAddress',      // bool
        'homePhone',               // string
        'id',                      // string
        'image',                   // NsResource
        'isInactive',              // bool
        'isIndividual',            // bool
        'isPerson',                // bool
        'lastModifiedDate',        // string
        'lastName',                // string
        'links',                   // NsLink, [read_only]
        'middleName',              // string
        'mobilePhone',             // string
        'openingbalance',          // float
        'openingbalanceaccount',   // Account
        'openingbalancedate',      // string
        'phone',                   // string
        'phoneticName',            // string
        'printOnCheckAs',          // string
        'refName',                 // string, [read_only]
        'salutation',              // string
        'shipAddr1',               // string
        'shipAddr2',               // string
        'shipAddr3',               // string
        'shipAddressee',           // string
        'shipAttention',           // string
        'shipCity',                // string
        'shipCountry',             // string
        'shipState',               // string
        'shipZip',                 // string
        'shipping_country',        // string enum(PR, PS, PT, PW, PY, QA, AD, AE, AF, AG)
        'subscriptionMessageHistory',// OtherNameSubscriptionMessageHistoryCollection
        'subscriptions',           // OtherNameSubscriptionsCollection
        'subsidiary',              // Subsidiary
        'taxFractionUnit',         // string enum(2, 1, 0, -1, -2)
        'taxIdNum',                // string
        'taxRegistration',         // OtherNameTaxRegistrationCollection
        'taxRounding',             // string enum(DOWN, UP, OFF)
        'terms',                   // Term
        'title',                   // string
        'url',                     // string
        'vatRegNumber',            // string
    ];    

   /**
    * GET /otherName
    * 
    * @param string $q                 Search query used to filter results. (in query)
    * @param int $limit                The limit used to specify the number of results on a single page. (in query)
    * @param int $offset               The offset used for selecting a specific page of results. (in query)
    * @return string json:otherNameCollection - List of records
    * @response [default] nsError - Error response
    */
    public function getListOfRecords($q = null, $limit = null, $offset = null)
    {
        $parts = [];
        $path = "/otherName";
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
    * POST /otherName
    * 
    * @param $body {otherName}
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @response [204 No Content]  - Inserted record
    * @response [default] nsError - Error response
    */
    public function insertRecord($body, $replace = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null)
    {
        $parts = [];
        $path = "/otherName";
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
    * DELETE /otherName/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @response [204 No Content]  - Removed record
    * @response [default] nsError - Error response
    */
    public function removeRecord($id = null)
    {
        $path = "/otherName/$id";
        $response = $this->_makeRequest('DELETE', $path);

        return $response;
    }

   /**
    * GET /otherName/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @param bool $expandSubResources  Set to true to automatically expand all sublists, sublist lines and subrecords on this record. (in query)
    * @return string json:otherName - Retrieved record
    * @response [default] nsError - Error response
    */
    public function getRecord($id = null, $expandSubResources = null)
    {
        $parts = [];
        $path = "/otherName/$id";
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
    * PATCH /otherName/{id}
    * 
    * @param $body {otherName}
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
        $path = "/otherName/$id";
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
    * PUT /otherName/{id}
    * 
    * @param $body {otherName}
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
        $path = "/otherName/$id";
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
