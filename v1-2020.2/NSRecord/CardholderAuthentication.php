<?php
class NSRecord_CardholderAuthentication extends RequestAbstract
{
   /**
    * [cardholderAuthentication]
    * This record is available as a beta record.
    *
    * @var array
    */
    public static $schema = [
        'acceptHeader',            // string
        'amount',                  // float
        'authenticateDeviceFormAction',// string
        'authenticateDeviceFormId',// string
        'authenticateDeviceInputs',// CardholderAuthenticationAuthenticateDeviceInputsCollection
        'authenticateDeviceResults',// CardholderAuthenticationAuthenticateDeviceResultsCollection
        'authenticationFields',    // CardholderAuthenticationAuthenticationFieldsCollection
        'billingAddress',          // CardholderAuthenticationBillingAddress
        'cardholderAuthenticationEvents',// CardholderAuthenticationCardholderAuthenticationEventsCollection
        'cavv',                    // string
        'challengeShopperFormAction',// string
        'challengeShopperFormId',  // string
        'challengeShopperInputs',  // CardholderAuthenticationChallengeShopperInputsCollection
        'challengeShopperResults', // CardholderAuthenticationChallengeShopperResultsCollection
        'challengeWindowSize',     // string enum(01, 02, 03, 04, 05)
        'currency',                // Currency
        'eci',                     // string enum(00, 01, 02, 05, 06, 07)
        'entity',                  // Customer
        'externalId',              // string
        'handlingMode',            // string enum(MIMIC, PROCESS, SAVE_ONLY)
        'id',                      // string
        'ipAddress',               // string
        'links',                   // NsLink, [read_only]
        'notificationUrl',         // string
        'paymentCardCsc',          // string
        'paymentMethod',           // string
        'paymentOption',           // NsResource
        'paymentProcessingProfile',// NsResource
        'refName',                 // string, [read_only]
        'shippingAddress',         // CardholderAuthenticationShippingAddress
        'status',                  // string enum(CANCELLED, RETURN_FROM_SHOPPER_CHALLENGE, AUTHENTICATED, NOT_REQUIRED, WAITING_FOR_DEVICE_AUTHENTICATION, WAITING_FOR_INITIAL_PROCESS, RETURN_FROM_DEVICE_AUTHENTICATION, WAITING_FOR_SHOPPER_CHALLENGE)
        'subsidiary',              // Subsidiary
        'threeDSTranStatusReason', // string enum(22, 01, 23, 02, 24, 03, 25, 04, 26, 05)
        'threeDSTransactionId',    // string
        'threeDSVersion',          // string enum(2.1.0, 2.2.0, 1.0.2)
        'userAgent',               // string
    ];    

   /**
    * GET /cardholderAuthentication
    * 
    * @param string $q                 Search query used to filter results. (in query)
    * @param int $limit                The limit used to specify the number of results on a single page. (in query)
    * @param int $offset               The offset used for selecting a specific page of results. (in query)
    * @return string json:cardholderAuthenticationCollection - List of records 
    * @meta [default] nsError - Error response 
    */
    public function getListOfRecords($q = null, $limit = null, $offset = null)
    {
        $parts = [];
        $path = "/cardholderAuthentication";
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
    * POST /cardholderAuthentication
    * 
    * @param $body {cardholderAuthentication}
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @meta [204 No Content]  - Inserted record 
    * @meta [default] nsError - Error response 
    */
    public function insertRecord($body, $replace = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null)
    {
        $parts = [];
        $path = "/cardholderAuthentication";
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
    * DELETE /cardholderAuthentication/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @meta [204 No Content]  - Removed record 
    * @meta [default] nsError - Error response 
    */
    public function removeRecord($id = null)
    {
        $path = "/cardholderAuthentication/$id";
        $response = $this->_makeRequest('DELETE', $path);

        return $response;
    }

   /**
    * GET /cardholderAuthentication/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @param bool $expandSubResources  Set to true to automatically expand all sublists, sublist lines and subrecords on this record. (in query)
    * @return string json:cardholderAuthentication - Retrieved record 
    * @meta [default] nsError - Error response 
    */
    public function getRecord($id = null, $expandSubResources = null)
    {
        $parts = [];
        $path = "/cardholderAuthentication/$id";
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
    * PATCH /cardholderAuthentication/{id}
    * 
    * @param $body {cardholderAuthentication}
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
        $path = "/cardholderAuthentication/$id";
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
    * PUT /cardholderAuthentication/{id}
    * 
    * @param $body {cardholderAuthentication}
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
        $path = "/cardholderAuthentication/$id";
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
