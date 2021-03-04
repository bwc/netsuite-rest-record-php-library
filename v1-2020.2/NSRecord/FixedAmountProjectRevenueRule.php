<?php
class NSRecord_FixedAmountProjectRevenueRule extends RequestAbstract
{
   /**
    * [fixedAmountProjectRevenueRule]
    * This record is available as a beta record.
    *
    * @var array
    */
    public static $schema = [
        '_day_mode',               // string
        '_day_period',             // string
        '_frequency',              // string
        '_month_dom',              // string
        '_month_dom_period',       // string
        '_month_dow',              // string
        '_month_dowim',            // string
        '_month_dowim_period',     // string
        '_month_mode',             // string
        '_week_dow_1',             // string
        '_week_dow_2',             // string
        '_week_dow_3',             // string
        '_week_dow_4',             // string
        '_week_dow_5',             // string
        '_week_dow_6',             // string
        '_week_dow_7',             // string
        '_week_period',            // string
        '_year_dom',               // string
        '_year_dow',               // string
        '_year_dowim',             // string
        '_year_dowim_month',       // string
        '_year_mode',              // string
        '_year_month',             // string
        'amountLeftToRecognize',   // float
        'chargeRule',              // FixedAmountProjectRevenueRuleChargeRuleCollection
        'customForm',              // string enum(-10916, -10915, -10914, -20961, -10230, -893, -892, -410, -891, -770)
        'datesFixedAmount',        // FixedAmountProjectRevenueRuleDatesFixedAmountCollection
        'datesPctFromTotal',       // FixedAmountProjectRevenueRuleDatesPctFromTotalCollection
        'description',             // string
        'endbydate',               // string
        'exclusiondate',           // string
        'externalId',              // string
        'fixedAmountType',         // string enum(FIXED_AMOUNT, PERCENT_FROM_TOTAL)
        'fixedScheduleType',       // string enum(RECURRENCE, DATES, TASKS)
        'frequency',               // string
        'id',                      // string
        'isInactive',              // bool
        'links',                   // NsLink, [read_only]
        'name',                    // string
        'noenddate',               // string
        'period',                  // string
        'project',                 // Job
        'r1',                      // string
        'r2',                      // string
        'rawhtml',                 // string
        'recognizedAmountSoFar',   // float
        'recurrencedow',           // string
        'recurrencedowim',         // string
        'recurrencedowmask',       // string
        'refName',                 // string, [read_only]
        'revenueReconciled',       // bool
        'row1spacer',              // string
        'row2spacer',              // string
        'seriesstartdate',         // string
        'serviceItem',             // ServiceItem
        'tasksFixedAmount',        // FixedAmountProjectRevenueRuleTasksFixedAmountCollection
        'tasksPctFromTotal',       // FixedAmountProjectRevenueRuleTasksPctFromTotalCollection
        'totalAmountToRecognize',  // float
    ];    

   /**
    * GET /fixedAmountProjectRevenueRule
    * 
    * @param string $q                 Search query used to filter results. (in query)
    * @param int $limit                The limit used to specify the number of results on a single page. (in query)
    * @param int $offset               The offset used for selecting a specific page of results. (in query)
    * @return string json:fixedAmountProjectRevenueRuleCollection - List of records 
    * @meta [default] nsError - Error response 
    */
    public function getListOfRecords($q = null, $limit = null, $offset = null)
    {
        $parts = [];
        $path = "/fixedAmountProjectRevenueRule";
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
    * POST /fixedAmountProjectRevenueRule
    * 
    * @param $body {fixedAmountProjectRevenueRule}
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @meta [204 No Content]  - Inserted record 
    * @meta [default] nsError - Error response 
    */
    public function insertRecord($body, $replace = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null)
    {
        $parts = [];
        $path = "/fixedAmountProjectRevenueRule";
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
    * DELETE /fixedAmountProjectRevenueRule/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @meta [204 No Content]  - Removed record 
    * @meta [default] nsError - Error response 
    */
    public function removeRecord($id = null)
    {
        $path = "/fixedAmountProjectRevenueRule/$id";
        $response = $this->_makeRequest('DELETE', $path);

        return $response;
    }

   /**
    * GET /fixedAmountProjectRevenueRule/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @param bool $expandSubResources  Set to true to automatically expand all sublists, sublist lines and subrecords on this record. (in query)
    * @return string json:fixedAmountProjectRevenueRule - Retrieved record 
    * @meta [default] nsError - Error response 
    */
    public function getRecord($id = null, $expandSubResources = null)
    {
        $parts = [];
        $path = "/fixedAmountProjectRevenueRule/$id";
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
    * PATCH /fixedAmountProjectRevenueRule/{id}
    * 
    * @param $body {fixedAmountProjectRevenueRule}
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
        $path = "/fixedAmountProjectRevenueRule/$id";
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
    * PUT /fixedAmountProjectRevenueRule/{id}
    * 
    * @param $body {fixedAmountProjectRevenueRule}
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
        $path = "/fixedAmountProjectRevenueRule/$id";
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
