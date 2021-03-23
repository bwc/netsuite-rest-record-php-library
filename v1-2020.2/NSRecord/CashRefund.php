<?php
class NSRecord_CashRefund extends RequestAbstract
{
   /**
    * [cashRefund]
    * This record is available as a beta record.
    *
    * @var array
    */
    public static $schema = [
        'account',                 // Account
        'accountingBookDetail',    // CashRefundAccountingBookDetailCollection
        'address_country_state_map',// string
        'altHandlingCost',         // float
        'altShippingCost',         // float
        'asOfDate',                // string
        'bFreeIfOverActive',       // bool
        'bInclAllItemsForFreeShipping',// bool
        'bMaxShipCostActive',      // bool
        'bMinShipCostActive',      // bool
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
        'billingAccount',          // BillingAccount
        'billingaddress',          // CashRefundBillingaddress
        'billingaddress_text',     // string
        'billoverride',            // string
        'billphone',               // string
        'bulkProcSubmission',      // NsResource
        'bulkSubmissionId',        // int
        'byWeightAmt',             // float
        'byWeightConvrateToLbs',   // float
        'byWeightInWholeIncr',     // bool
        'byWeightPer',             // float
        'canalterrroc',            // bool
        'cardSwipe',               // string
        'cardholderAuthentication',// CardholderAuthentication
        'carrier',                 // string
        'ccApproved',              // bool
        'ccDefault',               // bool
        'ccExpireDate',            // string
        'ccHoldStatus',            // string
        'ccName',                  // string
        'ccNumber',                // string
        'ccProcessAsPurchaseCard', // bool
        'ccSave',                  // bool
        'ccStreet',                // string
        'ccZipCode',               // string
        'chargeIt',                // bool
        'checkCommitted',          // bool
        'checkNum',                // string
        'checkNumber',             // string
        'checklink',               // Check
        'class',                   // Classification
        'compFedexThirdPartyAcct', // string
        'compUpsThirdPartyAcct',   // string
        'contribPct',              // string
        'copiedFrom',              // int
        'couponCode',              // CouponCode
        'createdDate',             // string
        'createdFrom',             // NsResource
        'createdfromsaledoc',      // string
        'creditCard',              // NsResource
        'creditCardProcessor',     // NsResource
        'currency',                // Currency
        'currencyName',            // string
        'currencyPrecision',       // int
        'currencyfromba',          // string
        'currencysymbol',          // string
        'custCurRep',              // int
        'customForm',              // string enum(88, 89, -9960, 90, 91, -9965, 92, -9966, 93, -9967)
        'customerCode',            // string
        'customerPaymentAuthorization',// CustomerPaymentAuthorization
        'dateDriven',              // string
        'debitCardIssueNo',        // string
        'debitKsn',                // string
        'debitPinBlock',           // string
        'defaultCatchUp',          // int
        'defaultrecurtrandate',    // string
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
        'exchangeRate',            // float
        'excludeFromGLNumbering',  // bool
        'excludecommission',       // bool
        'externalId',              // string
        'fedexServiceName',        // string
        'flatRateAmt',             // float
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
        'inputReferenceCode',      // string
        'installmentcount',        // int
        'integrationId',           // string
        'invertrevrecschedule',    // bool
        'ipAddress',               // string
        'ipAddressCountry',        // string enum(PR, PS, PT, PW, PY, QA, AD, AE, AF, AG)
        'isAdvBill',               // bool
        'isDebitCard',             // string
        'isOnlineTransaction',     // string
        'isRecurringPayment',      // bool
        'isTaxable',               // bool
        'isTransforming',          // bool
        'isinstallment',           // string
        'item',                    // CashRefundItemCollection
        'itemShippingCostFxRate',  // float
        'lastModifiedDate',        // string
        'leadSource',              // NsResource
        'legacyTax',               // bool
        'links',                   // NsLink, [read_only]
        'location',                // Location
        'locationusesbins',        // bool
        'memo',                    // string
        'message',                 // string
        'messageSel',              // CustomerMessage
        'mindays',                 // int
        'mossCountry',             // string enum(PR, PS, PT, PW, PY, QA, AD, AE, AF, AG)
        'mossCountryDetail',       // string
        'mossNexus',               // Nexus
        'mossNexusCountry',        // string
        'nexus',                   // Nexus
        'nexusOverride',           // Nexus
        'nexus_country',           // string
        'oldrevenuecommitment',    // bool
        'originalNexus',           // Nexus
        'originalNexusCountry',    // string
        'originator',              // string
        'otherRefNum',             // string
        'outputAuthCode',          // string
        'outputReferenceCode',     // string
        'partner',                 // Partner
        'partners',                // CashRefundPartnersCollection
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
        'perItemDefaultPrice',     // float
        'percentOfTotalAmt',       // float
        'persistedterms',          // string
        'pnRefNum',                // string
        'postingPeriod',           // AccountingPeriod
        'prevDate',                // string
        'prevpartner',             // int
        'prevrep',                 // int
        'promoCode',               // PromotionCode
        'promotions',              // CashRefundPromotionsCollection
        'rFreeIfOverAmt',          // float
        'rMaxShipCost',            // float
        'rMinShipAmt',             // float
        'recognizedrevenue',       // float
        'recurringBill',           // bool
        'refName',                 // string, [read_only]
        'refundCheck',             // bool
        'revChargeAmt',            // float
        'revcommitstatus',         // string
        'revenuestatus',           // string
        'revreconrevcommitment',   // bool
        'revrecschedulestarted',   // bool
        'sHandlingAccount',        // int
        'sHandlingCostFunction',   // string enum(no_handling, fr, weight, peritem, ptotal, handlingtable)
        'salesRep',                // Customer|Partner|Vendor|NsResource|Employee|Contact
        'salesReturn',             // string
        'salesTeam',               // CashRefundSalesTeamCollection
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
        'shipIsResidential',       // bool
        'shipItemHasFreeShippingItems',// bool
        'shipMethod',              // ShipItem
        'shipOverride',            // bool
        'shipPhone',               // string
        'shipState',               // string
        'shipZip',                 // string
        'shippingAddress',         // CashRefundShippingAddress
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
        'softDescriptor',          // string
        'source',                  // string enum(SuitePhone, smbXML, CSV, AMT, ADP, QIF, QB, Yahoo, PERQUEST, customerCenter)
        'startDate',               // string
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
        'taxDetails',              // CashRefundTaxDetailsCollection
        'taxDetailsOverride',      // bool
        'taxFractionUnit',         // int
        'taxItem',                 // NsResource
        'taxPeriod',               // TaxPeriod
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
        'toBeEmailed',             // bool
        'toBeFaxed',               // bool
        'toBePrinted',             // bool
        'toprint2',                // bool
        'total',                   // float
        'totalAfterTaxes',         // float
        'totalCostEstimate',       // float
        'tranDate',                // string
        'tranId',                  // string
        'tranMoss',                // bool
        'tranisvsoebundle',        // bool
        'transactionToRefund',     // NsResource
        'updatecurrency',          // string
        'usingVSOEFldSet',         // bool
        'validFrom',               // string
        'vatRegNum',               // string
        'vsoeautocalc',            // bool
        'warnNexusChange',         // bool
        'website',                 // string
        'weekendpreference',       // string
        'whichchargestoadd',       // string enum(, ALL, TRANSACTION_DATE, AS_OF_DATE)
    ];    

