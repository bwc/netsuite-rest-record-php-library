<?php
class NSRecord_ShipItem extends RequestAbstract
{
   /**
    * [shipItem]
    * This record is available as a beta record.
    *
    * @var array
    */
    public static $schema = [
        'accChange',               // bool
        'account',                 // Account
        'accountHandling',         // Account
        'costBasis',               // string enum(pluginRate, fedexRealTimeRate, upsRealTimeRate, uspsRealTimeRate, fr, weight, peritem, ptotal, shippingtable)
        'countries',               // NsResourceCollection
        'description',             // string
        'discountRate',            // float
        'displayName',             // string
        'doifArrangement',         // string
        'doifTotal',               // bool
        'doifTotalAmt',            // float
        'doifTotalOperator',       // string enum(OVER, UNDER)
        'doifWeight',              // bool
        'doifWeightAmt',           // float
        'doifWeightOperator',      // string enum(OVER, UNDER)
        'doifWeightUnit',          // string enum(1, 2, 3, 4)
        'edition',                 // string
        'enabletransittime',       // bool
        'excludeCountries',        // bool
        'excludeSites',            // bool
        'externalId',              // string
        'fedexDiscountRate',       // float
        'fedexOneRate',            // bool
        'fedexServiceCode',        // string enum(44, 45, 46, 47, 48, 49, 50, 51, 52, 53)
        'freeIfOrderTotalIsOverAmount',// float
        'handlingAsPercentageOfTotal',// float
        'handlingByWeightAmount',  // float
        'handlingByWeightPerQuantity',// float
        'handlingByWeightPerUnit', // string enum(1, 2, 3, 4)
        'handlingCost',            // string enum(no_handling, fr, weight, peritem, ptotal, handlingtable)
        'handlingFlatRateAmount',  // float
        'handlingPerItemAmount',   // float
        'handlingTable',           // ShipItemHandlingTableCollection
        'handlingTableChargeBy',   // string enum(ORDERTOTAL, WEIGHT)
        'handlingTableUOM',        // string enum(1, 2, 3, 4)
        'handlingTaxCode',         // SalesTaxItem
        'hasMaximumShippingCost',  // bool
        'hasMinimumShippingCost',  // bool
        'id',                      // string
        'integratedLabelsArrangement',// string
        'integrationServiceCode',  // string enum(44, 45, 46, 47, 48, 49, 50, 51, 52, 53)
        'invt_dispName',           // string
        'isFreeIfOrderTotalIsOver',// bool
        'isHandlingByWeightBracketed',// bool
        'isHandlingTaxable',       // bool
        'isInactive',              // bool
        'isOnline',                // bool
        'isShippingByWeightBracketed',// bool
        'isTaxable',               // bool
        'itemId',                  // string
        'itemType',                // string
        'items',                   // ShipItemItemsCollection
        'labelPlugin',             // string
        'labelPluginSelect',       // string
        'labelReg',                // string
        'labelRegSelect',          // NsResource
        'labelService',            // string
        'labelServiceGroup',       // string
        'labelServiceGroupSelect', // string
        'labelServiceSelect',      // string
        'labelType',               // bool
        'links',                   // NsLink, [read_only]
        'maximumShippingCost',     // float
        'minimumShippingCost',     // float
        'needsAllFreeShippingItems',// bool
        'omitPackaging',           // bool
        'pluginLabelsArrangement', // string
        'pluginRateArrangement',   // string
        'ratingPlugin',            // string
        'ratingPluginSelect',      // string
        'ratingReg',               // string
        'ratingRegSelect',         // NsResource
        'ratingService',           // string
        'ratingServiceGroup',      // string
        'ratingServiceGroupSelect',// string
        'ratingServiceSelect',     // string
        'refName',                 // string, [read_only]
        'restrictionArrangement',  // string
        'returnLabelReg',          // string
        'returnLabelRegSelect',    // NsResource
        'returnLabelService',      // string
        'returnLabelServiceSelect',// string
        'returnServiceCode',       // string enum(44, 45, 46, 47, 48, 49, 50, 51, 52, 53)
        'returnsIntegrated',       // bool
        'serviceCode',             // string enum(44, 45, 46, 47, 48, 49, 50, 51, 52, 53)
        'shipItemCurrency',        // string
        'shipmethodrulerelations', // ShipItemShipmethodrulerelationsCollection
        'shipperIntegrated',       // bool
        'shippingAsPercentageOfTotal',// float
        'shippingByWeightAmount',  // float
        'shippingByWeightPerQuantity',// float
        'shippingByWeightPerUnit', // string enum(1, 2, 3, 4)
        'shippingCarrier',         // string
        'shippingFlatRateAmount',  // float
        'shippingPerItemAmount',   // float
        'shippingTable',           // ShipItemShippingTableCollection
        'shippingTableChargeBy',   // string enum(ORDERTOTAL, WEIGHT)
        'shippingTableUOM',        // string enum(1, 2, 3, 4)
        'shippingTaxCode',         // SalesTaxItem
        'site',                    // WebSiteCollection
        'states',                  // NsResourceCollection
        'subsidiary',              // Subsidiary
        'tabText',                 // string
        'tabpromisingtext',        // string
        'taxSchedule',             // NsResource
        'taxScheduleHandling',     // NsResource
        'transittimedays',         // int
        'transittimedayslabel',    // string
        'translations',            // ShipItemTranslationsCollection
        'upsDiscountRate',         // float
        'upsSaverName',            // string
        'upsServiceCode',          // string enum(44, 45, 46, 47, 48, 49, 50, 51, 52, 53)
        'uspsDiscountRate',        // float
        'uspsServiceCode',         // string enum(44, 45, 46, 47, 48, 49, 50, 51, 52, 53)
    ];    

   /**
    * GET /shipItem
    * 
    * @param string $q                 Search query used to filter results. (in query)
    * @param int $limit                The limit used to specify the number of results on a single page. (in query)
    * @param int $offset               The offset used for selecting a specific page of results. (in query)
    * @return string json:shipItemCollection - List of records
    * @response [default] nsError - Error response
    */
    public function getListOfRecords($q = null, $limit = null, $offset = null)
    {
        $parts = [];
        $path = "/shipItem";
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
    * POST /shipItem
    * 
    * @param $body {shipItem}
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @response [204 No Content]  - Inserted record
    * @response [default] nsError - Error response
    */
    public function insertRecord($body, $replace = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null)
    {
        $parts = [];
        $path = "/shipItem";
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
    * DELETE /shipItem/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @response [204 No Content]  - Removed record
    * @response [default] nsError - Error response
    */
    public function removeRecord($id = null)
    {
        $path = "/shipItem/$id";
        $response = $this->_makeRequest('DELETE', $path);

        return $response;
    }

   /**
    * GET /shipItem/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @param bool $expandSubResources  Set to true to automatically expand all sublists, sublist lines and subrecords on this record. (in query)
    * @return string json:shipItem - Retrieved record
    * @response [default] nsError - Error response
    */
    public function getRecord($id = null, $expandSubResources = null)
    {
        $parts = [];
        $path = "/shipItem/$id";
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
    * PATCH /shipItem/{id}
    * 
    * @param $body {shipItem}
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
        $path = "/shipItem/$id";
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
    * PUT /shipItem/{id}
    * 
    * @param $body {shipItem}
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
        $path = "/shipItem/$id";
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
