<?php
class NSRecord_GiftCertificateItem extends RequestAbstract
{
   /**
    * [giftCertificateItem]
    * This record is available as a beta record.
    *
    * @var array
    */
    public static $schema = [
        'authCodes',               // GiftCertificateItemAuthCodesCollection
        'availableToPartners',     // bool
        'billingSchedule',         // BillingSchedule
        'class',                   // Classification
        'correlatedItems',         // GiftCertificateItemCorrelatedItemsCollection
        'costEstimate',            // float
        'costEstimateType',        // string enum(PREFVENDORRATE, AVGCOST, PURCHORDERRATE, LASTPURCHPRICE, MEMBERDEFINED, CUSTOM, ITEMDEFINED, PURCHPRICE)
        'createdDate',             // string
        'customForm',              // string enum(-10916, -10915, -10914, -20961, -10230, -893, -892, -410, -891, -770)
        'daysBeforeExpiration',    // int
        'department',              // Department
        'description',             // string
        'displayName',             // string
        'dontShowPrice',           // bool
        'excludeFromSiteMap',      // bool
        'externalId',              // string
        'featuredDescription',     // string
        'id',                      // string
        'includeChildren',         // bool
        'incomeAccount',           // Account
        'internalId',              // int
        'invt_DispName',           // string
        'invt_SalesDesc',          // string
        'isFulfillable',           // bool
        'isGCoCompliant',          // bool
        'isInactive',              // bool
        'isOnline',                // bool
        'isTaxable',               // bool
        'issueProduct',            // IssueProduct
        'itemId',                  // string
        'itemType',                // string enum(Group, Discount, Description, EndGroup, GiftCert, Subtotal, Service, ShipItem, InvtPart, TaxItem)
        'lastModifiedDate',        // string
        'liabilityAccount',        // Account
        'links',                   // NsLink, [read_only]
        'location',                // Location
        'metaTagHtml',             // string
        'noPriceMessage',          // string
        'offerSupport',            // bool
        'onSpecial',               // bool
        'outOfStockBehavior',      // string enum(DISABLE, ENABLENMSG, REMOVE, ENABLE, DEFAULT)
        'outOfStockMessage',       // string
        'pageTitle',               // string
        'parent',                  // GiftCertificateItem
        'parentOnly',              // bool
        'pf',                      // string
        'pi',                      // string
        'pr',                      // string
        'presentationItem',        // GiftCertificateItemPresentationItemCollection
        'price',                   // GiftCertificateItemPrice
        'pricesIncludeTax',        // bool
        'pricingGroup',            // PricingGroup
        'rate',                    // float
        'rateIncludingTax',        // float
        'refName',                 // string, [read_only]
        'salesDescription',        // string
        'salesTaxCode',            // NsResource
        'searchKeywords',          // string
        'siteCategory',            // GiftCertificateItemSiteCategoryCollection
        'siteMapPriority',         // string enum(, 0.0, 0.1, 0.2, 0.3, 0.4, 0.5, 0.6, 0.7, 0.8)
        'storeDescription',        // string
        'storeDetailedDescription',// string
        'storeDisplayImage',       // NsResource
        'storeDisplayName',        // string
        'storeDisplayThumbnail',   // NsResource
        'subsidiary',              // SubsidiaryCollection
        'subtype',                 // string enum(Sale, Purchase, Resale)
        'taxRate',                 // float
        'taxSchedule',             // NsResource
        'translations',            // GiftCertificateItemTranslationsCollection
        'upcCode',                 // string
        'urlComponent',            // string
        'userNotes',               // GiftCertificateItemUserNotesCollection
    ];    

   /**
    * GET /giftCertificateItem
    * 
    * @param string $q                 Search query used to filter results. (in query)
    * @param int $limit                The limit used to specify the number of results on a single page. (in query)
    * @param int $offset               The offset used for selecting a specific page of results. (in query)
    * @return string json:giftCertificateItemCollection - List of records 
    * @meta [default] nsError - Error response 
    */
    public function getListOfRecords($q = null, $limit = null, $offset = null)
    {
        $parts = [];
        $path = "/giftCertificateItem";
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
    * POST /giftCertificateItem
    * 
    * @param $body {giftCertificateItem}
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @meta [204 No Content]  - Inserted record 
    * @meta [default] nsError - Error response 
    */
    public function insertRecord($body, $replace = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null)
    {
        $parts = [];
        $path = "/giftCertificateItem";
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
    * DELETE /giftCertificateItem/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @meta [204 No Content]  - Removed record 
    * @meta [default] nsError - Error response 
    */
    public function removeRecord($id = null)
    {
        $path = "/giftCertificateItem/$id";
        $response = $this->_makeRequest('DELETE', $path);

        return $response;
    }

   /**
    * GET /giftCertificateItem/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @param bool $expandSubResources  Set to true to automatically expand all sublists, sublist lines and subrecords on this record. (in query)
    * @return string json:giftCertificateItem - Retrieved record 
    * @meta [default] nsError - Error response 
    */
    public function getRecord($id = null, $expandSubResources = null)
    {
        $parts = [];
        $path = "/giftCertificateItem/$id";
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
    * PATCH /giftCertificateItem/{id}
    * 
    * @param $body {giftCertificateItem}
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
        $path = "/giftCertificateItem/$id";
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
    * PUT /giftCertificateItem/{id}
    * 
    * @param $body {giftCertificateItem}
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
        $path = "/giftCertificateItem/$id";
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