   /**
    * GET /cashRefund
    * 
    * @param string $q                 Search query used to filter results. (in query)
    * @param int $limit                The limit used to specify the number of results on a single page. (in query)
    * @param int $offset               The offset used for selecting a specific page of results. (in query)
    * @return string json:cashRefundCollection - List of records
    * @response [default] nsError - Error response
    */
    public function getListOfRecords($q = null, $limit = null, $offset = null)
    {
        $parts = [];
        $path = "/cashRefund";
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
    * POST /cashRefund
    * 
    * @param $body {cashRefund}
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @response [204 No Content]  - Inserted record
    * @response [default] nsError - Error response
    */
    public function insertRecord($body, $replace = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null)
    {
        $parts = [];
        $path = "/cashRefund";
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
    * DELETE /cashRefund/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @response [204 No Content]  - Removed record
    * @response [default] nsError - Error response
    */
    public function removeRecord($id = null)
    {
        $path = "/cashRefund/$id";
        $response = $this->_makeRequest('DELETE', $path);

        return $response;
    }

   /**
    * GET /cashRefund/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @param bool $expandSubResources  Set to true to automatically expand all sublists, sublist lines and subrecords on this record. (in query)
    * @return string json:cashRefund - Retrieved record
    * @response [default] nsError - Error response
    */
    public function getRecord($id = null, $expandSubResources = null)
    {
        $parts = [];
        $path = "/cashRefund/$id";
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
    * PATCH /cashRefund/{id}
    * 
    * @param $body {cashRefund}
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
        $path = "/cashRefund/$id";
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
    * PUT /cashRefund/{id}
    * 
    * @param $body {cashRefund}
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
        $path = "/cashRefund/$id";
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
    * POST /cashRefund/{id}/!transform/creditMemo
    * 
    * @param $body {creditMemo}
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param numeric $id [Required]    Internal identifier (in path)
    * @response [204 No Content] creditMemo - Transformed record
    * @response [default] nsError - Error response
    */
    public function transformToCreditMemo($body, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null, $replace = null, $id = null)
    {
        $parts = [];
        $path = "/cashRefund/$id/!transform/creditMemo";
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
