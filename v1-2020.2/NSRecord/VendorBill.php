<?php
class NSRecord_VendorBill extends RequestAbstract
{
   /**
    * [vendorBill]
    * This record is available as a beta record.
    *
    * @var array
    */
    public static $schema = [
        'account',                 // Account
        'accountingBookDetail',    // VendorBillAccountingBookDetailCollection
        'approvalStatus',          // string enum(11, 12, 13, 14, 15, 16, 17, 18, 19, 1)
        'availableVendorCredit',   // float
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
        'billingaddress',          // VendorBillBillingaddress
        'billingaddress_text',     // string
        'billoverride',            // string
        'billphone',               // string
        'cancelVendBill',          // string
        'class',                   // Classification
        'createdDate',             // string
        'creditLimit',             // float
        'currency',                // Currency
        'currencyName',            // string
        'currencyPrecision',       // int
        'currencysymbol',          // string
        'customForm',              // string enum(88, 89, -9960, 90, 91, -9965, 92, -9966, 93, -9967)
        'dateDriven',              // string
        'defaultAddressee',        // string
        'defaultCatchUp',          // int
        'department',              // Department
        'discdays',                // int
        'discountamount',          // float
        'discountdate',            // string
        'discpct',                 // float
        'documentStatus',          // string
        'duedate',                 // string
        'duedays',                 // int
        'edition',                 // string
        'endDate',                 // string
        'entity',                  // Customer|Partner|Vendor|NsResource|Employee|Contact
        'entityNexus',             // Nexus
        'entityTaxRegNum',         // string
        'entity_nexus_country',    // string
        'entityfieldname',         // string
        'exchangeRate',            // float
        'excludeFromGLNumbering',  // bool
        'expacct',                 // int
        'expacctname',             // string
        'expense',                 // VendorBillExpenseCollection
        'externalId',              // string
        'grossTotal',              // float
        'id',                      // string
        'inboundShipmentValue',    // int
        'incoterm',                // NsResource
        'installment',             // VendorBillInstallmentCollection
        'installmentcount',        // int
        'intercostatus',           // string enum(1, 2, 3)
        'intercotransaction',      // NsResource
        'isAdvBill',               // bool
        'isTransforming',          // bool
        'isinstallment',           // string
        'item',                    // VendorBillItemCollection
        'landedCostMethod',        // string enum(WEIGHT, QUANTITY, VALUE)
        'landedCostPerLine',       // bool
        'lastModifiedDate',        // string
        'legacyTax',               // bool
        'links',                   // NsLink, [read_only]
        'location',                // Location
        'locationusesbins',        // bool
        'memo',                    // string
        'mindays',                 // int
        'nextApprover',            // Employee
        'nexus',                   // Nexus
        'nexusOverride',           // Nexus
        'nexus_country',           // string
        'originalNexus',           // Nexus
        'originalNexusCountry',    // string
        'overrideinstallments',    // bool
        'paymentHold',             // bool
        'payments',                // string
        'persistedterms',          // string
        'postingPeriod',           // AccountingPeriod
        'prevDate',                // string
        'received',                // bool
        'refName',                 // string, [read_only]
        'representsSubsidiary',    // string
        'revChargeAmt',            // float
        'startDate',               // string
        'status',                  // string enum(A, B, C, D, E, F, Y)
        'storedtaxoutdated',       // bool
        'subsidiary',              // Subsidiary
        'subsidiaryTaxRegNum',     // string
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
        'taxDetails',              // VendorBillTaxDetailsCollection
        'taxDetailsOverride',      // bool
        'taxFractionUnit',         // int
        'taxPeriod',               // TaxPeriod
        'taxPointDate',            // string
        'taxPointDateOverride',    // bool
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
        'total',                   // float
        'totalAfterTaxes',         // float
        'tranDate',                // string
        'tranId',                  // string
        'updatecurrency',          // string
        'userTaxTotal',            // float
        'userTotal',               // float
        'vatRegNum',               // string
        'vendorTaxItem',           // int
        'warnNexusChange',         // bool
        'weekendpreference',       // string
    ];    

   /**
    * GET /vendorBill
    * 
    * @param string $q                 Search query used to filter results. (in query)
    * @param int $limit                The limit used to specify the number of results on a single page. (in query)
    * @param int $offset               The offset used for selecting a specific page of results. (in query)
    * @return string json:vendorBillCollection - List of records 
    * @meta [default] nsError - Error response 
    */
    public function getListOfRecords($q = null, $limit = null, $offset = null)
    {
        $parts = [];
        $path = "/vendorBill";
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
    * POST /vendorBill
    * 
    * @param $body {vendorBill}
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @meta [204 No Content]  - Inserted record 
    * @meta [default] nsError - Error response 
    */
    public function insertRecord($body, $replace = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null)
    {
        $parts = [];
        $path = "/vendorBill";
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
    * DELETE /vendorBill/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @meta [204 No Content]  - Removed record 
    * @meta [default] nsError - Error response 
    */
    public function removeRecord($id = null)
    {
        $path = "/vendorBill/$id";
        $response = $this->_makeRequest('DELETE', $path);

        return $response;
    }

   /**
    * GET /vendorBill/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @param bool $expandSubResources  Set to true to automatically expand all sublists, sublist lines and subrecords on this record. (in query)
    * @return string json:vendorBill - Retrieved record 
    * @meta [default] nsError - Error response 
    */
    public function getRecord($id = null, $expandSubResources = null)
    {
        $parts = [];
        $path = "/vendorBill/$id";
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
    * PATCH /vendorBill/{id}
    * 
    * @param $body {vendorBill}
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
        $path = "/vendorBill/$id";
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
    * PUT /vendorBill/{id}
    * 
    * @param $body {vendorBill}
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
        $path = "/vendorBill/$id";
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
    * POST /vendorBill/{id}/!transform/vendorCredit
    * 
    * @param $body {vendorCredit}
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param numeric $id [Required]    Internal identifier (in path)
    * @meta [204 No Content] vendorCredit - Transformed record 
    * @meta [default] nsError - Error response 
    */
    public function transformToVendorCredit($body, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null, $replace = null, $id = null)
    {
        $parts = [];
        $path = "/vendorBill/$id/!transform/vendorCredit";
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
    * POST /vendorBill/{id}/!transform/vendorPayment
    * 
    * @param $body {vendorPayment}
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param numeric $id [Required]    Internal identifier (in path)
    * @meta [204 No Content] vendorPayment - Transformed record 
    * @meta [default] nsError - Error response 
    */
    public function transformToVendorPayment($body, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null, $replace = null, $id = null)
    {
        $parts = [];
        $path = "/vendorBill/$id/!transform/vendorPayment";
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
    * POST /vendorBill/{id}/!transform/vendorReturnAuthorization
    * 
    * @param $body {vendorReturnAuthorization}
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param numeric $id [Required]    Internal identifier (in path)
    * @meta [204 No Content] vendorReturnAuthorization - Transformed record 
    * @meta [default] nsError - Error response 
    */
    public function transformToVendorReturnAuthorization($body, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null, $replace = null, $id = null)
    {
        $parts = [];
        $path = "/vendorBill/$id/!transform/vendorReturnAuthorization";
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
