<?php
class NSRecord_Invoice extends RequestAbstract
{
   /**
    * [invoice]
    * This record is available as a beta record.
    *
    * @var array
    */
    public static $schema = [
        'account',                 // Account
        'accountingBookDetail',    // InvoiceAccountingBookDetailCollection
        'address_country_state_map',// string
        'altHandlingCost',         // float
        'altShippingCost',         // float
        'amountpaid',              // float
        'amountremaining',         // float
        'amountremainingtotalbox', // float
        'approvalStatus',          // string enum(11, 12, 13, 14, 15, 16, 17, 18, 19, 1)
        'asOfDate',                // string
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
        'billingAccount',          // BillingAccount
        'billingaddress',          // InvoiceBillingaddress
        'billingaddress_text',     // string
        'billoverride',            // string
        'billphone',               // string
        'bulkProcSubmission',      // NsResource
        'bulkSubmissionId',        // int
        'byWeightAmt',             // float
        'byWeightConvrateToLbs',   // float
        'byWeightInWholeIncr',     // bool
        'byWeightPer',             // float
        'canCustomerGroupInvoices',// bool
        'canalterrroc',            // bool
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
        'createdfromstatus',       // string
        'credholdentity',          // int
        'credholdoverride',        // string
        'credlim',                 // float
        'currency',                // Currency
        'currencyName',            // string
        'currencyPrecision',       // int
        'currencyfromba',          // string
        'currencysymbol',          // string
        'custCurRep',              // int
        'customForm',              // string enum(88, 89, -9960, 90, 91, -9965, 92, -9966, 93, -9967)
        'dateDriven',              // string
        'daysoverdue',             // int
        'defaultCatchUp',          // int
        'defaultILShipAddrKey',    // string
        'defaultILShipAddrVal',    // string
        'defaultILShipMethKey',    // int
        'defaultIlBaShippingAddressKey',// string
        'defaultIlShippingAddressKey',// string
        'defaultTaxCode',          // string
        'defaultilbashipaddrkey',  // string
        'defaultilbashipaddrval',  // string
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
        'excludeFromGLNumbering',  // bool
        'excludecommission',       // bool
        'expCost',                 // InvoiceExpCostCollection
        'externalId',              // string
        'fedexServiceName',        // string
        'finchrg',                 // string
        'flatRateAmt',             // float
        'fob',                     // string
        'forInvoiceGrouping',      // bool
        'giftCertApplied',         // float
        'giftCertRedemption',      // InvoiceGiftCertRedemptionCollection
        'groupedTo',               // NsResource
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
        'ilAddrBook',              // InvoiceIlAddrBookCollection
        'installment',             // InvoiceInstallmentCollection
        'installmentcount',        // int
        'intercostatus',           // string enum(1, 2, 3)
        'intercotransaction',      // NsResource
        'invertrevrecschedule',    // bool
        'ipAddress',               // string
        'ipAddressCountry',        // string enum(PR, PS, PT, PW, PY, QA, AD, AE, AF, AG)
        'isAdvBill',               // bool
        'isMultiShipTo',           // bool
        'isOnlineTransaction',     // string
        'isTaxable',               // bool
        'isTransforming',          // bool
        'iseitf81on',              // bool
        'isfulfilled',             // string
        'isinstallment',           // string
        'item',                    // InvoiceItemCollection
        'itemCost',                // InvoiceItemCostCollection
        'itemShippingCostFxRate',  // float
        'lastModifiedDate',        // string
        'leadSource',              // NsResource
        'legacyTax',               // bool
        'linkedTrackingNumberList',// NsResourceCollection
        'linkedTrackingNumbers',   // string
        'links',                   // NsLink, [read_only]
        'location',                // Location
        'locationusesbins',        // bool
        'manualCreditHold',        // string
        'memo',                    // string
        'message',                 // string
        'messageSel',              // CustomerMessage
        'mindays',                 // int
        'mossCountry',             // string enum(PR, PS, PT, PW, PY, QA, AD, AE, AF, AG)
        'mossCountryDetail',       // string
        'mossNexus',               // Nexus
        'mossNexusCountry',        // string
        'nextApprover',            // Employee
        'nexus',                   // Nexus
        'nexusOverride',           // Nexus
        'nexus_country',           // string
        'oldrevenuecommitment',    // bool
        'oncredithold',            // string
        'oppcreatedfrom',          // string
        'oppcreatedfromtitle',     // string
        'opportunity',             // Opportunity
        'origdoc',                 // string
        'originalNexus',           // Nexus
        'originalNexusCountry',    // string
        'originator',              // string
        'origunbilled',            // float
        'otherRefNum',             // string
        'overallbalance',          // float
        'overallunbilledorders',   // float
        'overrideinstallments',    // bool
        'partner',                 // Partner
        'partners',                // InvoicePartnersCollection
        'perItemDefaultPrice',     // float
        'percentOfTotalAmt',       // float
        'persistedterms',          // string
        'postingPeriod',           // AccountingPeriod
        'prevDate',                // string
        'previousOpportunity',     // string
        'prevpartner',             // int
        'prevrep',                 // int
        'pricesIncludeTax',        // bool
        'primarycurrency',         // float
        'primarycurrencyfxrate',   // float
        'promoCode',               // PromotionCode
        'promotions',              // InvoicePromotionsCollection
        'rFreeIfOverAmt',          // float
        'rMaxShipCost',            // float
        'rMinShipAmt',             // float
        'recognizedrevenue',       // float
        'recurringBill',           // bool
        'refName',                 // string, [read_only]
        'revChargeAmt',            // float
        'revcommitstatus',         // string
        'revenuestatus',           // string
        'revrecenddate',           // string
        'revreconrevcommitment',   // bool
        'revrecschedule',          // RevRecTemplate
        'revrecschedulestarted',   // bool
        'revrecstartdate',         // string
        'sEmail',                  // string
        'sHandlingAccount',        // int
        'sHandlingCostFunction',   // string enum(no_handling, fr, weight, peritem, ptotal, handlingtable)
        'salesRep',                // Customer|Partner|Vendor|NsResource|Employee|Contact
        'salesTeam',               // InvoiceSalesTeamCollection
        'saleseffectivedate',      // string
        'sendOrderFulfillmentEmail',// bool
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
        'shipGroup',               // InvoiceShipGroupCollection
        'shipIsResidential',       // bool
        'shipItemHasFreeShippingItems',// bool
        'shipMethod',              // ShipItem
        'shipOverride',            // bool
        'shipPhone',               // string
        'shipState',               // string
        'shipZip',                 // string
        'shippingAddress',         // InvoiceShippingAddress
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
        'sourceWebSite',           // WebSite
        'startDate',               // string
        'status',                  // string enum(A, B, D, E, V, Y)
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
        'taxDetails',              // InvoiceTaxDetailsCollection
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
        'time',                    // InvoiceTimeCollection
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
        'tranMoss',                // bool
        'tranisvsoebundle',        // bool
        'unbilledOrders',          // float
        'updatecurrency',          // string
        'usingVSOEFldSet',         // bool
        'vatRegNum',               // string
        'vsoeautocalc',            // bool
        'warnNexusChange',         // bool
        'website',                 // string
        'weekendpreference',       // string
        'whichchargestoadd',       // string enum(, ALL, TRANSACTION_DATE, AS_OF_DATE)
    ];    

