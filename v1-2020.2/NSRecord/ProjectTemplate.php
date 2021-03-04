<?php
class NSRecord_ProjectTemplate extends RequestAbstract
{
   /**
    * [projectTemplate]
    * This record is available as a beta record.
    *
    * @var array
    */
    public static $schema = [
        'allowAllResourcesForTasks',// bool
        'allowExpenses',           // bool
        'allowTaskTimeForRsrcAlloc',// bool
        'allowTime',               // bool
        'applyProjectExpenseTypeToAll',// bool
        'bBudgetShowCalculatedLines',// bool
        'bBudgetUseCalculatedValues',// bool
        'billingRateCard',         // BillingRateCard
        'billingSchedule',         // BillingSchedule
        'cBudgetLaborBudgetFromAlloc',// bool
        'cBudgetShowCalculatedLines',// bool
        'cBudgetUseCalculatedValues',// bool
        'calculatedWork',          // string
        'createChargeRule',        // bool
        'customForm',              // string enum(-10916, -10915, -10914, -20961, -10230, -893, -892, -410, -891, -770)
        'entityId',                // string
        'estimatedCost',           // float
        'estimatedCostJc',         // float
        'estimatedGrossProfit',    // float
        'estimatedGrossProfitPercent',// float
        'estimatedLaborCost',      // float
        'estimatedLaborRevenue',   // float
        'estimatedRevenue',        // float
        'estimatedRevenueJc',      // float
        'estimatedTimeOverride',   // string
        'externalId',              // string
        'forecastChargeRunOnDemand',// bool
        'id',                      // string
        'includeCrmTasksInTotals', // bool
        'isExemptTime',            // bool
        'isInactive',              // bool
        'isProductiveTime',        // bool
        'isUtilizedTime',          // bool
        'jobBillingType',          // string enum(FBM, STD, TM, FBI, CB)
        'jobItem',                 // ServiceItem
        'jobPrice',                // float
        'jobResources',            // ProjectTemplateJobResourcesCollection
        'limitTimeToAssignees',    // bool
        'links',                   // NsLink, [read_only]
        'materializeTime',         // bool
        'plannedWork',             // string
        'projectExpenseType',      // ProjectExpenseType
        'projectFormTemplate',     // string enum(-10916, -10915, -10914, -20961, -10230, -893, -892, -410, -891, -770)
        'projectManager',          // Customer|Partner|Vendor|NsResource|Employee|Contact
        'refName',                 // string, [read_only]
        'scheduledenddate',        // string
        'schedulingMethod',        // string enum(BACKWARD, FORWARD)
        'sourceServiceItemFromRateCard',// bool
        'startDate',               // string
        'subsidiary',              // Subsidiary
        'useAllocatedTimeForForecast',// bool
    ];    

   /**
    * GET /projectTemplate
    * 
    * @param string $q                 Search query used to filter results. (in query)
    * @param int $limit                The limit used to specify the number of results on a single page. (in query)
    * @param int $offset               The offset used for selecting a specific page of results. (in query)
    * @return string json:projectTemplateCollection - List of records 
    * @meta [default] nsError - Error response 
    */
    public function getListOfRecords($q = null, $limit = null, $offset = null)
    {
        $parts = [];
        $path = "/projectTemplate";
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
    * POST /projectTemplate
    * 
    * @param $body {projectTemplate}
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @meta [204 No Content]  - Inserted record 
    * @meta [default] nsError - Error response 
    */
    public function insertRecord($body, $replace = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null)
    {
        $parts = [];
        $path = "/projectTemplate";
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
    * DELETE /projectTemplate/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @meta [204 No Content]  - Removed record 
    * @meta [default] nsError - Error response 
    */
    public function removeRecord($id = null)
    {
        $path = "/projectTemplate/$id";
        $response = $this->_makeRequest('DELETE', $path);

        return $response;
    }

   /**
    * GET /projectTemplate/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @param bool $expandSubResources  Set to true to automatically expand all sublists, sublist lines and subrecords on this record. (in query)
    * @return string json:projectTemplate - Retrieved record 
    * @meta [default] nsError - Error response 
    */
    public function getRecord($id = null, $expandSubResources = null)
    {
        $parts = [];
        $path = "/projectTemplate/$id";
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
    * PATCH /projectTemplate/{id}
    * 
    * @param $body {projectTemplate}
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
        $path = "/projectTemplate/$id";
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
    * PUT /projectTemplate/{id}
    * 
    * @param $body {projectTemplate}
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
        $path = "/projectTemplate/$id";
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
