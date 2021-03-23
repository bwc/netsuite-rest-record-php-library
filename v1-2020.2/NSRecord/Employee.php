<?php
class NSRecord_Employee extends RequestAbstract
{
   /**
    * [employee]
    * This record is available as a beta record.
    *
    * @var array
    */
    public static $schema = [
        'accountNumber',           // string
        'accruedtime',             // EmployeeAccruedtimeCollection
        'addressBook',             // EmployeeAddressBookCollection
        'adpid',                   // string
        'adpwarning',              // string
        'aliennumber',             // string
        'altName',                 // string
        'approvallimit',           // float
        'approver',                // Employee
        'authworkdate',            // string
        'autoName',                // bool
        'basewage',                // float
        'basewagetype',            // string enum(annualsalary, hourly, monthlysalary)
        'billingClass',            // BillingClass
        'birthdate',               // string
        'bonustarget',             // float
        'bonustargetcomment',      // string
        'bonustargetpayfrequency', // string enum(one_time, annually, monthly, quarterly)
        'bonustargettype',         // string enum(percentage, amount)
        'btemplate',               // string
        'bulkMerge',               // EmployeeBulkMergeCollection
        'campaigns',               // EmployeeCampaignsCollection
        'changedetails',           // string
        'class',                   // Classification
        'comments',                // string
        'commissionpaymentpreference',// string enum(AP, PAYROLL)
        'companycontribution',     // EmployeeCompanycontributionCollection
        'concurrentwebservicesuser',// bool
        'conflictresults',         // string
        'corporatecards',          // EmployeeCorporatecardsCollection
        'currency',                // Currency
        'currencylist',            // EmployeeCurrencylistCollection
        'customForm',              // string enum(-10916, -10915, -10914, -20961, -10230, -893, -892, -410, -891, -770)
        'dateCreated',             // string
        'deduction',               // EmployeeDeductionCollection
        'defaultAddress',          // string
        'defaultBillingAddress',   // string
        'defaultJobResourceRole',  // NsResource
        'defaultShippingAddress',  // string
        'defaultacctcorpcardexp',  // Account
        'defaultexpensereportcurrency',// Currency
        'department',              // Department
        'directdeposit',           // bool
        'directdepositlist',       // EmployeeDirectdepositlistCollection
        'driverslicensenumber',    // string
        'earning',                 // EmployeeEarningCollection
        'edition',                 // string enum(XX, AU, UK, JP, US, CA)
        'effectivedatemode',       // string enum(PAST, CURRENT, FUTURE)
        'eligibleforcommission',   // bool
        'email',                   // string
        'emailVal',                // string
        'emergencycontact',        // EmployeeEmergencycontactCollection
        'empcenterqty',            // string
        'empcenterqtymax',         // string
        'employeecertificate',     // bool
        'employeechangereason',    // NsResource
        'employeeftestatus',       // string enum(NOT_APPLICABLE, NOT_ASSIGNED, UNDER_ALLOCATED, FULLY_ALLOCATED, OVER_ALLOCATED)
        'employeestatus',          // NsResource
        'employeetype',            // NsResource
        'empperms',                // EmployeeEmppermsCollection
        'emptaxoptions',           // EmployeeEmptaxoptionsCollection
        'entityId',                // string
        'entityNumber',            // int
        'entityTitle',             // string
        'ethnicity',               // NsResource
        'expenselimit',            // float
        'externalId',              // string
        'fax',                     // string
        'firstName',               // string
        'fulluserqty',             // string
        'fulluserqtymax',          // string
        'gender',                  // string enum(b, m, f)
        'giveAccess',              // bool
        'globalSubscriptionStatus',// string enum(1, 2, 3, 4)
        'hasShippingAddress',      // bool
        'hcmposition',             // EmployeeHcmpositionCollection
        'hiredate',                // string
        'homePhone',               // string
        'hreducation',             // EmployeeHreducationCollection
        'i9verified',              // bool
        'id',                      // string
        'image',                   // NsResource
        'inheritiprules',          // bool
        'initials',                // string
        'ipaddressrule',           // string
        'isInactive',              // bool
        'isJobManager',            // bool
        'isJobResource',           // bool
        'isempcenterqtyenforced',  // string
        'isfulluserqtyenforced',   // string
        'isretailuserqtyenforced', // string
        'issalesrep',              // bool
        'issupportrep',            // bool
        'job',                     // NsResource
        'jobdescription',          // string
        'jobemploymentcategory',   // string enum(-10, -11)
        'jobid',                   // string
        'jurisdictioncounty',      // string enum(359522B29141429D9D0AD5F5D2C4A70C, 294689854D6F438792BBD81B078635DD, 67CE28BFBD684E42832242C5E08A9535, 90F275170D6A4096AE97FD957F4537DA, 84ED26FAC74F93A038E7B30B7CF04CTJ, BE436B3FD397402AA54C1EC60CBD3516, 7B8DCB673A914E8599927E5752533533, CE932A55D2374746B4A53361D59DC55C, 02F1C79052A6446B90560C6012342F0A, B778F8B5CAF040AC9AEAB2A262A84215)
        'jurisdictionfederal',     // string enum(359522B29141429D9D0AD5F5D2C4A70C, 294689854D6F438792BBD81B078635DD, 67CE28BFBD684E42832242C5E08A9535, 90F275170D6A4096AE97FD957F4537DA, 84ED26FAC74F93A038E7B30B7CF04CTJ, BE436B3FD397402AA54C1EC60CBD3516, 7B8DCB673A914E8599927E5752533533, CE932A55D2374746B4A53361D59DC55C, 02F1C79052A6446B90560C6012342F0A, B778F8B5CAF040AC9AEAB2A262A84215)
        'jurisdictionhist',        // EmployeeJurisdictionhistCollection
        'jurisdictionlocal',       // string enum(359522B29141429D9D0AD5F5D2C4A70C, 294689854D6F438792BBD81B078635DD, 67CE28BFBD684E42832242C5E08A9535, 90F275170D6A4096AE97FD957F4537DA, 84ED26FAC74F93A038E7B30B7CF04CTJ, BE436B3FD397402AA54C1EC60CBD3516, 7B8DCB673A914E8599927E5752533533, CE932A55D2374746B4A53361D59DC55C, 02F1C79052A6446B90560C6012342F0A, B778F8B5CAF040AC9AEAB2A262A84215)
        'jurisdictionschool',      // string enum(359522B29141429D9D0AD5F5D2C4A70C, 294689854D6F438792BBD81B078635DD, 67CE28BFBD684E42832242C5E08A9535, 90F275170D6A4096AE97FD957F4537DA, 84ED26FAC74F93A038E7B30B7CF04CTJ, BE436B3FD397402AA54C1EC60CBD3516, 7B8DCB673A914E8599927E5752533533, CE932A55D2374746B4A53361D59DC55C, 02F1C79052A6446B90560C6012342F0A, B778F8B5CAF040AC9AEAB2A262A84215)
        'jurisdictionstate',       // string enum(359522B29141429D9D0AD5F5D2C4A70C, 294689854D6F438792BBD81B078635DD, 67CE28BFBD684E42832242C5E08A9535, 90F275170D6A4096AE97FD957F4537DA, 84ED26FAC74F93A038E7B30B7CF04CTJ, BE436B3FD397402AA54C1EC60CBD3516, 7B8DCB673A914E8599927E5752533533, CE932A55D2374746B4A53361D59DC55C, 02F1C79052A6446B90560C6012342F0A, B778F8B5CAF040AC9AEAB2A262A84215)
        'laborCost',               // float
        'lastModifiedDate',        // string
        'lastName',                // string
        'lastpaiddate',            // string
        'lastreviewdate',          // string
        'links',                   // NsLink, [read_only]
        'location',                // Location
        'maritalstatus',           // NsResource
        'middleName',              // string
        'mobilePhone',             // string
        'nextreviewdate',          // string
        'officePhone',             // string
        'passportnumber',          // string
        'payfrequency',            // string enum(SEMIMONTHLY, STARTOFPERIOD, WEEKLY, QUADWEEKLY, BIENNIALLY, DAILY, NEVER, SEMIANNUALLY, ONETIME, ENDOFPERIOD)
        'phone',                   // string
        'phoneticName',            // string
        'purchaseorderapprovallimit',// float
        'purchaseorderapprover',   // Employee
        'purchaseorderlimit',      // float
        'rate',                    // float
        'rates',                   // EmployeeRatesCollection
        'refName',                 // string, [read_only]
        'releasedate',             // string
        'requirePwdChange',        // bool
        'residentstatus',          // NsResource
        'retailuserqty',           // string
        'retailuserqtymax',        // string
        'roles',                   // EmployeeRolesCollection
        'salesrole',               // SalesRole
        'salutation',              // string
        'sendEmail',               // bool
        'shipAddr1',               // string
        'shipAddr2',               // string
        'shipAddr3',               // string
        'shipAddressee',           // string
        'shipAttention',           // string
        'shipCity',                // string
        'shipCountry',             // string
        'shipState',               // string
        'shipZip',                 // string
        'socialsecuritynumber',    // string
        'startdatetimeoffcalc',    // string
        'subscriptionMessageHistory',// EmployeeSubscriptionMessageHistoryCollection
        'subscriptions',           // EmployeeSubscriptionsCollection
        'subsidiary',              // Subsidiary
        'supervisor',              // Employee
        'targetUtilization',       // float
        'template',                // Employee
        'terminationbydeath',      // bool
        'terminationcategory',     // string enum(VOLUNTARY, INVOLUNTARY)
        'terminationdetails',      // string
        'terminationreason',       // NsResource
        'terminationregretted',    // string enum(NO, UNSPECIFIED, YES)
        'timeapprover',            // Employee
        'timeoffplan',             // NsResource
        'title',                   // string
        'useperquest',             // bool
        'userNotes',               // EmployeeUserNotesCollection
        'usetimedata',             // string enum(T, F)
        'visaexpdate',             // string
        'visatype',                // NsResource
        'wasempcenterhasaccess',   // string
        'wasfulluserhasaccess',    // string
        'wasinactive',             // string
        'wasretailuserhasaccess',  // string
        'workCalendar',            // NsResource
        'workassignment',          // string enum(job, position)
        'workplace',               // Workplace
    ];    

