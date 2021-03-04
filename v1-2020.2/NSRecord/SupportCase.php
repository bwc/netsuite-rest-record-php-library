<?php
class NSRecord_SupportCase extends RequestAbstract
{
   /**
    * [supportCase]
    * This record is available as a beta record.
    *
    * @var array
    */
    public static $schema = [
        'assigned',                // Employee
        'autoName',                // bool
        'caseNumber',              // string
        'category',                // NsResource
        'company',                 // Customer|Partner|Vendor|NsResource|Employee|Contact
        'companyId',               // int
        'companyName',             // string
        'contact',                 // Contact
        'contactId',               // int
        'createdDate',             // string
        'customForm',              // string enum(-10916, -10915, -10914, -20961, -10230, -893, -892, -410, -891, -770)
        'dateCreated',             // string
        'email',                   // string
        'emailEmployees',          // string
        'emailForm',               // bool
        'endDate',                 // string
        'escalateHist',            // SupportCaseEscalateHistCollection
        'escalateTo',              // CustomerCollection|PartnerCollection|VendorCollection|NsResourceCollection|EmployeeCollection|ContactCollection
        'escalationMessage',       // string
        'eventNumber',             // int
        'externalId',              // string
        'firstIssueAttached',      // string
        'firstIssueRemoved',       // string
        'firstUpdated',            // string
        'helpDesk',                // bool
        'htmlMessage',             // bool
        'id',                      // string
        'inboundEmail',            // string
        'incomingMessage',         // string
        'initialResponseTime',     // string
        'internalOnly',            // bool
        'isInactive',              // bool
        'issue',                   // NsResource
        'issues',                  // IssueCollection
        'item',                    // InventoryItem|ServiceItem|OtherChargeItem|AssemblyItem|KitItem|NsResource|DiscountItem|MarkupItem|SubtotalItem|DescriptionItem|PaymentItem|SalesTaxItem|TaxGroup|ShipItem|DownloadItem|GiftCertificateItem|SubscriptionPlan|NonInventorySaleItem|NonInventoryResaleItem|NonInventoryPurchaseItem
        'lastCustomerMessageReceived',// string
        'lastIssueAttached',       // string
        'lastIssueRemoved',        // string
        'lastMessageDate',         // string
        'lastModifiedDate',        // string
        'lastReopenedDate',        // string
        'links',                   // NsLink, [read_only]
        'mediaItem',               // NsResourceCollection
        'messageNew',              // bool
        'messageSave',             // string
        'module',                  // string
        'origcaseNumber',          // string
        'origin',                  // NsResource
        'outgoingMessage',         // string
        'phone',                   // string
        'priority',                // NsResource
        'product',                 // IssueProduct
        'profile',                 // NsResource
        'quickNote',               // string
        'refName',                 // string, [read_only]
        'serialNumber',            // InventoryNumber
        'solutions',               // SolutionCollection
        'spamLock',                // string
        'stage',                   // string
        'startDate',               // string
        'startTime',               // string
        'status',                  // NsResource
        'subsidiary',              // Subsidiary
        'supportFirstReply',       // string
        'timeElapsed',             // string
        'timeItem',                // string
        'timeOnHold',              // string
        'timeOpen',                // string
        'timeToAssign',            // string
        'timeToClose',             // string
        'title',                   // string
        'transactionId',           // string
        'useEmployeeTemplate',     // bool
        'userNotes',               // SupportCaseUserNotesCollection
        'version',                 // string
    ];    

   /**
    * GET /supportCase
    * 
    * @param string $q                 Search query used to filter results. (in query)
    * @param int $limit                The limit used to specify the number of results on a single page. (in query)
    * @param int $offset               The offset used for selecting a specific page of results. (in query)
    * @return string json:supportCaseCollection - List of records 
    * @meta [default] nsError - Error response 
    */
    public function getListOfRecords($q = null, $limit = null, $offset = null)
    {
        $parts = [];
        $path = "/supportCase";
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
    * POST /supportCase
    * 
    * @param $body {supportCase}
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @meta [204 No Content]  - Inserted record 
    * @meta [default] nsError - Error response 
    */
    public function insertRecord($body, $replace = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null)
    {
        $parts = [];
        $path = "/supportCase";
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
    * DELETE /supportCase/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @meta [204 No Content]  - Removed record 
    * @meta [default] nsError - Error response 
    */
    public function removeRecord($id = null)
    {
        $path = "/supportCase/$id";
        $response = $this->_makeRequest('DELETE', $path);

        return $response;
    }

   /**
    * GET /supportCase/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @param bool $expandSubResources  Set to true to automatically expand all sublists, sublist lines and subrecords on this record. (in query)
    * @return string json:supportCase - Retrieved record 
    * @meta [default] nsError - Error response 
    */
    public function getRecord($id = null, $expandSubResources = null)
    {
        $parts = [];
        $path = "/supportCase/$id";
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
    * PATCH /supportCase/{id}
    * 
    * @param $body {supportCase}
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
        $path = "/supportCase/$id";
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
    * PUT /supportCase/{id}
    * 
    * @param $body {supportCase}
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
        $path = "/supportCase/$id";
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
