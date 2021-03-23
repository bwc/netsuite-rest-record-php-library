<?php
class NSRecord_InventoryItem extends RequestAbstract
{
   /**
    * [inventoryItem]
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
        'accountingBookDetail',    // InventoryItemAccountingBookDetailCollection
        'alternateDemandSourceItem',// InventoryItem
        'amortizationPeriod',      // int
        'amortizationTemplate',    // AmortizationTemplate
        'assetAccount',            // Account
        'atpLeadTime',             // int
        'atpmethod',               // string enum(CUMULATIVE_ATP_WITH_LOOK_AHEAD, DISCRETE_ATP)
        'autoLeadTime',            // bool
        'autoPreferredStockLevel', // bool
        'autoReorderPoint',        // bool
        'autoexpandkitforrevenuemgmt',// bool
        'availableToPartners',     // bool
        'averageCost',             // float
        'averageCostUnits',        // string
        'backwardConsumptionDays', // int
        'billExchRateVarianceAcct',// Account
        'billPriceVarianceAcct',   // Account
        'billQtyVarianceAcct',     // Account
        'billingSchedule',         // BillingSchedule
        'binNumber',               // InventoryItemBinNumberCollection
        'class',                   // Classification
        'cogsAccount',             // Account
        'contingentrevenuehandling',// bool
        'conversionRate',          // float
        'copyDescription',         // bool
        'correlatedItems',         // InventoryItemCorrelatedItemsCollection
        'cost',                    // float
        'costAccountingStatus',    // string
        'costEstimate',            // float
        'costEstimateType',        // string enum(PREFVENDORRATE, AVGCOST, PURCHORDERRATE, LASTPURCHPRICE, MEMBERDEFINED, CUSTOM, ITEMDEFINED, PURCHPRICE)
        'costEstimateUnits',       // string
        'costUnits',               // string
        'costingMethod',           // string enum(SERIAL, LOT, AVG, LIFO, GROUPAVG, FIFO, STANDARD)
        'costingMethodDisplay',    // string
        'countryOfManufacture',    // string enum(PR, PS, PT, PW, PY, QA, AD, AE, AF, AG)
        'createExpensePlansOn',    // NsResource
        'createdDate',             // string
        'createrevenueplanson',    // NsResource
        'currency',                // Currency
        'custReturnVarianceAccount',// Account
        'customForm',              // string enum(-10916, -10915, -10914, -20961, -10230, -893, -892, -410, -891, -770)
        'dateConvertedToInv',      // string
        'defaultItemShipMethod',   // ShipItem
        'defaultReturnCost',       // float
        'defaultReturnCostUnits',  // string
        'deferralAccount',         // Account
        'demandModifier',          // float
        'demandSource',            // string enum(FORECASTANDORDERS, EXISTINGORDERSANDDEPENDENTDEMAND, FORECASTCONSUMPTION, ITEMDEMANDPLAN)
        'demandTimeFence',         // int
        'department',              // Department
        'description',             // string
        'directRevenuePosting',    // bool
        'displayName',             // string
        'distributionCategory',    // NsResource
        'distributionNetwork',     // NsResource
        'dontShowPrice',           // bool
        'dropShipExpenseAccount',  // Account
        'enableCatchWeight',       // bool
        'enforceminqtyinternally', // bool
        'excludeFromSiteMap',      // bool
        'expenseAccountHidden',    // string
        'expenseAmortizationRule', // NsResource
        'expirationDate',          // string
        'externalId',              // string
        'featuredDescription',     // string
        'fixedLotSize',            // float
        'fixedLotSizeUnits',       // string
        'forwardConsumptionDays',  // int
        'fraudRisk',               // string enum(LOW, MEDIUM, HIGH)
        'froogleProductFeed',      // bool
        'futurehorizon',           // int
        'fxcost',                  // float
        'gainLossAccount',         // Account
        'handlingCost',            // float
        'handlingCostUnits',       // string
        'hazmatHazardClass',       // string
        'hazmatId',                // string
        'hazmatItemUnits',         // string
        'hazmatItemUnitsQty',      // float
        'hazmatPackingGroup',      // string enum(, DEFAULT, I, II, III)
        'hazmatshippingname',      // string
        'hierarchyversions',       // InventoryItemHierarchyversionsCollection
        'id',                      // string
        'includeChildren',         // bool
        'incomeAccount',           // Account
        'insertItemAttribute',     // string enum(class, department, itemid, location, issueproduct, vendorname)
        'intercoCogsAccount',      // Account
        'intercoExpenseAccountHidden',// string
        'intercoIncomeAccount',    // Account
        'intercodefrevaccount',    // Account
        'internalId',              // int
        'invtClassification',      // string enum(1, 2, 3)
        'invtCountInterval',       // int
        'invt_DispName',           // string
        'invt_SalesDesc',          // string
        'isDropShipItem',          // bool
        'isGCoCompliant',          // bool
        'isHazmatItem',            // bool
        'isInactive',              // bool
        'isLotItem',               // bool
        'isOnline',                // bool
        'isSerialItem',            // bool
        'isSpecialOrderItem',      // bool
        'isTaxable',               // bool
        'isstorepickupallowed',    // bool
        'issueProduct',            // IssueProduct
        'itemCarrier',             // string enum(ups, nonups)
        'itemId',                  // string
        'itemProcessFamily',       // NsResource
        'itemProcessGroup',        // NsResource
        'itemShipMethod',          // ShipItemCollection
        'itemType',                // string enum(Group, Discount, Description, EndGroup, GiftCert, Subtotal, Service, ShipItem, InvtPart, TaxItem)
        'itemVendor',              // InventoryItemItemVendorCollection
        'itemrevenuecategory',     // NsResource
        'lastInvtCountDate',       // string
        'lastModifiedDate',        // string
        'lastPurchasePrice',       // float
        'lastPurchasePriceUnits',  // string
        'leadTime',                // int
        'links',                   // NsLink, [read_only]
        'location',                // Location
        'locations',               // InventoryItemLocationsCollection
        'lowerWarningLimit',       // float
        'manufacturer',            // string
        'manufacturerAddr1',       // string
        'manufacturerCity',        // string
        'manufacturerState',       // string
        'manufacturerTariff',      // string
        'manufacturerTaxId',       // string
        'manufacturerZip',         // string
        'matchBillToReceipt',      // bool
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
        'nextInvtCountDate',       // string
        'noPriceMessage',          // string
        'offerSupport',            // bool
        'onSpecial',               // bool
        'origCost',                // float
        'origCostUnits',           // string
        'origExchangeRate',        // float
        'originalItemSubtype',     // string
        'originalItemType',        // string
        'originalUseBins',         // bool
        'outOfStockBehavior',      // string enum(DISABLE, ENABLENMSG, REMOVE, ENABLE, DEFAULT)
        'outOfStockMessage',       // string
        'overallQuantityPricingType',// string enum(ITEM, PARENT, SCHEDULE)
        'pageTitle',               // string
        'parent',                  // InventoryItem
        'parentOnly',              // bool
        'periodicLotSizeDays',     // int
        'periodicLotSizeType',     // string enum(INTERVAL, WEEKLY, MONTHLY)
        'pf',                      // string
        'pi',                      // string
        'planningItemCategory',    // PlanningItemCategory
        'pr',                      // string
        'preferenceCriterion',     // string enum(, A, B, C, D, E, F)
        'preferredLocation',       // Location
        'preferredStockLevel',     // float
        'preferredStockLevelDays', // float
        'preferredStockLevelUnits',// string
        'presentationItem',        // InventoryItemPresentationItemCollection
        'price',                   // InventoryItemPrice
        'pricesIncludeTax',        // bool
        'pricingGroup',            // PricingGroup
        'producer',                // bool
        'purchaseDescription',     // string
        'purchaseOrderAmount',     // float
        'purchaseOrderQuantity',   // float
        'purchaseOrderQuantityDiff',// float
        'purchasePriceVarianceAcct',// Account
        'purchaseTaxCode',         // NsResource
        'quantityAvailable',       // float
        'quantityAvailableBase',   // float
        'quantityAvailableBaseUnits',// string
        'quantityAvailableUnits',  // string
        'quantityBackOrdered',     // float
        'quantityBackOrderedUnits',// string
        'quantityCommitted',       // float
        'quantityCommittedUnits',  // string
        'quantityOnHand',          // float
        'quantityOnHandBase',      // float
        'quantityOnHandBaseUnits', // string
        'quantityOnHandUnits',     // string
        'quantityOnOrder',         // float
        'quantityOnOrderUnits',    // string
        'quantityPricingSchedule', // NsResource
        'quantityReorderUnits',    // string
        'rate',                    // float
        'rateIncludingTax',        // float
        'receiptAmount',           // float
        'receiptQuantity',         // float
        'receiptQuantityDiff',     // float
        'refName',                 // string, [read_only]
        'reorderMultiple',         // int
        'reorderPoint',            // float
        'reorderPointUnits',       // string
        'rescheduleInDays',        // int
        'rescheduleOutDays',       // int
        'residual',                // float
        'revenueallocationgroup',  // NsResource
        'revenuerecognitionrule',  // NsResource
        'revrecforecastrule',      // NsResource
        'revreclassfxaccount',     // Account
        'rotationType',            // string enum(LEFO, FEFO)
        'roundUpAsComponent',      // bool
        'safetyStockLevel',        // float
        'safetyStockLevelDays',    // int
        'safetyStockLevelUnits',   // string
        'salesDescription',        // string
        'salesTaxCode',            // NsResource
        'savedLeadTime',           // int
        'savedPreferredStockLevel',// float
        'savedReorderPoint',       // float
        'scheduleBCode',           // string enum(22, 23, 24, 25, 26, 27, 28, 29, 30, 31)
        'scheduleBNumber',         // string
        'scheduleBQuantity',       // float
        'searchKeywords',          // string
        'seasonalDemand',          // bool
        'secondaryBaseUnit',       // string
        'secondaryConsumptionUnit',// string
        'secondaryPurchaseUnit',   // string
        'secondarySaleUnit',       // string
        'secondaryStockUnit',      // string
        'secondaryUnitsType',      // UnitsType
        'serialNumbers',           // string
        'shipIndividually',        // bool
        'shipPackage',             // NsResource
        'shippingCost',            // float
        'shippingCostUnits',       // string
        'shoppingDotComCategory',  // string
        'shoppingProductFeed',     // bool
        'shopzillaCategoryId',     // int
        'shopzillaProductFeed',    // bool
        'siteCategory',            // InventoryItemSiteCategoryCollection
        'siteMapPriority',         // string enum(, 0.0, 0.1, 0.2, 0.3, 0.4, 0.5, 0.6, 0.7, 0.8)
        'softDescriptor',          // string
        'stockDescription',        // string
        'storeDescription',        // string
        'storeDetailedDescription',// string
        'storeDisplayImage',       // NsResource
        'storeDisplayName',        // string
        'storeDisplayThumbnail',   // NsResource
        'subsidiary',              // SubsidiaryCollection
        'supplyLotSizingMethod',   // string enum(FIXED_LOT_SIZE, LOT_FOR_LOT, PERIODIC_LOT_SIZE)
        'supplyReplenishmentMethod',// string enum(TIME_PHASED, REORDER_POINT, MRP)
        'supplyTimeFence',         // int
        'supplyType',              // string enum(TRANSFER, BUILD, PURCHASE)
        'taxRate',                 // float
        'taxSchedule',             // NsResource
        'totalQuantityOnHand',     // float
        'totalQuantityOnHandUnits',// string
        'totalValue',              // float
        'trackLandedCost',         // bool
        'transferPrice',           // float
        'transferPriceUnits',      // string
        'translations',            // InventoryItemTranslationsCollection
        'unitsTypeFracConv',       // bool
        'unitsTypeWarningDisplayed',// bool
        'unitsWarningDisplayed',   // bool
        'upcCode',                 // string
        'upperWarningLimit',       // float
        'urlComponent',            // string
        'useBins',                 // bool
        'useMarginalRates',        // bool
        'userNotes',               // InventoryItemUserNotesCollection
        'vendReturnVarianceAccount',// Account
        'vendor',                  // Vendor
        'vendorName',              // string
        'weight',                  // float
        'weightUnit',              // string enum(1, 2, 3, 4)
        'weightUnits',             // string
        'yahooProductFeed',        // bool
    ];    

   /**
    * GET /inventoryItem
    * 
    * @param string $q                 Search query used to filter results. (in query)
    * @param int $limit                The limit used to specify the number of results on a single page. (in query)
    * @param int $offset               The offset used for selecting a specific page of results. (in query)
    * @return string json:inventoryItemCollection - List of records
    * @response [default] nsError - Error response
    */
    public function getListOfRecords($q = null, $limit = null, $offset = null)
    {
        $parts = [];
        $path = "/inventoryItem";
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
    * POST /inventoryItem
    * 
    * @param $body {inventoryItem}
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @response [204 No Content]  - Inserted record
    * @response [default] nsError - Error response
    */
    public function insertRecord($body, $replace = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null)
    {
        $parts = [];
        $path = "/inventoryItem";
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
    * DELETE /inventoryItem/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @response [204 No Content]  - Removed record
    * @response [default] nsError - Error response
    */
    public function removeRecord($id = null)
    {
        $path = "/inventoryItem/$id";
        $response = $this->_makeRequest('DELETE', $path);

        return $response;
    }

   /**
    * GET /inventoryItem/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @param bool $expandSubResources  Set to true to automatically expand all sublists, sublist lines and subrecords on this record. (in query)
    * @return string json:inventoryItem - Retrieved record
    * @response [default] nsError - Error response
    */
    public function getRecord($id = null, $expandSubResources = null)
    {
        $parts = [];
        $path = "/inventoryItem/$id";
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
    * PATCH /inventoryItem/{id}
    * 
    * @param $body {inventoryItem}
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
        $path = "/inventoryItem/$id";
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
    * PUT /inventoryItem/{id}
    * 
    * @param $body {inventoryItem}
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
        $path = "/inventoryItem/$id";
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