   /**
    * GET /employee
    * 
    * @param string $q                 Search query used to filter results. (in query)
    * @param int $limit                The limit used to specify the number of results on a single page. (in query)
    * @param int $offset               The offset used for selecting a specific page of results. (in query)
    * @return string json:employeeCollection - List of records
    * @response [default] nsError - Error response
    */
    public function getListOfRecords($q = null, $limit = null, $offset = null)
    {
        $parts = [];
        $path = "/employee";
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
    * POST /employee
    * 
    * @param $body {employee}
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @response [204 No Content]  - Inserted record
    * @response [default] nsError - Error response
    */
    public function insertRecord($body, $replace = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null)
    {
        $parts = [];
        $path = "/employee";
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
    * DELETE /employee/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @response [204 No Content]  - Removed record
    * @response [default] nsError - Error response
    */
    public function removeRecord($id = null)
    {
        $path = "/employee/$id";
        $response = $this->_makeRequest('DELETE', $path);

        return $response;
    }

   /**
    * GET /employee/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @param bool $expandSubResources  Set to true to automatically expand all sublists, sublist lines and subrecords on this record. (in query)
    * @return string json:employee - Retrieved record
    * @response [default] nsError - Error response
    */
    public function getRecord($id = null, $expandSubResources = null)
    {
        $parts = [];
        $path = "/employee/$id";
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
    * PATCH /employee/{id}
    * 
    * @param $body {employee}
    * @param numeric $id [Required]    Internal identifier (in path)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @response [204 No Content]  - Updated record
    * @response [default] nsError - Error response
    */
    public function updateRecord($body, $id = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null, $replace = null)
    {
        $parts = [];
        $path = "/employee/$id";
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
    * PUT /employee/{id}
    * 
    * @param $body {employee}
    * @param string $id [Required]     External identifier (in path)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @response [204 No Content]  - Upserted record
    * @response [default] nsError - Error response
    */
    public function insertOrUpdateRecord($body, $id = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null, $replace = null)
    {
        $parts = [];
        $path = "/employee/$id";
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
    * POST /employee/{id}/!transform/expenseReport
    * 
    * @param $body {expenseReport}
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param numeric $id [Required]    Internal identifier (in path)
    * @response [204 No Content] expenseReport - Transformed record
    * @response [default] nsError - Error response
    */
    public function transformToExpenseReport($body, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null, $replace = null, $id = null)
    {
        $parts = [];
        $path = "/employee/$id/!transform/expenseReport";
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
    * POST /employee/{id}/!transform/timeBill
    * 
    * @param $body {timeBill}
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param numeric $id [Required]    Internal identifier (in path)
    * @response [204 No Content] timeBill - Transformed record
    * @response [default] nsError - Error response
    */
    public function transformToTimeBill($body, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null, $replace = null, $id = null)
    {
        $parts = [];
        $path = "/employee/$id/!transform/timeBill";
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
