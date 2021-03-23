<?php
class NSRecord_CustomerPayment extends RequestAbstract
{
   /**
    * [customerPayment]
    * This record is available as a beta record.
    *
    * @var array
    */
    public static $schema = [
        'account',                 // Account
        'accountingBookDetail',    // CustomerPaymentAccountingBookDetailCollection
        'applied',                 // float
        'apply',                   // CustomerPaymentApplyCollection
        'aracct',                  // Account
        'authCode',                // string
        'autoApply',               // bool
        'balance',                 // float
        'cardSwipe',               // string
        'cardholderAuthentication',// CardholderAuthentication
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
        'chargeIt',                // bool
        'checkNum',                // string
        'checkNumber',             // string
        'class',                   // Classification
        'consolidatebalance',      // float
        'createdDate',             // string
        'credit',                  // CustomerPaymentCreditCollection
        'creditCard',              // NsResource
        'creditCardProcessor',     // NsResource
        'currency',                // Currency
        'currencyName',            // string
        'currencyPrecision',       // int
        'currencysymbol',          // string
        'custCurRep',              // int
        'customForm',              // string enum(88, 89, -9960, 90, 91, -9965, 92, -9966, 93, -9967)
        'customer',                // NsResource
        'customerCode',            // string
        'customerPaymentAuthorization',// CustomerPaymentAuthorization
        'debitCardIssueNo',        // string
        'debitKsn',                // string
        'debitPinBlock',           // string
        'department',              // Department
        'deposit',                 // CustomerPaymentDepositCollection
        'dynamicDescriptor',       // string
        'entityNexus',             // Nexus
        'entity_nexus_country',    // string
        'entityfieldname',         // string
        'exchangeRate',            // float
        'excludeFromGLNumbering',  // bool
        'externalId',              // string
        'handlingMode',            // string enum(MIMIC, PROCESS, SAVE_ONLY)
        'id',                      // string
        'ignoreAvs',               // bool
        'ignoreAvsVis',            // bool
        'ignoreCsc',               // bool
        'ignoreCscVis',            // bool
        'inputReferenceCode',      // string
        'integrationId',           // string
        'isDebitCard',             // string
        'isRecurringPayment',      // bool
        'lastModifiedDate',        // string
        'links',                   // NsLink, [read_only]
        'location',                // Location
        'memo',                    // string
        'nexus',                   // Nexus
        'nexusOverride',           // Nexus
        'nexus_country',           // string
        'originalNexus',           // Nexus
        'originalNexusCountry',    // string
        'outputAuthCode',          // string
        'outputReferenceCode',     // string
        'payment',                 // float
        'paymentCardCsc',          // string
        'paymentMethod',           // PaymentMethod
        'paymentMethodAccount',    // string
        'paymentOperation',        // string enum(CREDIT, OVERRIDE, SALE, REFUND, AUTHENTICATION, REFRESH, VOID, CAPTURE, AUTHORIZATION)
        'paymentOption',           // NsResource
        'paymentProcessingProfile',// NsResource
        'paymentSessionAmount',    // float
        'pending',                 // float
        'pnRefNum',                // string
        'postingPeriod',           // AccountingPeriod
        'prevDate',                // string
        'refName',                 // string, [read_only]
        'refundedamounttotalbox',  // float
        'softDescriptor',          // string
        'status',                  // string enum(A, R, B, C, Y)
        'subsidiary',              // Subsidiary
        'taxAmount2Override',      // float
        'taxAmountOverride',       // float
        'taxFractionUnit',         // int
        'taxPeriod',               // TaxPeriod
        'taxRounding',             // string
        'taxRoundingLevel',        // string
        'threedStatusCode',        // string
        'threedStatusCodeVis',     // bool
        'toBeEmailed',             // bool
        'total',                   // float
        'tranDate',                // string
        'tranId',                  // string
        'transactionToRefund',     // NsResource
        'unapplied',               // float
        'undepFunds',              // bool
        'updatecurrency',          // string
        'validFrom',               // string
        'warnNexusChange',         // bool
    ];    

   /**
    * GET /customerPayment
    * 
    * @param string $q                 Search query used to filter results. (in query)
    * @param int $limit                The limit used to specify the number of results on a single page. (in query)
    * @param int $offset               The offset used for selecting a specific page of results. (in query)
    * @return string json:customerPaymentCollection - List of records
    * @response [default] nsError - Error response
    */
    public function getListOfRecords($q = null, $limit = null, $offset = null)
    {
        $parts = [];
        $path = "/customerPayment";
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
    * POST /customerPayment
    * 
    * @param $body {customerPayment}
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @response [204 No Content]  - Inserted record
    * @response [default] nsError - Error response
    */
    public function insertRecord($body, $replace = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null)
    {
        $parts = [];
        $path = "/customerPayment";
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
    * DELETE /customerPayment/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @response [204 No Content]  - Removed record
    * @response [default] nsError - Error response
    */
    public function removeRecord($id = null)
    {
        $path = "/customerPayment/$id";
        $response = $this->_makeRequest('DELETE', $path);

        return $response;
    }

   /**
    * GET /customerPayment/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @param bool $expandSubResources  Set to true to automatically expand all sublists, sublist lines and subrecords on this record. (in query)
    * @return string json:customerPayment - Retrieved record
    * @response [default] nsError - Error response
    */
    public function getRecord($id = null, $expandSubResources = null)
    {
        $parts = [];
        $path = "/customerPayment/$id";
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
    * PATCH /customerPayment/{id}
    * 
    * @param $body {customerPayment}
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
        $path = "/customerPayment/$id";
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
    * PUT /customerPayment/{id}
    * 
    * @param $body {customerPayment}
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
        $path = "/customerPayment/$id";
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
    * POST /customerPayment/{id}/!transform/customerRefund
    * 
    * @param $body {customerRefund}
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param numeric $id [Required]    Internal identifier (in path)
    * @response [204 No Content] customerRefund - Transformed record
    * @response [default] nsError - Error response
    */
    public function transformToCustomerRefund($body, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null, $replace = null, $id = null)
    {
        $parts = [];
        $path = "/customerPayment/$id/!transform/customerRefund";
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
