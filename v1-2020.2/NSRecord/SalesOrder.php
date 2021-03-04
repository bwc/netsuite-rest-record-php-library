<?php
class NSRecord_SalesOrder extends RequestAbstract
{
   /**
    * [salesOrder]
    * This record is available as a beta record.
    *
    * @var array
    */
    public static $schema = [
        'accountingBookDetail',    // SalesOrderAccountingBookDetailCollection
        'actualShipDate',          // string
        'address_country_state_map',// string
        'alaConfiguration',        // NsResource
        'altHandlingCost',         // float
        'altSalesTotal',           // float
        'altShippingCost',         // float
        'alternativepickupcontact',// Contact
        'amountAuthorized',        // float
        'amountCovered',           // float
        'amountDeposited',         // float
        'amountNotCovered',        // float
        'amountPendingAuthorization',// float
        'amountPendingDeposit',    // float
        'amountRequiringCoverage', // float
        'amountpotentiallycovered',// float
        'authCode',                // string
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
        'billingaddress',          // SalesOrderBillingaddress
        'billingaddress_text',     // string
        'billingschedule',         // BillingSchedule
        'billoverride',            // string
        'billphone',               // string
        'byWeightAmt',             // float
        'byWeightConvrateToLbs',   // float
        'byWeightInWholeIncr',     // bool
        'byWeightPer',             // float
        'canBeUnapproved',         // bool
        'canCustomerGroupInvoices',// bool
        'canalterrroc',            // bool
        'cardSwipe',               // string
        'cardholderAuthentication',// CardholderAuthentication
        'carrier',                 // string
        'ccApproved',              // bool
        'ccAvsStreetMatch',        // string enum(Y, N, X)
        'ccAvsZipMatch',           // string enum(Y, N, X)
        'ccDefault',               // bool
        'ccExpireDate',            // string
        'ccHoldStatus',            // string
        'ccName',                  // string
        'ccNumber',                // string
        'ccProcessAsPurchaseCard', // bool
        'ccSave',                  // bool
        'ccSecurityCode',          // string
        'ccSecurityCodeMatch',     // string enum(Y, N, X)
        'ccStreet',                // string
        'ccZipCode',               // string
        'checkCommitted',          // bool
        'checkNum',                // string
        'checkNumber',             // string
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
        'creditCard',              // NsResource
        'creditCardProcessor',     // NsResource
        'credlim',                 // float
        'currency',                // Currency
        'currencyName',            // string
        'currencyPrecision',       // int
        'currencysymbol',          // string
        'currentPeriod',           // AccountingPeriod
        'custCurRep',              // int
        'customForm',              // string enum(88, 89, -9960, 90, 91, -9965, 92, -9966, 93, -9967)
        'customerCode',            // string
        'customerPaymentAuthorization',// CustomerPaymentAuthorization
        'dateDriven',              // string
        'daysoverdue',             // int
        'debitCardIssueNo',        // string
        'debitKsn',                // string
        'debitPinBlock',           // string
        'defaultCatchUp',          // int
        'defaultILShipAddrKey',    // string
        'defaultILShipAddrVal',    // string
        'defaultILShipMethKey',    // int
        'defaultIlBaShippingAddressKey',// string
        'defaultIlShippingAddressKey',// string
        'defaultTaxCode',          // string
        'defaultcustomerallocationstrategy',// string
        'defaultilbashipaddrkey',  // string
        'defaultilbashipaddrval',  // string
        'deferredrevenue',         // float
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
        'draccount',               // Account
        'duedate',                 // string
        'duedays',                 // int
        'dynamicDescriptor',       // string
        'edition',                 // string
        'email',                   // string
        'endDate',                 // string
        'entity',                  // Customer|Partner|Vendor|NsResource|Employee|Contact
        'entityNexus',             // Nexus
        'entityTaxRegNum',         // string
        'entity_nexus_country',    // string
        'entityfieldname',         // string
        'estGrossProfit',          // float
        'estGrossProfitPercent',   // float
        'estimate',                // int
        'exchangeRate',            // float
        'excludecommission',       // bool
        'externalId',              // string
        'extractAuthorization',    // bool
        'fedexServiceName',        // string
        'flatRateAmt',             // float
        'fob',                     // string
        'forInvoiceGrouping',      // bool
        'fxaccount',               // Account
        'getAuth',                 // bool
        'giftCertApplied',         // float
        'giftCertRedemption',      // SalesOrderGiftCertRedemptionCollection
        'groupedTo',               // NsResource
        'handlingByWeightAmt',     // float
        'handlingByWeightConvrateToLbs',// float
        'handlingByWeightInWholeIncr',// bool
        'handlingByWeightPer',     // float
        'handlingCost',            // float
        'handlingFlatRateAmt',     // float
        'handlingMode',            // string enum(MIMIC, PROCESS, SAVE_ONLY)
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
        'ignoreAvs',               // bool
        'ignoreAvsVis',            // bool
        'ignoreCsc',               // bool
        'ignoreCscVis',            // bool
        'ilAddrBook',              // SalesOrderIlAddrBookCollection
        'inputReferenceCode',      // string
        'installmentcount',        // int
        'integrationId',           // string
        'intercostatus',           // string enum(1, 2, 3)
        'intercotransaction',      // NsResource
        'invertrevrecschedule',    // bool
        'ipAddress',               // string
        'ipAddressCountry',        // string enum(PR, PS, PT, PW, PY, QA, AD, AE, AF, AG)
        'isAdvBill',               // bool
        'isCrossSubTransaction',   // bool
        'isDebitCard',             // string
        'isDefaultShippingRequest',// bool
        'isMultiShipTo',           // bool
        'isOnlineTransaction',     // string
        'isRecurringPayment',      // bool
        'isTaxable',               // bool
        'isTransforming',          // bool
        'isaomautomated',          // bool
        'iseitf81on',              // bool
        'isinstallment',           // string
        'item',                    // SalesOrderItemCollection
        'itemShippingCostFxRate',  // float
        'lastModifiedDate',        // string
        'leadSource',              // NsResource
        'legacyTax',               // bool
        'linkedTrackingNumberList',// NsResourceCollection
        'linkedTrackingNumbers',   // string
        'links',                   // NsLink, [read_only]
        'location',                // Location
        'manualCreditHold',        // string
        'memo',                    // string
        'message',                 // string
        'messageSel',              // CustomerMessage
        'mindays',                 // int
        'mossCountry',             // string enum(PR, PS, PT, PW, PY, QA, AD, AE, AF, AG)
        'mossCountryDetail',       // string
        'mossNexus',               // Nexus
        'mossNexusCountry',        // string
        'needsPick',               // bool
        'needsrevcommitment',      // bool
        'nextbill',                // string
        'nexus',                   // Nexus
        'nexusOverride',           // Nexus
        'nexus_country',           // string
        'oldrevenuecommitment',    // bool
        'oncredithold',            // string
        'onetime',                 // float
        'oppcreatedfrom',          // string
        'oppcreatedfromtitle',     // string
        'opportunity',             // Opportunity
        'orderStatus',             // string enum(A, B, C, D, E, F, G, H, Y)
        'ordpicked',               // bool
        'ordrecvd',                // bool
        'ordrevcommitted',         // bool
        'originalNexus',           // Nexus
        'originalNexusCountry',    // string
        'originator',              // string
        'otherRefNum',             // string
        'outputAuthCode',          // string
        'outputReferenceCode',     // string
        'overallbalance',          // float
        'overallunbilledorders',   // float
        'overrideShippingCost',    // float
        'partner',                 // Partner
        'partners',                // SalesOrderPartnersCollection
        'payPalAuthId',            // string
        'payPalOrderId',           // string
        'payPalProcess',           // bool
        'payPalStatus',            // string
        'payPalTranId',            // string
        'paymentCardCsc',          // string
        'paymentMethod',           // PaymentMethod
        'paymentMethodAccount',    // string
        'paymentOperation',        // string enum(CREDIT, OVERRIDE, SALE, REFUND, AUTHENTICATION, REFRESH, VOID, CAPTURE, AUTHORIZATION)
        'paymentOption',           // NsResource
        'paymentProcessingProfile',// NsResource
        'paymentSessionAmount',    // float
        'paymentsDue',             // float
        'perItemDefaultPrice',     // float
        'percentOfTotalAmt',       // float
        'persistedterms',          // string
        'pnRefNum',                // string
        'prevDate',                // string
        'previousOpportunity',     // string
        'prevpartner',             // int
        'prevrep',                 // int
        'pricesIncludeTax',        // bool
        'primarycurrency',         // float
        'primarycurrencyfxrate',   // float
        'project',                 // string
        'promoCode',               // PromotionCode
        'promoCodeError',          // string
        'promoExcludeFromRateRequest',// string
        'promoShipCostList',       // string
        'promotions',              // SalesOrderPromotionsCollection
        'rFreeIfOverAmt',          // float
        'rMaxShipCost',            // float
        'rMinShipAmt',             // float
        'rcvdquantity',            // float
        'recognizedrevenue',       // float
        'recurannually',           // float
        'recurmonthly',            // float
        'recurquarterly',          // float
        'recurrenceFrequency',     // string enum(SEMIMONTHLY, STARTOFPERIOD, WEEKLY, QUADWEEKLY, BIENNIALLY, DAILY, NEVER, SEMIANNUALLY, ONETIME, ENDOFPERIOD)
        'recurweekly',             // float
        'refName',                 // string, [read_only]
        'repeatEvery',             // int
        'repeatUnit',              // string
        'requiredDepositAmount',   // float
        'requiredDepositDue',      // float
        'requiredDepositPercentage',// float
        'revChargeAmt',            // float
        'revcommitstatus',         // string
        'revenuestatus',           // string
        'revrecenddate',           // string
        'revreconrevcommitment',   // bool
        'revrecschedule',          // RevRecTemplate
        'revrecschedulestarted',   // bool
        'revrecstartdate',         // string
        'sHandlingAccount',        // int
        'sHandlingCostFunction',   // string enum(no_handling, fr, weight, peritem, ptotal, handlingtable)
        'salesRep',                // Customer|Partner|Vendor|NsResource|Employee|Contact
        'salesTeam',               // SalesOrderSalesTeamCollection
        'saleschannel',            // NsResource
        'saleschannelorderpriority',// string
        'saleseffectivedate',      // string
        'saveonauthdecline',       // bool
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
        'shipComplete',            // bool
        'shipCostList',            // string
        'shipCountry',             // string enum(PR, PS, PT, PW, PY, QA, AD, AE, AF, AG)
        'shipDate',                // string
        'shipGroup',               // SalesOrderShipGroupCollection
        'shipIsResidential',       // bool
        'shipItemHasFreeShippingItems',// bool
        'shipMethod',              // ShipItem
        'shipOverride',            // bool
        'shipPhone',               // string
        'shipState',               // string
        'shipZip',                 // string
        'shippingAddress',         // SalesOrderShippingAddress
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
        'shopperipaddress',        // string
        'softDescriptor',          // string
        'source',                  // string enum(SuitePhone, smbXML, CSV, AMT, ADP, QIF, QB, Yahoo, PERQUEST, customerCenter)
        'sourceWebSite',           // WebSite
        'startDate',               // string
        'status',                  // string enum(A, B, C, D, E, F, G, H, Y)
        'storedtaxoutdated',       // bool
        'storeorder',              // string
        'subsidiary',              // Subsidiary
        'subsidiaryCountry',       // string
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
        'taxDetails',              // SalesOrderTaxDetailsCollection
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
        'threedStatusCode',        // string
        'threedStatusCodeVis',     // bool
        'toBeEmailed',             // bool
        'toBeFaxed',               // bool
        'toBePrinted',             // bool
        'total',                   // float
        'totalAfterTaxes',         // float
        'totalCostEstimate',       // float
        'tranDate',                // string
        'tranId',                  // string
        'tranMoss',                // bool
        'tranisvsoebundle',        // bool
        'transactionToRefund',     // NsResource
        'unbilledOrders',          // float
        'updatecurrency',          // string
        'usingVSOEFldSet',         // bool
        'validFrom',               // string
        'vatRegNum',               // string
        'vsoeautocalc',            // bool
        'warnNexusChange',         // bool
        'website',                 // string
        'webstore',                // string
        'webstoreOptimizationActive',// bool
        'weekendpreference',       // string
    ];    

