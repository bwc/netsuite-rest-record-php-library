<?php
class NSRecord_RevenuePlan extends RequestAbstract
{
   /**
    * [revenuePlan]
    * This record is available as a beta record.
    *
    * @var array
    */
    public static $schema = [
        'accountingBook',          // AccountingBook
        'allocatedcontractcostamount',// float
        'amount',                  // float
        'amountSource',            // string enum(EVENT_AMOUNT, EVENT_PCT_COMPLETE, TRANSACTION_LINE_AMOUNT, EVENT_PCT_BASED_ON_AMOUNT, EVENT_PCT_BASED_ON_QUANTITY)
        'amountSourceKey',         // string
        'catchupPeriod',           // AccountingPeriod
        'comments',                // string
        'createPlansOnType',       // string
        'createdFrom',             // NsResource
        'creationTriggeredBy',     // string
        'creationTriggeredByDisplay',// string
        'customForm',              // string enum(-10916, -10915, -10914, -20961, -10230, -893, -892, -410, -891, -770)
        'defaultCatchup',          // string
        'endDateChangeImpact',     // string enum(UPDATE_ALL_PERIODS, UPDATE_REMAINING_PERIODS_ONLY)
        'endDateChangeImpactForDisplay',// string enum(UPDATE_ALL_PERIODS, UPDATE_REMAINING_PERIODS_ONLY)
        'exchangeRate',            // float
        'externalId',              // string
        'holdRevenueRecognition',  // bool
        'id',                      // string
        'initialAmount',           // float
        'isEliminate',             // bool
        'isPercentComplete',       // bool
        'item',                    // InventoryItem|ServiceItem|OtherChargeItem|AssemblyItem|KitItem|NsResource|DiscountItem|MarkupItem|SubtotalItem|DescriptionItem|PaymentItem|SalesTaxItem|TaxGroup|ShipItem|DownloadItem|GiftCertificateItem|SubscriptionPlan|NonInventorySaleItem|NonInventoryResaleItem|NonInventoryPurchaseItem
        'itemlaborcostamount',     // float
        'itemresalecostamount',    // float
        'links',                   // NsLink, [read_only]
        'parentLineCurrency',      // string
        'periodOffset',            // int
        'planHasStarted',          // string
        'plannedExpense',          // RevenuePlanPlannedExpenseCollection
        'plannedRevenue',          // RevenuePlanPlannedRevenueCollection
        'plannedRevenueVersion',   // RevenuePlanPlannedRevenueVersionCollection
        'recalcAdjustPeriodOffset',// int
        'recognitionMethod',       // string enum(DATESPRORATE, EVENPERIODSPRORATE, CUSTOM, DATESINTOPERIODS, EVENPRORATEPERIOD)
        'recognitionMethodKey',    // string
        'recognitionPeriod',       // int
        'recordNumber',            // string
        'refName',                 // string, [read_only]
        'reforecastMethod',        // string enum(NEXT_PERIOD, REMAINING_PERIODS, LAST_PERIOD, MANUAL)
        'remainingDeferredBalance',// float
        'remainingdeferredcostbalance',// float
        'revRecEndDate',           // string
        'revRecEndDateSource',     // string enum(RECOGNITION_PERIOD, SOURCE_DATE, EVENT_DATE, REVENUE_ELEMENT_START_DATE, EVENT_END_DATE, EVENT_START_DATE, ARRANGEMENT_TRANSACTION_DATE, TRANSACTION_LINE_END_DATE, REVENUE_ELEMENT_END_DATE, REV_TERM_IN_DAYS)
        'revRecStartDate',         // string
        'revRecStartDateSource',   // string enum(RECOGNITION_PERIOD, SOURCE_DATE, EVENT_DATE, REVENUE_ELEMENT_START_DATE, EVENT_END_DATE, EVENT_START_DATE, ARRANGEMENT_TRANSACTION_DATE, TRANSACTION_LINE_END_DATE, REVENUE_ELEMENT_END_DATE, REV_TERM_IN_DAYS)
        'revenueElement',          // string
        'revenuePlanCurrency',     // string
        'revenuePlanType',         // string enum(FORECAST, ACTUAL)
        'revenueRecognitionRule',  // NsResource
        'revenueScheduleKey',      // string
        'startOffset',             // int
        'status',                  // string enum(COMPLETED, ONHOLD, NOTSTARTED, PLANFAILED, INPROGRESS)
        'statusForDisplay',        // string enum(COMPLETED, ONHOLD, NOTSTARTED, PLANFAILED, INPROGRESS)
        'termInDays',              // int
        'termInMonths',            // int
        'totalRecognized',         // float
        'totalamortized',          // float
    ];    

   /**
    * GET /revenuePlan
    * 
    * @param string $q                 Search query used to filter results. (in query)
    * @param int $limit                The limit used to specify the number of results on a single page. (in query)
    * @param int $offset               The offset used for selecting a specific page of results. (in query)
    * @return string json:revenuePlanCollection - List of records 
    * @meta [default] nsError - Error response 
    */
    public function getListOfRecords($q = null, $limit = null, $offset = null)
    {
        $parts = [];
        $path = "/revenuePlan";
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
    * POST /revenuePlan
    * 
    * @param $body {revenuePlan}
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @meta [204 No Content]  - Inserted record 
    * @meta [default] nsError - Error response 
    */
    public function insertRecord($body, $replace = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null)
    {
        $parts = [];
        $path = "/revenuePlan";
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
    * DELETE /revenuePlan/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @meta [204 No Content]  - Removed record 
    * @meta [default] nsError - Error response 
    */
    public function removeRecord($id = null)
    {
        $path = "/revenuePlan/$id";
        $response = $this->_makeRequest('DELETE', $path);

        return $response;
    }

   /**
    * GET /revenuePlan/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @param bool $expandSubResources  Set to true to automatically expand all sublists, sublist lines and subrecords on this record. (in query)
    * @return string json:revenuePlan - Retrieved record 
    * @meta [default] nsError - Error response 
    */
    public function getRecord($id = null, $expandSubResources = null)
    {
        $parts = [];
        $path = "/revenuePlan/$id";
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
    * PATCH /revenuePlan/{id}
    * 
    * @param $body {revenuePlan}
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
        $path = "/revenuePlan/$id";
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
    * PUT /revenuePlan/{id}
    * 
    * @param $body {revenuePlan}
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
        $path = "/revenuePlan/$id";
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
