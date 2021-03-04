<?php
class NSRecord_Estimate extends RequestAbstract
{
   /**
    * [estimate]
    * This record is available as a beta record.
    *
    * @var array
    */
    public static $schema = [
        'accountingBookDetail',    // EstimateAccountingBookDetailCollection
        'address_country_state_map',// string
        'altHandlingCost',         // float
        'altSalesTotal',           // float
        'altShippingCost',         // float
        'automaticallyApplyPromotions',// bool
        'bFreeIfOverActive',       // bool
        'bInclAllItemsForFreeShipping',// bool
        'bMaxShipCostActive',      // bool
        'bMinShipCostActive',      // bool
        'balance',                 // float
        'balreadyrefunded',        // string
        'baseHandlingTaxAmount',   // float
        'baseShippingTaxAmount',   // float
        'billAddr1',               // string
        'billAddr2',               // string
        'billAddr3',               // string
        'billAddress',             // string
        'billAddressList',         // NsResource
        'billCity',                // string
        'billCountry',             // string enum(PR, PS, PT, PW, PY, QA, AD, AE, AF, AG)
        'billState',               // string
        'billZip',                 // string
        'billaddressee',           // string
        'billattention',           // string
        'billingaddress',          // EstimateBillingaddress
        'billingaddress_text',     // string
        'billingschedule',         // BillingSchedule
        'billoverride',            // string
        'billphone',               // string
        'byWeightAmt',             // float
        'byWeightConvrateToLbs',   // float
        'byWeightInWholeIncr',     // bool
        'byWeightPer',             // float
        'carrier',                 // string
        'checkCommitted',          // bool
        'class',                   // Classification
        'compFedexThirdPartyAcct', // string
        'compUpsThirdPartyAcct',   // string
        'consolidatebalance',      // float
        'contribPct',              // string
        'copiedFrom',              // int
        'couponCode',              // CouponCode
        'createdDate',             // string
        'createdFrom',             // NsResource
        'credholdentity',          // int
        'credholdoverride',        // string
        'credlim',                 // float
        'currency',                // Currency
        'currencyName',            // string
        'currencyPrecision',       // int
        'currencysymbol',          // string
        'currentPeriod',           // AccountingPeriod
        'custCurRep',              // int
        'customForm',              // string enum(88, 89, -9960, 90, 91, -9965, 92, -9966, 93, -9967)
        'dateDriven',              // string
        'daysoverdue',             // int
        'defaultILShipAddrKey',    // string
        'defaultILShipAddrVal',    // string
        'defaultILShipMethKey',    // int
        'defaultIlBaShippingAddressKey',// string
        'defaultIlShippingAddressKey',// string
        'defaultTaxCode',          // string
        'defaultilbashipaddrkey',  // string
        'defaultilbashipaddrval',  // string
        'department',              // Department
        'discTax1',                // float
        'discTax1Amt',             // float
        'discTax2',                // float
        'discTax2Amt',             // float
        'discdays',                // int
        'discountIsTaxable',       // bool
        'discountItem',            // DiscountItem
        'discountRate',            // float
        'discountTotal',           // float
        'discountamount',          // float
        'discountdate',            // string
        'discpct',                 // float
        'doShippingRecalc',        // bool
        'duedate',                 // string
        'duedays',                 // int
        'edition',                 // string
        'email',                   // string
        'endDate',                 // string
        'entity',                  // Customer|Partner|Vendor|NsResource|Employee|Contact
        'entityNexus',             // Nexus
        'entityStatus',            // CustomerStatus
        'entityTaxRegNum',         // string
        'entity_nexus_country',    // string
        'entityfieldname',         // string
        'estGrossProfit',          // float
        'estGrossProfitPercent',   // float
        'exchangeRate',            // float
        'excludecommission',       // bool
        'expectedCloseDate',       // string
        'externalId',              // string
        'fedexServiceName',        // string
        'flatRateAmt',             // float
        'fob',                     // string
        'forecastType',            // string enum(0, 1, 2, 3)
        'handlingByWeightAmt',     // float
        'handlingByWeightConvrateToLbs',// float
        'handlingByWeightInWholeIncr',// bool
        'handlingByWeightPer',     // float
        'handlingCost',            // float
        'handlingFlatRateAmt',     // float
        'handlingPerItemDefaultPrice',// float
        'handlingPercentOfTotalAmt',// float
        'handlingTax1Amt',         // float
        'handlingTax1Rate',        // float
        'handlingTax2Amt',         // float
        'handlingTax2Rate',        // float
        'handlingTaxAmount',       // float
        'handlingTaxCode',         // NsResource
        'handling_bTaxable',       // bool
        'hasFedexFreightService',  // bool
        'hasanydelayedrevrec',     // bool
        'hasprecalcs',             // bool
        'id',                      // string
        'ilAddrBook',              // EstimateIlAddrBookCollection
        'includeInForecast',       // bool
        'installmentcount',        // int
        'invertrevrecschedule',    // bool
        'isAdvBill',               // bool
        'isMultiShipTo',           // bool
        'isOnlineTransaction',     // string
        'isTaxable',               // bool
        'isTransforming',          // bool
        'isinstallment',           // string
        'item',                    // EstimateItemCollection
        'itemShippingCostFxRate',  // float
        'lastModifiedDate',        // string
        'leadSource',              // NsResource
        'legacyTax',               // bool
        'links',                   // NsLink, [read_only]
        'location',                // Location
        'manualCreditHold',        // string
        'memo',                    // string
        'message',                 // string
        'messageSel',              // CustomerMessage
        'mindays',                 // int
        'nexus',                   // Nexus
        'nexusOverride',           // Nexus
        'nexus_country',           // string
        'oldrevenuecommitment',    // bool
        'oncredithold',            // string
        'onetime',                 // float
        'oppcreatedfrom',          // string
        'oppcreatedfromtitle',     // string
        'opportunity',             // Opportunity
        'originalNexus',           // Nexus
        'originalNexusCountry',    // string
        'originator',              // string
        'otherRefNum',             // string
        'overallbalance',          // float
        'overallunbilledorders',   // float
        'partner',                 // Partner
        'partners',                // EstimatePartnersCollection
        'perItemDefaultPrice',     // float
        'percentOfTotalAmt',       // float
        'persistedterms',          // string
        'prevDate',                // string
        'previousOpportunity',     // string
        'prevpartner',             // int
        'prevrep',                 // int
        'pricesIncludeTax',        // bool
        'primarycurrency',         // float
        'primarycurrencyfxrate',   // float
        'probability',             // float
        'promoCode',               // PromotionCode
        'promotions',              // EstimatePromotionsCollection
        'rFreeIfOverAmt',          // float
        'rMaxShipCost',            // float
        'rMinShipAmt',             // float
        'recurannually',           // float
        'recurmonthly',            // float
        'recurquarterly',          // float
        'recurweekly',             // float
        'refName',                 // string, [read_only]
        'revChargeAmt',            // float
        'sHandlingAccount',        // int
        'sHandlingCostFunction',   // string enum(no_handling, fr, weight, peritem, ptotal, handlingtable)
        'salesRep',                // Customer|Partner|Vendor|NsResource|Employee|Contact
        'salesTeam',               // EstimateSalesTeamCollection
        'saleseffectivedate',      // string
        'shadow_shipAddress',      // string
        'shipAddr1',               // string
        'shipAddr2',               // string
        'shipAddr3',               // string
        'shipAddress',             // string
        'shipAddressList',         // NsResource
        'shipAddressee',           // string
        'shipAttention',           // string
        'shipCarrier',             // string
        'shipCity',                // string
        'shipCountry',             // string enum(PR, PS, PT, PW, PY, QA, AD, AE, AF, AG)
        'shipDate',                // string
        'shipGroup',               // EstimateShipGroupCollection
        'shipIsResidential',       // bool
        'shipItemHasFreeShippingItems',// bool
        'shipMethod',              // ShipItem
        'shipOverride',            // bool
        'shipPhone',               // string
        'shipState',               // string
        'shipZip',                 // string
        'shippingAddress',         // EstimateShippingAddress
        'shippingAddress_text',    // string
        'shippingCost',            // float
        'shippingCostOverridden',  // bool
        'shippingErrorMsg',        // string
        'shippingTax1Amt',         // float
        'shippingTax1Rate',        // float
        'shippingTax2Amt',         // float
        'shippingTax2Rate',        // float
        'shippingTaxAmount',       // float
        'shippingTaxCode',         // NsResource
        'shipping_bTaxable',       // bool
        'shipping_cost_function',  // string enum(pluginRate, fedexRealTimeRate, upsRealTimeRate, uspsRealTimeRate, fr, weight, peritem, ptotal, shippingtable)
        'shipping_rate',           // float
        'source',                  // string enum(SuitePhone, smbXML, CSV, AMT, ADP, QIF, QB, Yahoo, PERQUEST, customerCenter)
        'startDate',               // string
        'status',                  // string enum(A, B, C, V, X, Y)
        'storedtaxoutdated',       // bool
        'storeorder',              // string
        'subsidiary',              // Subsidiary
        'subsidiaryTaxRegNum',     // string
        'subtotal',                // float
        'tax2Total',               // float
        'taxAmount2Override',      // float
        'taxAmountOverride',       // float
        'taxCalcFailure',          // bool
        'taxCalcNotifications',    // string
        'taxCalculationContextAdditionalFields',// string
        'taxCalculationContextAdditionalLineFields',// string
        'taxCalculationContextInProgressDepth',// int
        'taxCalculationContextNotifications',// string
        'taxCalculationContextOriginalAdditionalFields',// string
        'taxCalculationContextOriginalAdditionalLineFields',// string
        'taxCalculationContextRunPaymentScript',// bool
        'taxDetails',              // EstimateTaxDetailsCollection
        'taxDetailsOverride',      // bool
        'taxFractionUnit',         // int
        'taxItem',                 // NsResource
        'taxPointDate',            // string
        'taxPointDateOverride',    // bool
        'taxRate',                 // float
        'taxReferenceToBeUpdated', // string
        'taxRegOverride',          // bool
        'taxRounding',             // string
        'taxRoundingLevel',        // string
        'taxSessionId',            // string
        'taxStrategyUsed',         // string
        'taxTotal',                // float
        'taxTotalTemplate',        // float
        'taxesDirty',              // bool
        'terms',                   // Term
        'testId',                  // string
        'thirdPartyAcct',          // string
        'thirdPartyCarrier',       // string
        'title',                   // string
        'toBeEmailed',             // bool
        'toBeFaxed',               // bool
        'toBePrinted',             // bool
        'total',                   // float
        'totalAfterTaxes',         // float
        'totalCostEstimate',       // float
        'trackingNumberList',      // NsResourceCollection
        'trackingNumbers',         // string
        'tranDate',                // string
        'tranId',                  // string
        'unbilledOrders',          // float
        'updatecurrency',          // string
        'vatRegNum',               // string
        'visibleToCustomer',       // bool
        'warnNexusChange',         // bool
        'website',                 // string
        'weekendpreference',       // string
    ];    