   /**
    * GET /salesOrder
    * 
    * @param string $q                 Search query used to filter results. (in query)
    * @param int $limit                The limit used to specify the number of results on a single page. (in query)
    * @param int $offset               The offset used for selecting a specific page of results. (in query)
    * @return string json:salesOrderCollection - List of records 
    * @meta [default] nsError - Error response 
    */
    public function getListOfRecords($q = null, $limit = null, $offset = null)
    {
        $parts = [];
        $path = "/salesOrder";
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
    * POST /salesOrder
    * 
    * @param $body {salesOrder}
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @meta [204 No Content]  - Inserted record 
    * @meta [default] nsError - Error response 
    */
    public function insertRecord($body, $replace = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null)
    {
        $parts = [];
        $path = "/salesOrder";
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
    * DELETE /salesOrder/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @meta [204 No Content]  - Removed record 
    * @meta [default] nsError - Error response 
    */
    public function removeRecord($id = null)
    {
        $path = "/salesOrder/$id";
        $response = $this->_makeRequest('DELETE', $path);

        return $response;
    }

   /**
    * GET /salesOrder/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @param bool $expandSubResources  Set to true to automatically expand all sublists, sublist lines and subrecords on this record. (in query)
    * @return string json:salesOrder - Retrieved record 
    * @meta [default] nsError - Error response 
    */
    public function getRecord($id = null, $expandSubResources = null)
    {
        $parts = [];
        $path = "/salesOrder/$id";
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
    * PATCH /salesOrder/{id}
    * 
    * @param $body {salesOrder}
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
        $path = "/salesOrder/$id";
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
    * PUT /salesOrder/{id}
    * 
    * @param $body {salesOrder}
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
        $path = "/salesOrder/$id";
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
    * POST /salesOrder/{id}/!transform/cashSale
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
        $path = "/salesOrder/$id/!transform/cashSale";
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
    * POST /salesOrder/{id}/!transform/fulfillmentRequest
    * 
    * @param $body {fulfillmentRequest}
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param numeric $id [Required]    Internal identifier (in path)
    * @meta [204 No Content] fulfillmentRequest - Transformed record 
    * @meta [default] nsError - Error response 
    */
    public function transformToFulfillmentRequest($body, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null, $replace = null, $id = null)
    {
        $parts = [];
        $path = "/salesOrder/$id/!transform/fulfillmentRequest";
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
    * POST /salesOrder/{id}/!transform/invoice
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
        $path = "/salesOrder/$id/!transform/invoice";
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
    * POST /salesOrder/{id}/!transform/itemFulfillment
    * 
    * @param $body {itemFulfillment}
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param numeric $id [Required]    Internal identifier (in path)
    * @meta [204 No Content] itemFulfillment - Transformed record 
    * @meta [default] nsError - Error response 
    */
    public function transformToItemFulfillment($body, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null, $replace = null, $id = null)
    {
        $parts = [];
        $path = "/salesOrder/$id/!transform/itemFulfillment";
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
    * POST /salesOrder/{id}/!transform/returnAuthorization
    * 
    * @param $body {returnAuthorization}
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param numeric $id [Required]    Internal identifier (in path)
    * @meta [204 No Content] returnAuthorization - Transformed record 
    * @meta [default] nsError - Error response 
    */
    public function transformToReturnAuthorization($body, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null, $replace = null, $id = null)
    {
        $parts = [];
        $path = "/salesOrder/$id/!transform/returnAuthorization";
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
    * POST /salesOrder/{id}/!transform/revenueCommitment
    * 
    * @param $body {revenueCommitment}
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param numeric $id [Required]    Internal identifier (in path)
    * @meta [204 No Content] revenueCommitment - Transformed record 
    * @meta [default] nsError - Error response 
    */
    public function transformToRevenueCommitment($body, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null, $replace = null, $id = null)
    {
        $parts = [];
        $path = "/salesOrder/$id/!transform/revenueCommitment";
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
    * POST /salesOrder/{id}/!transform/storePickupFulfillment
    * 
    * @param $body {storePickupFulfillment}
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param numeric $id [Required]    Internal identifier (in path)
    * @meta [204 No Content] storePickupFulfillment - Transformed record 
    * @meta [default] nsError - Error response 
    */
    public function transformToStorePickupFulfillment($body, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null, $replace = null, $id = null)
    {
        $parts = [];
        $path = "/salesOrder/$id/!transform/storePickupFulfillment";
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