   /**
    * GET /invoice
    * 
    * @param string $q                 Search query used to filter results. (in query)
    * @param int $limit                The limit used to specify the number of results on a single page. (in query)
    * @param int $offset               The offset used for selecting a specific page of results. (in query)
    * @return string json:invoiceCollection - List of records 
    * @meta [default] nsError - Error response 
    */
    public function getListOfRecords($q = null, $limit = null, $offset = null)
    {
        $parts = [];
        $path = "/invoice";
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
    * POST /invoice
    * 
    * @param $body {invoice}
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @meta [204 No Content]  - Inserted record 
    * @meta [default] nsError - Error response 
    */
    public function insertRecord($body, $replace = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null)
    {
        $parts = [];
        $path = "/invoice";
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
    * DELETE /invoice/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @meta [204 No Content]  - Removed record 
    * @meta [default] nsError - Error response 
    */
    public function removeRecord($id = null)
    {
        $path = "/invoice/$id";
        $response = $this->_makeRequest('DELETE', $path);

        return $response;
    }

   /**
    * GET /invoice/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @param bool $expandSubResources  Set to true to automatically expand all sublists, sublist lines and subrecords on this record. (in query)
    * @return string json:invoice - Retrieved record 
    * @meta [default] nsError - Error response 
    */
    public function getRecord($id = null, $expandSubResources = null)
    {
        $parts = [];
        $path = "/invoice/$id";
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
    * PATCH /invoice/{id}
    * 
    * @param $body {invoice}
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
        $path = "/invoice/$id";
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
    * PUT /invoice/{id}
    * 
    * @param $body {invoice}
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
        $path = "/invoice/$id";
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
    * POST /invoice/{id}/!transform/creditMemo
    * 
    * @param $body {creditMemo}
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param numeric $id [Required]    Internal identifier (in path)
    * @meta [204 No Content] creditMemo - Transformed record 
    * @meta [default] nsError - Error response 
    */
    public function transformToCreditMemo($body, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null, $replace = null, $id = null)
    {
        $parts = [];
        $path = "/invoice/$id/!transform/creditMemo";
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
    * POST /invoice/{id}/!transform/customerPayment
    * 
    * @param $body {customerPayment}
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param numeric $id [Required]    Internal identifier (in path)
    * @meta [204 No Content] customerPayment - Transformed record 
    * @meta [default] nsError - Error response 
    */
    public function transformToCustomerPayment($body, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null, $replace = null, $id = null)
    {
        $parts = [];
        $path = "/invoice/$id/!transform/customerPayment";
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
    * POST /invoice/{id}/!transform/returnAuthorization
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
        $path = "/invoice/$id/!transform/returnAuthorization";
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
