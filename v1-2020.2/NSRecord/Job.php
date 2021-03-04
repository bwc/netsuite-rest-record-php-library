<?php
class NSRecord_Job extends RequestAbstract
{
   /**
    * [job]
    * This record is available as a beta record.
    *
    * @var array
    */
    public static $schema = [
        'accountNumber',           // string
        'actualTime',              // string
        'addressBook',             // JobAddressBookCollection
        'allocatedTime',           // string
        'allowAllResourcesForTasks',// bool
        'allowExpenses',           // bool
        'allowTaskTimeForRsrcAlloc',// bool
        'allowTime',               // bool
        'altName',                 // string
        'altPhone',                // string
        'alternateContact',        // string
        'applyProjectExpenseTypeToAll',// bool
        'autoName',                // bool
        'bBudget',                 // JobBBudgetCollection
        'bBudgetMonthids',         // string
        'bBudgetShowCalculatedLines',// bool
        'bBudgetUseCalculatedValues',// bool
        'billingAccount',          // BillingAccount
        'billingRateCard',         // BillingRateCard
        'billingSchedule',         // BillingSchedule
        'bulkMerge',               // JobBulkMergeCollection
        'cBudget',                 // JobCBudgetCollection
        'cBudgetLaborBudgetFromAlloc',// bool
        'cBudgetMonthids',         // string
        'cBudgetShowCalculatedLines',// bool
        'cBudgetUseCalculatedValues',// bool
        'calculatedEndDate',       // string
        'calculatedEndDateBaseline',// string
        'calculatedStartDate',     // string
        'calculatedStartDateBaseline',// string
        'calculatedWork',          // string
        'calculatedWorkBaseline',  // string
        'category',                // CustomerCategory
        'chargeAmountBilled',      // float
        'chargeAmountHoldForBilling',// float
        'chargeAmountPending',     // float
        'chargeAmountReadyForBilling',// float
        'chargeAmountRemaining',   // float
        'chargeExpenseAmount',     // float
        'chargeLaborAmount',       // float
        'comments',                // string
        'companyName',             // string
        'contact',                 // Contact
        'contactList',             // ContactCollection
        'createChargeRule',        // bool
        'creditCards',             // JobCreditCardsCollection
        'currency',                // Currency
        'currencyPrecision',       // int
        'customForm',              // string enum(-10916, -10915, -10914, -20961, -10230, -893, -892, -410, -891, -770)
        'customer',                // Customer
        'dateCreated',             // string
        'defaultAddress',          // string
        'defaultBillingAddress',   // string
        'defaultShippingAddress',  // string
        'edition',                 // string enum(XX, AU, UK, JP, US, CA)
        'email',                   // string
        'emailPreference',         // string enum(PDF, HTML, DEFAULT)
        'emailVal',                // string
        'endDate',                 // string
        'entityId',                // string
        'entityNumber',            // int
        'entityStatus',            // string
        'entityTitle',             // string
        'estimateRevRecTemplate',  // RevRecTemplate
        'estimatedLaborCostBaseLine',// float
        'estimatedTime',           // string
        'estimatedTimeOverrideBaseline',// string
        'estimatedcost',           // float
        'estimatedcostjc',         // float
        'estimatedgrossprofit',    // float
        'estimatedgrossprofitpercent',// float
        'estimatedlaborcost',      // float
        'estimatedlaborrevenue',   // float
        'estimatedrevenue',        // float
        'estimatedrevenuejc',      // float
        'estimatedtimeoverride',   // string
        'externalId',              // string
        'fax',                     // string
        'forecastChargeRunOnDemand',// bool
        'fxRate',                  // float
        'hasShippingAddress',      // bool
        'id',                      // string
        'image',                   // NsResource
        'includeCrmTasksInTotals', // bool
        'isBudgetRebuilding',      // bool
        'isExemptTime',            // bool
        'isInactive',              // bool
        'isProductiveTime',        // bool
        'isUtilizedTime',          // bool
        'jobBillingType',          // string enum(FBM, STD, TM, FBI, CB)
        'jobItem',                 // ServiceItem
        'jobPrice',                // float
        'jobResources',            // JobJobResourcesCollection
        'jobType',                 // JobType
        'language',                // string enum(ro_RO, af_ZA, tl_PH, pt_BR, th_TH, bn_BD, cs_CZ, ca_ES, hu_HU, kn_IN)
        'lastBaseLineDate',        // string
        'lastModifiedDate',        // string
        'limitTimeToAssignees',    // bool
        'links',                   // NsLink, [read_only]
        'materializeTime',         // bool
        'openingbalance',          // float
        'openingbalanceaccount',   // Account
        'openingbalancedate',      // string
        'originatingActualLine',   // string
        'originatingDoc',          // string
        'originatingItem',         // string
        'originatingLine',         // string
        'paStatement',             // JobPaStatementCollection
        'parent',                  // NsResource
        'parentSubsidiary',        // string
        'percentComplete',         // float
        'percentCompleteByRsrcAlloc',// float
        'percentCompleteOverride', // JobPercentCompleteOverrideCollection
        'percentTimeComplete',     // float
        'phone',                   // string
        'plStatement',             // JobPlStatementCollection
        'plannedwork',             // string
        'plannedworkbaseline',     // string
        'primaryContact',          // string
        'projectCompletelyBilled', // bool
        'projectExpenseType',      // ProjectExpenseType
        'projectManager',          // Customer|Partner|Vendor|NsResource|Employee|Contact
        'projectTasks_count',      // int
        'projectbudget',           // NsResource
        'projectedEndDate',        // string
        'projectedEndDateBaseline',// string
        'propagateActivity',       // bool
        'refName',                 // string, [read_only]
        'revRecForecastRule',      // NsResource
        'scheduledEndDateBaseline',// string
        'scheduledenddate',        // string
        'schedulingMethod',        // string enum(BACKWARD, FORWARD)
        'shipAddr1',               // string
        'shipAddr2',               // string
        'shipAddr3',               // string
        'shipAddressee',           // string
        'shipAttention',           // string
        'shipCity',                // string
        'shipCountry',             // string
        'shipState',               // string
        'shipZip',                 // string
        'shipping_country',        // string enum(PR, PS, PT, PW, PY, QA, AD, AE, AF, AG)
        'sourceServiceItemFromRateCard',// bool
        'startDateBaseline',       // string
        'startdate',               // string
        'subTab_bBudget',          // string
        'subTab_cBudget',          // string
        'subsidiary',              // Subsidiary
        'targetname',              // string
        'targettype',              // string
        'timeRemaining',           // string
        'timeapproval',            // string enum(1, 2, 3, 4)
        'useAllocatedTimeForForecast',// bool
        'usePercentCompleteOverride',// bool
        'userNotes',               // JobUserNotesCollection
        'wbs',                     // NsResource
        'workassignment',          // JobWorkassignmentCollection
    ];    

