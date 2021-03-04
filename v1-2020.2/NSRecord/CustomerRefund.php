<?php
class NSRecord_CustomerRefund extends RequestAbstract
{
   /**
    * [customerRefund]
    * This record is available as a beta record.
    *
    * @var array
    */
    public static $schema = [
        'account',                 // Account
        'accountingBookDetail',    // CustomerRefundAccountingBookDetailCollection
        'address',                 // string
        'apply',                   // CustomerRefundApplyCollection
        'aracct',                  // Account
        'balance',                 // float
        'cardSwipe',               // string
        'cardholderAuthentication',// CardholderAuthentication
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
        'checkNum',                // string
        'checkNumber',             // string
        'class',                   // Classification
        'consolidateBalance',      // float
        'createdDate',             // string
        'creditCard',              // NsResource
        'creditCardProcessor',     // NsResource
        'currency',                // Currency
        'currencyName',            // string
        'currencyPrecision',       // int
        'currencysymbol',          // string
        'customForm',              // string enum(88, 89, -9960, 90, 91, -9965, 92, -9966, 93, -9967)
        'customer',                // NsResource
        'customerCode',            // string
        'customerPaymentAuthorization',// CustomerPaymentAuthorization
        'debitCardIssueNo',        // string
        'debitKsn',                // string
        'debitPinBlock',           // string
        'department',              // Department
        'deposit',                 // CustomerRefundDepositCollection
        'dynamicDescriptor',       // string
        'entityNexus',             // Nexus
        'entity_nexus_country',    // string
        'entityfieldname',         // string
        'exchangeRate',            // float
        'excludeFromGLNumbering',  // bool
        'externalId',              // string
        'handlingMode',            // string enum(MIMIC, PROCESS, SAVE_ONLY)
        'id',                      // string
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
        'payeeaddress',            // CustomerRefundPayeeaddress
        'payeeaddress_text',       // string
        'payeeaddresslist',        // NsResource
        'paymentCardCsc',          // string
        'paymentMethod',           // PaymentMethod
        'paymentMethodAccount',    // string
        'paymentOperation',        // string enum(CREDIT, OVERRIDE, SALE, REFUND, AUTHENTICATION, REFRESH, VOID, CAPTURE, AUTHORIZATION)
        'paymentOption',           // NsResource
        'paymentProcessingProfile',// NsResource
        'paymentSessionAmount',    // float
        'pnRefNum',                // string
        'postingPeriod',           // AccountingPeriod
        'prevDate',                // string
        'refName',                 // string, [read_only]
        'softDescriptor',          // string
        'status',                  // string enum(R, V, Y)
        'subsidiary',              // Subsidiary
        'taxAmount2Override',      // float
        'taxAmountOverride',       // float
        'taxFractionUnit',         // int
        'taxPeriod',               // TaxPeriod
        'taxRounding',             // string
        'taxRoundingLevel',        // string
        'toBePrinted',             // bool
        'total',                   // float
        'tranDate',                // string
        'tranId',                  // string
        'transactionToRefund',     // NsResource
        'updatecurrency',          // string
        'validFrom',               // string
        'voidjournal',             // NsResource
        'warnNexusChange',         // bool
    ];    

   /**
    * GET /customerRefund
    * 
    * @param string $q                 Search query used to filter results. (in query)
    * @param int $limit                The limit used to specify the number of results on a single page. (in query)
    * @param int $offset               The offset used for selecting a specific page of results. (in query)
    * @return string json:customerRefundCollection - List of records 
    * @meta [default] nsError - Error response 
    */
    public function getListOfRecords($q = null, $limit = null, $offset = null)
    {
        $parts = [];
        $path = "/customerRefund";
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
    * POST /customerRefund
    * 
    * @param $body {customerRefund}
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @meta [204 No Content]  - Inserted record 
    * @meta [default] nsError - Error response 
    */
    public function insertRecord($body, $replace = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null)
    {
        $parts = [];
        $path = "/customerRefund";
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
    * DELETE /customerRefund/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @meta [204 No Content]  - Removed record 
    * @meta [default] nsError - Error response 
    */
    public function removeRecord($id = null)
    {
        $path = "/customerRefund/$id";
        $response = $this->_makeRequest('DELETE', $path);

        return $response;
    }

   /**
    * GET /customerRefund/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @param bool $expandSubResources  Set to true to automatically expand all sublists, sublist lines and subrecords on this record. (in query)
    * @return string json:customerRefund - Retrieved record 
    * @meta [default] nsError - Error response 
    */
    public function getRecord($id = null, $expandSubResources = null)
    {
        $parts = [];
        $path = "/customerRefund/$id";
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
    * PATCH /customerRefund/{id}
    * 
    * @param $body {customerRefund}
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
        $path = "/customerRefund/$id";
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
    * PUT /customerRefund/{id}
    * 
    * @param $body {customerRefund}
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
        $path = "/customerRefund/$id";
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
