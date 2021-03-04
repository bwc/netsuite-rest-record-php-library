<?php
class NSRecord_ServiceItem extends RequestAbstract
{
   /**
    * [serviceItem]
    * This record is available as a beta record.
    *
    * @var array
    */
    public static $schema = [
        'VSOEDeferral',            // string enum(DEFERALLUNTIL, DEFERUNTIL)
        'VSOEDelivered',           // bool
        'VSOEPermitDiscount',      // string enum(IFDELIVERED, NEVER)
        'VSOEPrice',               // float
        'VSOESopGroup',            // string enum(EXCLUDE, NORMAL, SOFTWARE)
        'accountingBookDetail',    // ServiceItemAccountingBookDetailCollection
        'amortizationPeriod',      // int
        'amortizationTemplate',    // AmortizationTemplate
        'autoexpandkitforrevenuemgmt',// bool
        'availableToPartners',     // bool
        'billExchRateVarianceAcct',// Account
        'billPriceVarianceAcct',   // Account
        'billQtyVarianceAcct',     // Account
        'billingRate',             // ServiceItemBillingRate
        'billingSchedule',         // BillingSchedule
        'class',                   // Classification
        'contingentrevenuehandling',// bool
        'correlatedItems',         // ServiceItemCorrelatedItemsCollection
        'cost',                    // float
        'costEstimate',            // float
        'costEstimateType',        // string enum(PREFVENDORRATE, AVGCOST, PURCHORDERRATE, LASTPURCHPRICE, MEMBERDEFINED, CUSTOM, ITEMDEFINED, PURCHPRICE)
        'costEstimateUnits',       // string
        'costLabel',               // string
        'costUnits',               // string
        'createExpensePlansOn',    // NsResource
        'createJob',               // bool
        'createdDate',             // string
        'createrevenueplanson',    // NsResource
        'currency',                // Currency
        'customForm',              // string enum(-10916, -10915, -10914, -20961, -10230, -893, -892, -410, -891, -770)
        'deferralAccount',         // Account
        'department',              // Department
        'description',             // string
        'directRevenuePosting',    // bool
        'displayName',             // string
        'dontShowPrice',           // bool
        'enforceminqtyinternally', // bool
        'exchangeRate',            // string
        'excludeFromSiteMap',      // bool
        'expenseAccount',          // Account
        'expenseAmortizationRule', // NsResource
        'externalId',              // string
        'featuredDescription',     // string
        'generateAccruals',        // bool
        'id',                      // string
        'includeChildren',         // bool
        'incomeAccount',           // Account
        'insertItemAttribute',     // string enum(class, department, itemid, location, issueproduct, vendorname)
        'intercoExpenseAccount',   // Account
        'intercoIncomeAccount',    // Account
        'intercodefrevaccount',    // Account
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
        'itemTaskTemplates',       // ServiceItemItemTaskTemplatesCollection
        'itemType',                // string enum(Group, Discount, Description, EndGroup, GiftCert, Subtotal, Service, ShipItem, InvtPart, TaxItem)
        'itemVendor',              // ServiceItemItemVendorCollection
        'itemrevenuecategory',     // NsResource
        'lastModifiedDate',        // string
        'links',                   // NsLink, [read_only]
        'location',                // Location
        'manufacturingChargeItem', // bool
        'matrixItemNameTemplate',  // string
        'matrixItemNameTemplateHelp',// string
        'matrixType',              // string enum(, PARENT, CHILD)
        'maximumquantity',         // int
        'maximumquantityUnits',    // string
        'metaTagHtml',             // string
        'minimumquantity',         // int
        'minimumquantityUnits',    // string
        'noPriceMessage',          // string
        'offerSupport',            // bool
        'onSpecial',               // bool
        'outOfStockBehavior',      // string enum(DISABLE, ENABLENMSG, REMOVE, ENABLE, DEFAULT)
        'outOfStockMessage',       // string
        'overallQuantityPricingType',// string enum(ITEM, PARENT, SCHEDULE)
        'pageTitle',               // string
        'parent',                  // ServiceItem
        'parentOnly',              // bool
        'pf',                      // string
        'pi',                      // string
        'pr',                      // string
        'presentationItem',        // ServiceItemPresentationItemCollection
        'price',                   // ServiceItemPrice
        'pricesIncludeTax',        // bool
        'pricingGroup',            // PricingGroup
        'projectExpenseType',      // ProjectExpenseType
        'projectTemplate',         // ProjectTemplate
        'purchaseDescription',     // string
        'purchaseOrderAmount',     // float
        'purchaseOrderQuantity',   // float
        'purchaseOrderQuantityDiff',// float
        'quantityPricingSchedule', // NsResource
        'rate',                    // float
        'rateIncludingTax',        // float
        'receiptAmount',           // float
        'receiptQuantity',         // float
        'receiptQuantityDiff',     // float
        'refName',                 // string, [read_only]
        'residual',                // float
        'revenueallocationgroup',  // NsResource
        'revenuerecognitionrule',  // NsResource
        'revrecforecastrule',      // NsResource
        'revreclassfxaccount',     // Account
        'salesDescription',        // string
        'salesTaxCode',            // NsResource
        'searchKeywords',          // string
        'siteCategory',            // ServiceItemSiteCategoryCollection
        'siteMapPriority',         // string enum(, 0.0, 0.1, 0.2, 0.3, 0.4, 0.5, 0.6, 0.7, 0.8)
        'softDescriptor',          // string
        'storeDescription',        // string
        'storeDetailedDescription',// string
        'storeDisplayImage',       // NsResource
        'storeDisplayName',        // string
        'storeDisplayThumbnail',   // NsResource
        'subsidiary',              // SubsidiaryCollection
        'subtype',                 // string enum(Sale, Purchase, Resale)
        'taxRate',                 // float
        'taxSchedule',             // NsResource
        'translations',            // ServiceItemTranslationsCollection
        'unitsTypeFracConv',       // bool
        'unitsTypeWarningDisplayed',// bool
        'unitsWarningDisplayed',   // bool
        'upcCode',                 // string
        'urlComponent',            // string
        'useMarginalRates',        // bool
        'userNotes',               // ServiceItemUserNotesCollection
        'vendor',                  // Vendor
        'vendorName',              // string
    ];    