   /**
    * GET /job
    * 
    * @param string $q                 Search query used to filter results. (in query)
    * @param int $limit                The limit used to specify the number of results on a single page. (in query)
    * @param int $offset               The offset used for selecting a specific page of results. (in query)
    * @return string json:jobCollection - List of records 
    * @meta [default] nsError - Error response 
    */
    public function getListOfRecords($q = null, $limit = null, $offset = null)
    {
        $parts = [];
        $path = "/job";
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
    * POST /job
    * 
    * @param $body {job}
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @meta [204 No Content]  - Inserted record 
    * @meta [default] nsError - Error response 
    */
    public function insertRecord($body, $replace = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null)
    {
        $parts = [];
        $path = "/job";
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
    * DELETE /job/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @meta [204 No Content]  - Removed record 
    * @meta [default] nsError - Error response 
    */
    public function removeRecord($id = null)
    {
        $path = "/job/$id";
        $response = $this->_makeRequest('DELETE', $path);

        return $response;
    }

   /**
    * GET /job/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @param bool $expandSubResources  Set to true to automatically expand all sublists, sublist lines and subrecords on this record. (in query)
    * @return string json:job - Retrieved record 
    * @meta [default] nsError - Error response 
    */
    public function getRecord($id = null, $expandSubResources = null)
    {
        $parts = [];
        $path = "/job/$id";
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
    * PATCH /job/{id}
    * 
    * @param $body {job}
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
        $path = "/job/$id";
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
    * PUT /job/{id}
    * 
    * @param $body {job}
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
        $path = "/job/$id";
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
    * POST /job/{id}/!transform/cashSale
    * 
    * @param $body {cashSale}
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param numeric $id [Required]    Internal identifier (in path)
    * @meta [204 No Content] cashSale - Transformed record 
    * @meta [default] nsError - Error response 
    */
    public function transformToCashSale($body, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null, $replace = null, $id = null)
    {
        $parts = [];
        $path = "/job/$id/!transform/cashSale";
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
    * POST /job/{id}/!transform/estimate
    * 
    * @param $body {estimate}
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param numeric $id [Required]    Internal identifier (in path)
    * @meta [204 No Content] estimate - Transformed record 
    * @meta [default] nsError - Error response 
    */
    public function transformToEstimate($body, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null, $replace = null, $id = null)
    {
        $parts = [];
        $path = "/job/$id/!transform/estimate";
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
    * POST /job/{id}/!transform/invoice
    * 
    * @param $body {invoice}
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param numeric $id [Required]    Internal identifier (in path)
    * @meta [204 No Content] invoice - Transformed record 
    * @meta [default] nsError - Error response 
    */
    public function transformToInvoice($body, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null, $replace = null, $id = null)
    {
        $parts = [];
        $path = "/job/$id/!transform/invoice";
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
    * POST /job/{id}/!transform/salesOrder
    * 
    * @param $body {salesOrder}
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param numeric $id [Required]    Internal identifier (in path)
    * @meta [204 No Content] salesOrder - Transformed record 
    * @meta [default] nsError - Error response 
    */
    public function transformToSalesOrder($body, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null, $replace = null, $id = null)
    {
        $parts = [];
        $path = "/job/$id/!transform/salesOrder";
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
