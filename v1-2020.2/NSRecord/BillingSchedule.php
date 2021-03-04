<?php
class NSRecord_BillingSchedule extends RequestAbstract
{
   /**
    * [billingSchedule]
    * This record is available as a beta record.
    *
    * @var array
    */
    public static $schema = [
        'applyToSubtotal',         // bool
        'billforactuals',          // bool
        'dayperiod',               // int
        'externalId',              // string
        'frequency',               // string enum(SEMIMONTHLY, STARTOFPERIOD, WEEKLY, QUADWEEKLY, BIENNIALLY, DAILY, NEVER, SEMIANNUALLY, ONETIME, ENDOFPERIOD)
        'id',                      // string
        'inArrears',               // bool
        'initialAmount',           // float
        'initialTerms',            // Term
        'isInactive',              // bool
        'isPublic',                // bool
        'job',                     // Job
        'links',                   // NsLink, [read_only]
        'milestone',               // BillingScheduleMilestoneCollection
        'monthdom',                // int
        'monthdow',                // string enum(1, 2, 3, 4, 5, 6, 7, -1)
        'monthdowim',              // string enum(1, 2, 3, 4, 5)
        'monthmode',               // string
        'name',                    // string
        'numberRemaining',         // int
        'recurrence',              // BillingScheduleRecurrenceCollection
        'recurrencePattern',       // string enum(FIXED_BILL_DATE, ANNIVERSARY_BILL_DATE)
        'recurrenceTerms',         // Term
        'recurrencedowmask',       // string
        'refName',                 // string, [read_only]
        'repeatEvery',             // string enum(1, 2, 3, 4, 6)
        'repeatunit',              // string
        'scheduleType',            // string enum(FBM, STD, TM, FBI, CB)
        'seriesStartDate',         // string
        'transaction',             // NsResource
        'weekfriday',              // bool
        'weekmonday',              // bool
        'weeksaturday',            // bool
        'weeksunday',              // bool
        'weekthursday',            // bool
        'weektuesday',             // bool
        'weekwednesday',           // bool
        'yeardom',                 // int
        'yeardow',                 // string enum(1, 2, 3, 4, 5, 6, 7, -1)
        'yeardowim',               // string enum(1, 2, 3, 4, 5)
        'yeardowimmonth',          // string enum(1, 2, 3, 4, 5, 6, 7, 8, 9, 10)
        'yearmode',                // string
        'yearmonth',               // string enum(1, 2, 3, 4, 5, 6, 7, 8, 9, 10)
    ];    

   /**
    * GET /billingSchedule
    * 
    * @param string $q                 Search query used to filter results. (in query)
    * @param int $limit                The limit used to specify the number of results on a single page. (in query)
    * @param int $offset               The offset used for selecting a specific page of results. (in query)
    * @return string json:billingScheduleCollection - List of records 
    * @meta [default] nsError - Error response 
    */
    public function getListOfRecords($q = null, $limit = null, $offset = null)
    {
        $parts = [];
        $path = "/billingSchedule";
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
    * POST /billingSchedule
    * 
    * @param $body {billingSchedule}
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @meta [204 No Content]  - Inserted record 
    * @meta [default] nsError - Error response 
    */
    public function insertRecord($body, $replace = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null)
    {
        $parts = [];
        $path = "/billingSchedule";
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
    * DELETE /billingSchedule/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @meta [204 No Content]  - Removed record 
    * @meta [default] nsError - Error response 
    */
    public function removeRecord($id = null)
    {
        $path = "/billingSchedule/$id";
        $response = $this->_makeRequest('DELETE', $path);

        return $response;
    }

   /**
    * GET /billingSchedule/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @param bool $expandSubResources  Set to true to automatically expand all sublists, sublist lines and subrecords on this record. (in query)
    * @return string json:billingSchedule - Retrieved record 
    * @meta [default] nsError - Error response 
    */
    public function getRecord($id = null, $expandSubResources = null)
    {
        $parts = [];
        $path = "/billingSchedule/$id";
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
    * PATCH /billingSchedule/{id}
    * 
    * @param $body {billingSchedule}
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
        $path = "/billingSchedule/$id";
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
    * PUT /billingSchedule/{id}
    * 
    * @param $body {billingSchedule}
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
        $path = "/billingSchedule/$id";
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
