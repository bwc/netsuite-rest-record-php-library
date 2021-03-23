<?php
class NSRecord_CalendarEvent extends RequestAbstract
{
   /**
    * [calendarEvent]
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
        'accessLevel',             // string enum(PUBILC, PRIVATE, SHOW AS BUSY)
        'allDayEvent',             // bool
        'attendee',                // CustomerCollection|PartnerCollection|VendorCollection|NsResourceCollection|EmployeeCollection|ContactCollection
        'bom',                     // Bom
        'bomRevision',             // BomRevision
        'calendarDate',            // string
        'company',                 // Customer|Partner|Vendor|NsResource|Employee|Contact
        'completedDate',           // string
        'conflictData',            // string
        'contact',                 // Contact
        'createdDate',             // string
        'customForm',              // string enum(-10916, -10915, -10914, -20961, -10230, -893, -892, -410, -891, -770)
        'employeeBillingClassSlave',// string
        'endDate',                 // string
        'endTime',                 // string
        'endbydate',               // string
        'exclusiondate',           // string
        'externalId',              // string
        'files',                   // NsResourceCollection
        'frequency',               // string
        'group',                   // int
        'id',                      // string
        'lastModifiedDate',        // string
        'links',                   // NsLink, [read_only]
        'location',                // string
        'message',                 // string
        'mfgRouting',              // ManufacturingRouting
        'noenddate',               // string
        'organizer',               // Customer|Partner|Vendor|NsResource|Employee|Contact
        'owner',                   // Customer|Partner|Vendor|NsResource|Employee|Contact
        'ownername',               // string
        'period',                  // string
        'r1',                      // string
        'r2',                      // string
        'rawhtml',                 // string
        'recurrence',              // string
        'recurrencedow',           // string
        'recurrencedowim',         // string
        'recurrencedowmask',       // string
        'refName',                 // string, [read_only]
        'relatedItem',             // InventoryItem|ServiceItem|OtherChargeItem|AssemblyItem|KitItem|NsResource|DiscountItem|MarkupItem|SubtotalItem|DescriptionItem|PaymentItem|SalesTaxItem|TaxGroup|ShipItem|DownloadItem|GiftCertificateItem|SubscriptionPlan|NonInventorySaleItem|NonInventoryResaleItem|NonInventoryPurchaseItem
        'reminderMinutes',         // string enum(0, 5, 10, 15, 30)
        'reminderType',            // string enum(pop up, email)
        'resource',                // NsResourceCollection
        'response',                // string enum(TENTATIVE, ACCEPTED, ESCALATED, NO_RESPONSE, DECLINED)
        'row1spacer',              // string
        'row2spacer',              // string
        'seriesstartdate',         // string
        'startDate',               // string
        'startTime',               // string
        'status',                  // string enum(TENTATIVE, CONFIRMED, COMPLETE, CANCELLED)
        'supportCase',             // SupportCase
        'timedEvent',              // bool
        'timezone',                // string
        'title',                   // string
        'transaction',             // NsResource
        'userNotes',               // CalendarEventUserNotesCollection
    ];    

   /**
    * GET /calendarEvent
    * 
    * @param string $q                 Search query used to filter results. (in query)
    * @param int $limit                The limit used to specify the number of results on a single page. (in query)
    * @param int $offset               The offset used for selecting a specific page of results. (in query)
    * @return string json:calendarEventCollection - List of records
    * @response [default] nsError - Error response
    */
    public function getListOfRecords($q = null, $limit = null, $offset = null)
    {
        $parts = [];
        $path = "/calendarEvent";
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
    * POST /calendarEvent
    * 
    * @param $body {calendarEvent}
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @response [204 No Content]  - Inserted record
    * @response [default] nsError - Error response
    */
    public function insertRecord($body, $replace = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null)
    {
        $parts = [];
        $path = "/calendarEvent";
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
    * DELETE /calendarEvent/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @response [204 No Content]  - Removed record
    * @response [default] nsError - Error response
    */
    public function removeRecord($id = null)
    {
        $path = "/calendarEvent/$id";
        $response = $this->_makeRequest('DELETE', $path);

        return $response;
    }

   /**
    * GET /calendarEvent/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @param bool $expandSubResources  Set to true to automatically expand all sublists, sublist lines and subrecords on this record. (in query)
    * @return string json:calendarEvent - Retrieved record
    * @response [default] nsError - Error response
    */
    public function getRecord($id = null, $expandSubResources = null)
    {
        $parts = [];
        $path = "/calendarEvent/$id";
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
    * PATCH /calendarEvent/{id}
    * 
    * @param $body {calendarEvent}
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
        $path = "/calendarEvent/$id";
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
    * PUT /calendarEvent/{id}
    * 
    * @param $body {calendarEvent}
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
        $path = "/calendarEvent/$id";
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
