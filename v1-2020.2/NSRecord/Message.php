<?php
class NSRecord_Message extends RequestAbstract
{
   /**
    * [message]
    * This record is available as a beta record.
    *
    * @var array
    */
    public static $schema = [
        'activity',                // NsResource
        'activityType',            // string enum(CALL, MFGTASK, TASK, PROJECTTASK, ISSUE, SOLUTION, RSRCALLOC, EVENT, CAMPAIGN, CASE)
        'attachments',             // NsResourceCollection
        'author',                  // Customer|Partner|Vendor|NsResource|Employee|Contact
        'authorEmail',             // string
        'baseId',                  // string
        'bcc',                     // string
        'cc',                      // string
        'compose',                 // string
        'compressAttachments',     // bool
        'consolStatement',         // bool
        'contact',                 // Contact
        'dateTime',                // string
        'defaultFax',              // string
        'editSource',              // bool
        'emailPreference',         // string enum(PDF, HTML, DEFAULT)
        'emailed',                 // bool
        'entityType',              // string
        'externalId',              // string
        'faxNum',                  // string
        'hasAttachment',           // bool
        'id',                      // string
        'includeStatement',        // bool
        'includeTransaction',      // bool
        'incoming',                // bool
        'internalOnly',            // bool
        'isCaseMessage',           // bool
        'letter',                  // NsResource
        'letterType',              // string
        'links',                   // NsLink, [read_only]
        'mergeFieldsMessages',     // string
        'mergeTypesMessages',      // string
        'message',                 // string
        'messageDate',             // string
        'messageType',             // string enum(PDF, MAIL, EMAILEDREPORT, EMAIL, FAX)
        'openOnly',                // bool
        'otherRecipientsList',     // MessageOtherRecipientsListCollection
        'preview',                 // bool
        'primaryRecipient',        // Customer|Partner|Vendor|NsResource|Employee|Contact
        'printTransaction',        // bool
        'recipient',               // Customer|Partner|Vendor|NsResource|Employee|Contact
        'recipientEmail',          // string
        'recipientType',           // string
        'recipients',              // string
        'recordMerge',             // bool
        'recordName',              // string
        'recordTypeName',          // string
        'refName',                 // string, [read_only]
        'requestReadReceipt',      // bool
        'senderAddressOption',     // string
        'start_date',              // string
        'statementPreference',     // string enum(PDF, HTML, DEFAULT)
        'statement_date',          // string
        'subject',                 // string
        'subsidiary',              // Subsidiary
        'template',                // NsResource
        'templateCategory',        // NsResource
        'time',                    // string
        'to',                      // string
        'transaction',             // NsResource
        'updateTemplate',          // bool
    ];    

   /**
    * GET /message
    * 
    * @param string $q                 Search query used to filter results. (in query)
    * @param int $limit                The limit used to specify the number of results on a single page. (in query)
    * @param int $offset               The offset used for selecting a specific page of results. (in query)
    * @return string json:messageCollection - List of records 
    * @meta [default] nsError - Error response 
    */
    public function getListOfRecords($q = null, $limit = null, $offset = null)
    {
        $parts = [];
        $path = "/message";
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
    * POST /message
    * 
    * @param $body {message}
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @meta [204 No Content]  - Inserted record 
    * @meta [default] nsError - Error response 
    */
    public function insertRecord($body, $replace = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null)
    {
        $parts = [];
        $path = "/message";
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
    * DELETE /message/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @meta [204 No Content]  - Removed record 
    * @meta [default] nsError - Error response 
    */
    public function removeRecord($id = null)
    {
        $path = "/message/$id";
        $response = $this->_makeRequest('DELETE', $path);

        return $response;
    }

   /**
    * GET /message/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @param bool $expandSubResources  Set to true to automatically expand all sublists, sublist lines and subrecords on this record. (in query)
    * @return string json:message - Retrieved record 
    * @meta [default] nsError - Error response 
    */
    public function getRecord($id = null, $expandSubResources = null)
    {
        $parts = [];
        $path = "/message/$id";
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
    * PATCH /message/{id}
    * 
    * @param $body {message}
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
        $path = "/message/$id";
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
    * PUT /message/{id}
    * 
    * @param $body {message}
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
        $path = "/message/$id";
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
