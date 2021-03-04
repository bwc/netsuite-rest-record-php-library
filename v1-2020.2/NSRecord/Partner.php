<?php
class NSRecord_Partner extends RequestAbstract
{
   /**
    * [partner]
    * This record is available as a beta record.
    *
    * @var array
    */
    public static $schema = [
        'addressBook',             // PartnerAddressBookCollection
        'altEmail',                // string
        'altName',                 // string
        'autoName',                // bool
        'bcn',                     // string
        'bulkMerge',               // PartnerBulkMergeCollection
        'campaigns',               // PartnerCampaignsCollection
        'category',                // PartnerCategoryCollection
        'class',                   // Classification
        'comments',                // string
        'companyName',             // string
        'contact',                 // Contact
        'contactList',             // ContactCollection
        'contactRoles',            // PartnerContactRolesCollection
        'customForm',              // string enum(-10916, -10915, -10914, -20961, -10230, -893, -892, -410, -891, -770)
        'dateCreated',             // string
        'defaultAddress',          // string
        'defaultBillingAddress',   // string
        'defaultShippingAddress',  // string
        'defaultTaxReg',           // string
        'defaultTaxRegOptions',    // string
        'department',              // Department
        'edition',                 // string enum(XX, AU, UK, JP, US, CA)
        'eligibleForCommission',   // bool
        'email',                   // string
        'emailPreference',         // string enum(PDF, HTML, DEFAULT)
        'emailVal',                // string
        'entityId',                // string
        'entityNumber',            // int
        'entityTitle',             // string
        'externalId',              // string
        'fax',                     // string
        'firstName',               // string
        'giveAccess',              // bool
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
        'location',                // Location
        'middleName',              // string
        'mobilePhone',             // string
        'parent',                  // Partner
        'parentSubsidiary',        // string
        'partnerCode',             // string
        'phone',                   // string
        'phoneticName',            // string
        'prevEligibleForCommission',// bool
        'printOnCheckAs',          // string
        'refName',                 // string, [read_only]
        'referringUrl',            // string
        'requirePwdChange',        // bool
        'salutation',              // string
        'sendEmail',               // bool
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
        'subpartnerLogin',         // bool
        'subscriptionMessageHistory',// PartnerSubscriptionMessageHistoryCollection
        'subscriptions',           // PartnerSubscriptionsCollection
        'subsidiary',              // Subsidiary
        'taxFractionUnit',         // string enum(2, 1, 0, -1, -2)
        'taxIdNum',                // string
        'taxRegistration',         // PartnerTaxRegistrationCollection
        'taxRounding',             // string enum(DOWN, UP, OFF)
        'title',                   // string
        'url',                     // string
        'vatRegNumber',            // string
    ];    

   /**
    * GET /partner
    * 
    * @param string $q                 Search query used to filter results. (in query)
    * @param int $limit                The limit used to specify the number of results on a single page. (in query)
    * @param int $offset               The offset used for selecting a specific page of results. (in query)
    * @return string json:partnerCollection - List of records 
    * @meta [default] nsError - Error response 
    */
    public function getListOfRecords($q = null, $limit = null, $offset = null)
    {
        $parts = [];
        $path = "/partner";
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
    * POST /partner
    * 
    * @param $body {partner}
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @meta [204 No Content]  - Inserted record 
    * @meta [default] nsError - Error response 
    */
    public function insertRecord($body, $replace = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null)
    {
        $parts = [];
        $path = "/partner";
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
    * DELETE /partner/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @meta [204 No Content]  - Removed record 
    * @meta [default] nsError - Error response 
    */
    public function removeRecord($id = null)
    {
        $path = "/partner/$id";
        $response = $this->_makeRequest('DELETE', $path);

        return $response;
    }

   /**
    * GET /partner/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @param bool $expandSubResources  Set to true to automatically expand all sublists, sublist lines and subrecords on this record. (in query)
    * @return string json:partner - Retrieved record 
    * @meta [default] nsError - Error response 
    */
    public function getRecord($id = null, $expandSubResources = null)
    {
        $parts = [];
        $path = "/partner/$id";
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
    * PATCH /partner/{id}
    * 
    * @param $body {partner}
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
        $path = "/partner/$id";
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
    * PUT /partner/{id}
    * 
    * @param $body {partner}
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
        $path = "/partner/$id";
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