   /**
    * GET /estimate
    * 
    * @param string $q                 Search query used to filter results. (in query)
    * @param int $limit                The limit used to specify the number of results on a single page. (in query)
    * @param int $offset               The offset used for selecting a specific page of results. (in query)
    * @return string json:estimateCollection - List of records 
    * @meta [default] nsError - Error response 
    */
    public function getListOfRecords($q = null, $limit = null, $offset = null)
    {
        $parts = [];
        $path = "/estimate";
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
    * POST /estimate
    * 
    * @param $body {estimate}
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @meta [204 No Content]  - Inserted record 
    * @meta [default] nsError - Error response 
    */
    public function insertRecord($body, $replace = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null)
    {
        $parts = [];
        $path = "/estimate";
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
    * DELETE /estimate/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @meta [204 No Content]  - Removed record 
    * @meta [default] nsError - Error response 
    */
    public function removeRecord($id = null)
    {
        $path = "/estimate/$id";
        $response = $this->_makeRequest('DELETE', $path);

        return $response;
    }

   /**
    * GET /estimate/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @param bool $expandSubResources  Set to true to automatically expand all sublists, sublist lines and subrecords on this record. (in query)
    * @return string json:estimate - Retrieved record 
    * @meta [default] nsError - Error response 
    */
    public function getRecord($id = null, $expandSubResources = null)
    {
        $parts = [];
        $path = "/estimate/$id";
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
    * PATCH /estimate/{id}
    * 
    * @param $body {estimate}
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
        $path = "/estimate/$id";
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
    * PUT /estimate/{id}
    * 
    * @param $body {estimate}
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
        $path = "/estimate/$id";
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

   /**
    * POST /estimate/{id}/!transform/cashSale
    * 
    * @param $body {cashSale}
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param numeric $id [Required]    Internal identifier (in path)
    * @meta [204 No Content] cashSale - Transformed record 
    * @meta [default] nsError - Error response 
    */
    public function transformToCashSale($body, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null, $replace = null, $id = null)
    {
        $parts = [];
        $path = "/estimate/$id/!transform/cashSale";
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
        $response = $this->_makeRequest('POST', $path, $body);

        return $response;
    }

   /**
    * POST /estimate/{id}/!transform/invoice
    * 
    * @param $body {invoice}
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param numeric $id [Required]    Internal identifier (in path)
    * @meta [204 No Content] invoice - Transformed record 
    * @meta [default] nsError - Error response 
    */
    public function transformToInvoice($body, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null, $replace = null, $id = null)
    {
        $parts = [];
        $path = "/estimate/$id/!transform/invoice";
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
        $response = $this->_makeRequest('POST', $path, $body);

        return $response;
    }

   /**
    * POST /estimate/{id}/!transform/salesOrder
    * 
    * @param $body {salesOrder}
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param numeric $id [Required]    Internal identifier (in path)
    * @meta [204 No Content] salesOrder - Transformed record 
    * @meta [default] nsError - Error response 
    */
    public function transformToSalesOrder($body, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null, $replace = null, $id = null)
    {
        $parts = [];
        $path = "/estimate/$id/!transform/salesOrder";
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
        $response = $this->_makeRequest('POST', $path, $body);

        return $response;
    }
}