   /**
    * GET /serviceItem
    * 
    * @param string $q                 Search query used to filter results. (in query)
    * @param int $limit                The limit used to specify the number of results on a single page. (in query)
    * @param int $offset               The offset used for selecting a specific page of results. (in query)
    * @return string json:serviceItemCollection - List of records 
    * @meta [default] nsError - Error response 
    */
    public function getListOfRecords($q = null, $limit = null, $offset = null)
    {
        $parts = [];
        $path = "/serviceItem";
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
    * POST /serviceItem
    * 
    * @param $body {serviceItem}
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @meta [204 No Content]  - Inserted record 
    * @meta [default] nsError - Error response 
    */
    public function insertRecord($body, $replace = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null)
    {
        $parts = [];
        $path = "/serviceItem";
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
    * DELETE /serviceItem/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @meta [204 No Content]  - Removed record 
    * @meta [default] nsError - Error response 
    */
    public function removeRecord($id = null)
    {
        $path = "/serviceItem/$id";
        $response = $this->_makeRequest('DELETE', $path);

        return $response;
    }

   /**
    * GET /serviceItem/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @param bool $expandSubResources  Set to true to automatically expand all sublists, sublist lines and subrecords on this record. (in query)
    * @return string json:serviceItem - Retrieved record 
    * @meta [default] nsError - Error response 
    */
    public function getRecord($id = null, $expandSubResources = null)
    {
        $parts = [];
        $path = "/serviceItem/$id";
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
    * PATCH /serviceItem/{id}
    * 
    * @param $body {serviceItem}
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
        $path = "/serviceItem/$id";
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
    * PUT /serviceItem/{id}
    * 
    * @param $body {serviceItem}
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
        $path = "/serviceItem/$id";
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
