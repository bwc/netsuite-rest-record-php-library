<?php
class NSRecord_OtherChargeItem extends RequestAbstract
{
   /**
    * [otherChargeItem]
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
        'accountingBookDetail',    // OtherChargeItemAccountingBookDetailCollection
        'amortizationPeriod',      // int
        'amortizationTemplate',    // AmortizationTemplate
        'autoexpandkitforrevenuemgmt',// bool
        'availableToPartners',     // bool
        'billExchRateVarianceAcct',// Account
        'billPriceVarianceAcct',   // Account
        'billQtyVarianceAcct',     // Account
        'billingSchedule',         // BillingSchedule
        'class',                   // Classification
        'contingentrevenuehandling',// bool
        'cost',                    // float
        'costEstimate',            // float
        'costEstimateType',        // string enum(PREFVENDORRATE, AVGCOST, PURCHORDERRATE, LASTPURCHPRICE, MEMBERDEFINED, CUSTOM, ITEMDEFINED, PURCHPRICE)
        'costEstimateUnits',       // string
        'costLabel',               // string
        'costUnits',               // string
        'createExpensePlansOn',    // NsResource
        'createdDate',             // string
        'createrevenueplanson',    // NsResource
        'currency',                // Currency
        'customForm',              // string enum(-10916, -10915, -10914, -20961, -10230, -893, -892, -410, -891, -770)
        'deferralAccount',         // Account
        'department',              // Department
        'description',             // string
        'directRevenuePosting',    // bool
        'displayName',             // string
        'enforceminqtyinternally', // bool
        'exchangeRate',            // string
        'expenseAccount',          // Account
        'expenseAmortizationRule', // NsResource
        'externalId',              // string
        'generateAccruals',        // bool
        'id',                      // string
        'includeChildren',         // bool
        'incomeAccount',           // Account
        'insertItemAttribute',     // string enum(class, department, itemid, location, issueproduct, vendorname)
        'intercoExpenseAccount',   // Account
        'intercoIncomeAccount',    // Account
        'intercodefrevaccount',    // Account
        'invt_DispName',           // string
        'invt_SalesDesc',          // string
        'isFulfillable',           // bool
        'isGCoCompliant',          // bool
        'isInactive',              // bool
        'isMaterialOverhead',      // bool
        'isOnline',                // bool
        'isTaxable',               // bool
        'issueProduct',            // IssueProduct
        'itemId',                  // string
        'itemType',                // string enum(Group, Discount, Description, EndGroup, GiftCert, Subtotal, Service, ShipItem, InvtPart, TaxItem)
        'itemVendor',              // OtherChargeItemItemVendorCollection
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
        'minimumquantity',         // int
        'minimumquantityUnits',    // string
        'offerSupport',            // bool
        'overallQuantityPricingType',// string enum(ITEM, PARENT, SCHEDULE)
        'overheadType',            // string enum(PERCENTTOTAL, FIXED, PERCENTMATERIAL)
        'parent',                  // OtherChargeItem
        'parentOnly',              // bool
        'pf',                      // string
        'pi',                      // string
        'pr',                      // string
        'price',                   // OtherChargeItemPrice
        'pricesIncludeTax',        // bool
        'pricingGroup',            // PricingGroup
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
        'softDescriptor',          // string
        'subsidiary',              // SubsidiaryCollection
        'subtype',                 // string enum(Sale, Purchase, Resale)
        'taxRate',                 // float
        'taxSchedule',             // NsResource
        'translations',            // OtherChargeItemTranslationsCollection
        'unitsTypeFracConv',       // bool
        'unitsTypeWarningDisplayed',// bool
        'unitsWarningDisplayed',   // bool
        'upcCode',                 // string
        'useMarginalRates',        // bool
        'userNotes',               // OtherChargeItemUserNotesCollection
        'vendor',                  // Vendor
        'vendorName',              // string
    ];    

   /**
    * GET /otherChargeItem
    * 
    * @param string $q                 Search query used to filter results. (in query)
    * @param int $limit                The limit used to specify the number of results on a single page. (in query)
    * @param int $offset               The offset used for selecting a specific page of results. (in query)
    * @return string json:otherChargeItemCollection - List of records
    * @response [default] nsError - Error response
    */
    public function getListOfRecords($q = null, $limit = null, $offset = null)
    {
        $parts = [];
        $path = "/otherChargeItem";
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
    * POST /otherChargeItem
    * 
    * @param $body {otherChargeItem}
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @response [204 No Content]  - Inserted record
    * @response [default] nsError - Error response
    */
    public function insertRecord($body, $replace = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null)
    {
        $parts = [];
        $path = "/otherChargeItem";
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
    * DELETE /otherChargeItem/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @response [204 No Content]  - Removed record
    * @response [default] nsError - Error response
    */
    public function removeRecord($id = null)
    {
        $path = "/otherChargeItem/$id";
        $response = $this->_makeRequest('DELETE', $path);

        return $response;
    }

   /**
    * GET /otherChargeItem/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @param bool $expandSubResources  Set to true to automatically expand all sublists, sublist lines and subrecords on this record. (in query)
    * @return string json:otherChargeItem - Retrieved record
    * @response [default] nsError - Error response
    */
    public function getRecord($id = null, $expandSubResources = null)
    {
        $parts = [];
        $path = "/otherChargeItem/$id";
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
    * PATCH /otherChargeItem/{id}
    * 
    * @param $body {otherChargeItem}
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
        $path = "/otherChargeItem/$id";
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
    * PUT /otherChargeItem/{id}
    * 
    * @param $body {otherChargeItem}
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
        $path = "/otherChargeItem/$id";
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
