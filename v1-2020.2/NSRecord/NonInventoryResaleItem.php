<?php
class NSRecord_NonInventoryResaleItem extends RequestAbstract
{
   /**
    * [nonInventoryResaleItem]
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
        'accountingBookDetail',    // NonInventoryResaleItemAccountingBookDetailCollection
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
        'copyDescription',         // bool
        'correlatedItems',         // NonInventoryResaleItemCorrelatedItemsCollection
        'cost',                    // float
        'costEstimate',            // float
        'costEstimateType',        // string enum(PREFVENDORRATE, AVGCOST, PURCHORDERRATE, LASTPURCHPRICE, MEMBERDEFINED, CUSTOM, ITEMDEFINED, PURCHPRICE)
        'costEstimateUnits',       // string
        'costUnits',               // string
        'countryOfManufacture',    // string enum(PR, PS, PT, PW, PY, QA, AD, AE, AF, AG)
        'createExpensePlansOn',    // NsResource
        'createdDate',             // string
        'createrevenueplanson',    // NsResource
        'currency',                // Currency
        'customForm',              // string enum(-10916, -10915, -10914, -20961, -10230, -893, -892, -410, -891, -770)
        'defaultItemShipMethod',   // ShipItem
        'deferralAccount',         // Account
        'department',              // Department
        'description',             // string
        'directRevenuePosting',    // bool
        'displayName',             // string
        'dontShowPrice',           // bool
        'dropShipExpenseAccount',  // Account
        'enforceminqtyinternally', // bool
        'exchangeRate',            // string
        'excludeFromSiteMap',      // bool
        'expenseAccount',          // Account
        'expenseAmortizationRule', // NsResource
        'externalId',              // string
        'featuredDescription',     // string
        'froogleProductFeed',      // bool
        'generateAccruals',        // bool
        'handlingCost',            // float
        'handlingCostUnits',       // string
        'hazmatHazardClass',       // string
        'hazmatId',                // string
        'hazmatItemUnits',         // string
        'hazmatItemUnitsQty',      // float
        'hazmatPackingGroup',      // string enum(, DEFAULT, I, II, III)
        'hazmatshippingname',      // string
        'hierarchyversions',       // NonInventoryResaleItemHierarchyversionsCollection
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
        'isDropShipItem',          // bool
        'isFulfillable',           // bool
        'isGCoCompliant',          // bool
        'isHazmatItem',            // bool
        'isInactive',              // bool
        'isOnline',                // bool
        'isSpecialOrderItem',      // bool
        'isTaxable',               // bool
        'issueProduct',            // IssueProduct
        'itemCarrier',             // string enum(ups, nonups)
        'itemId',                  // string
        'itemShipMethod',          // ShipItemCollection
        'itemType',                // string enum(Group, Discount, Description, EndGroup, GiftCert, Subtotal, Service, ShipItem, InvtPart, TaxItem)
        'itemVendor',              // NonInventoryResaleItemItemVendorCollection
        'itemrevenuecategory',     // NsResource
        'lastModifiedDate',        // string
        'links',                   // NsLink, [read_only]
        'location',                // Location
        'manufacturer',            // string
        'manufacturerAddr1',       // string
        'manufacturerCity',        // string
        'manufacturerState',       // string
        'manufacturerTariff',      // string
        'manufacturerTaxId',       // string
        'manufacturerZip',         // string
        'matrixItemNameTemplate',  // string
        'matrixItemNameTemplateHelp',// string
        'matrixType',              // string enum(, PARENT, CHILD)
        'maximumquantity',         // int
        'maximumquantityUnits',    // string
        'metaTagHtml',             // string
        'minimumquantity',         // int
        'minimumquantityUnits',    // string
        'mossApplies',             // bool
        'mpn',                     // string
        'multManufactureAddr',     // bool
        'nexTagCategory',          // string
        'nexTagProductFeed',       // bool
        'noPriceMessage',          // string
        'offerSupport',            // bool
        'onSpecial',               // bool
        'outOfStockBehavior',      // string enum(DISABLE, ENABLENMSG, REMOVE, ENABLE, DEFAULT)
        'outOfStockMessage',       // string
        'overallQuantityPricingType',// string enum(ITEM, PARENT, SCHEDULE)
        'pageTitle',               // string
        'parent',                  // NonInventoryResaleItem
        'parentOnly',              // bool
        'pf',                      // string
        'pi',                      // string
        'pr',                      // string
        'preferenceCriterion',     // string enum(, A, B, C, D, E, F)
        'presentationItem',        // NonInventoryResaleItemPresentationItemCollection
        'price',                   // NonInventoryResaleItemPrice
        'pricesIncludeTax',        // bool
        'pricingGroup',            // PricingGroup
        'producer',                // bool
        'purchaseDescription',     // string
        'purchaseOrderAmount',     // float
        'purchaseOrderQuantity',   // float
        'purchaseOrderQuantityDiff',// float
        'purchaseTaxCode',         // NsResource
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
        'scheduleBCode',           // string enum(22, 23, 24, 25, 26, 27, 28, 29, 30, 31)
        'scheduleBNumber',         // string
        'scheduleBQuantity',       // float
        'searchKeywords',          // string
        'shipIndividually',        // bool
        'shipPackage',             // NsResource
        'shippingCost',            // float
        'shippingCostUnits',       // string
        'shoppingDotComCategory',  // string
        'shoppingProductFeed',     // bool
        'shopzillaCategoryId',     // int
        'shopzillaProductFeed',    // bool
        'siteCategory',            // NonInventoryResaleItemSiteCategoryCollection
        'siteMapPriority',         // string enum(, 0.0, 0.1, 0.2, 0.3, 0.4, 0.5, 0.6, 0.7, 0.8)
        'softDescriptor',          // string
        'stockDescription',        // string
        'storeDescription',        // string
        'storeDetailedDescription',// string
        'storeDisplayImage',       // NsResource
        'storeDisplayName',        // string
        'storeDisplayThumbnail',   // NsResource
        'subsidiary',              // SubsidiaryCollection
        'taxRate',                 // float
        'taxSchedule',             // NsResource
        'translations',            // NonInventoryResaleItemTranslationsCollection
        'unitsTypeFracConv',       // bool
        'unitsTypeWarningDisplayed',// bool
        'unitsWarningDisplayed',   // bool
        'upcCode',                 // string
        'urlComponent',            // string
        'useMarginalRates',        // bool
        'userNotes',               // NonInventoryResaleItemUserNotesCollection
        'vendor',                  // Vendor
        'vendorName',              // string
        'weight',                  // float
        'weightUnit',              // string enum(1, 2, 3, 4)
        'weightUnits',             // string
        'yahooProductFeed',        // bool
    ];    

   /**
    * GET /nonInventoryResaleItem
    * 
    * @param string $q                 Search query used to filter results. (in query)
    * @param int $limit                The limit used to specify the number of results on a single page. (in query)
    * @param int $offset               The offset used for selecting a specific page of results. (in query)
    * @return string json:nonInventoryResaleItemCollection - List of records
    * @response [default] nsError - Error response
    */
    public function getListOfRecords($q = null, $limit = null, $offset = null)
    {
        $parts = [];
        $path = "/nonInventoryResaleItem";
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
    * POST /nonInventoryResaleItem
    * 
    * @param $body {nonInventoryResaleItem}
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @response [204 No Content]  - Inserted record
    * @response [default] nsError - Error response
    */
    public function insertRecord($body, $replace = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null)
    {
        $parts = [];
        $path = "/nonInventoryResaleItem";
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
    * DELETE /nonInventoryResaleItem/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @response [204 No Content]  - Removed record
    * @response [default] nsError - Error response
    */
    public function removeRecord($id = null)
    {
        $path = "/nonInventoryResaleItem/$id";
        $response = $this->_makeRequest('DELETE', $path);

        return $response;
    }

   /**
    * GET /nonInventoryResaleItem/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @param bool $expandSubResources  Set to true to automatically expand all sublists, sublist lines and subrecords on this record. (in query)
    * @return string json:nonInventoryResaleItem - Retrieved record
    * @response [default] nsError - Error response
    */
    public function getRecord($id = null, $expandSubResources = null)
    {
        $parts = [];
        $path = "/nonInventoryResaleItem/$id";
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
    * PATCH /nonInventoryResaleItem/{id}
    * 
    * @param $body {nonInventoryResaleItem}
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
        $path = "/nonInventoryResaleItem/$id";
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
    * PUT /nonInventoryResaleItem/{id}
    * 
    * @param $body {nonInventoryResaleItem}
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
        $path = "/nonInventoryResaleItem/$id";
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
