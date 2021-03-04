<?php
class NSRecord_ProjectTask extends RequestAbstract
{
   /**
    * [projectTask]
    * This record is available as a beta record.
    *
    * @var array
    */
    public static $schema = [
        'actualWork',              // string
        'allocatedWork',           // string
        'assignee',                // ProjectTaskAssigneeCollection
        'bbudget',                 // ProjectTaskBbudgetCollection
        'bbudgetshowcalculatedlines',// bool
        'bbudgetusecalculatedvalues',// bool
        'calculatedwork',          // float
        'calculatedworkbaseline',  // float
        'cbudget',                 // ProjectTaskCbudgetCollection
        'cbudgetshowcalculatedlines',// bool
        'cbudgetusecalculatedvalues',// bool
        'constraintType',          // string enum(ALAP, FIXEDSTART, ASAP)
        'contact',                 // Contact
        'customForm',              // string enum(-10916, -10915, -10914, -20961, -10230, -893, -892, -410, -891, -770)
        'duration',                // string
        'endDate',                 // string
        'endDateBaseline',         // string
        'estimatedhoursatcompletion',// string
        'estimatedhourstocomplete',// string
        'estimatedwork',           // float
        'estimatedworkbaseline',   // float
        'eventId',                 // int
        'externalId',              // string
        'finishByDate',            // string
        'id',                      // string
        'insertBefore',            // ProjectTask
        'isMilestone',             // bool
        'isOnCriticalPath',        // bool
        'isSummaryTask',           // bool
        'lateEnd',                 // string
        'lateStart',               // string
        'links',                   // NsLink, [read_only]
        'message',                 // string
        'msprojoutlinenum',        // string
        'msprojpreds',             // string
        'msprojresources',         // string
        'msprojschedwork',         // string
        'msprojserviceitem',       // ServiceItem
        'msprojuid',               // string
        'nonBillableTask',         // bool
        'owner',                   // Employee
        'parent',                  // ProjectTask
        'percentCompleteByRsrcAlloc',// float
        'percentTimeComplete',     // float
        'plannedwork',             // string
        'plannedworkbaseline',     // string
        'plannedworktotal',        // string
        'predecessor',             // ProjectTaskPredecessorCollection
        'priority',                // string enum(HIGH, MEDIUM, LOW)
        'project',                 // Customer|Partner|Vendor|NsResource|Employee|Contact
        'refName',                 // string, [read_only]
        'remainingWork',           // string
        'slackMinutes',            // float
        'startDateBaseline',       // string
        'startDateTime',           // string
        'status',                  // string enum(NOTSTART, PROGRESS, COMPLETE)
        'title',                   // string
        'workassignment',          // ProjectTaskWorkassignmentCollection
    ];    

   /**
    * GET /projectTask
    * 
    * @param string $q                 Search query used to filter results. (in query)
    * @param int $limit                The limit used to specify the number of results on a single page. (in query)
    * @param int $offset               The offset used for selecting a specific page of results. (in query)
    * @return string json:projectTaskCollection - List of records 
    * @meta [default] nsError - Error response 
    */
    public function getListOfRecords($q = null, $limit = null, $offset = null)
    {
        $parts = [];
        $path = "/projectTask";
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
    * POST /projectTask
    * 
    * @param $body {projectTask}
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @meta [204 No Content]  - Inserted record 
    * @meta [default] nsError - Error response 
    */
    public function insertRecord($body, $replace = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null)
    {
        $parts = [];
        $path = "/projectTask";
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
    * DELETE /projectTask/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @meta [204 No Content]  - Removed record 
    * @meta [default] nsError - Error response 
    */
    public function removeRecord($id = null)
    {
        $path = "/projectTask/$id";
        $response = $this->_makeRequest('DELETE', $path);

        return $response;
    }

   /**
    * GET /projectTask/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @param bool $expandSubResources  Set to true to automatically expand all sublists, sublist lines and subrecords on this record. (in query)
    * @return string json:projectTask - Retrieved record 
    * @meta [default] nsError - Error response 
    */
    public function getRecord($id = null, $expandSubResources = null)
    {
        $parts = [];
        $path = "/projectTask/$id";
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
    * PATCH /projectTask/{id}
    * 
    * @param $body {projectTask}
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
        $path = "/projectTask/$id";
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
    * PUT /projectTask/{id}
    * 
    * @param $body {projectTask}
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
        $path = "/projectTask/$id";
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
