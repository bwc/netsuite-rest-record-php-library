<?php
class NSRecord_Campaign extends RequestAbstract
{
   /**
    * [campaign]
    * This record is available as a beta record.
    *
    * @var array
    */
    public static $schema = [
        'audience',                // NsResource
        'autoName',                // bool
        'basecost',                // float
        'campaigndirectmail',      // CampaignCampaigndirectmailCollection
        'campaigndrip',            // CampaignCampaigndripCollection
        'campaignemail',           // CampaignCampaignemailCollection
        'campaignevent',           // CampaignCampaigneventCollection
        'campaignid',              // string
        'category',                // NsResource
        'convcostpercustomer',     // float
        'conversions',             // int
        'cost',                    // float
        'costpercustomer',         // float
        'customForm',              // string enum(-10916, -10915, -10914, -20961, -10230, -893, -892, -410, -891, -770)
        'defaultevent',            // CampaignDefaulteventCollection
        'enddate',                 // string
        'eventNumber',             // int
        'expectedrevenue',         // float
        'externalId',              // string
        'family',                  // NsResource
        'id',                      // string
        'isdefaultleadsource',     // bool
        'isinactive',              // bool
        'item',                    // InventoryItemCollection|ServiceItemCollection|OtherChargeItemCollection|AssemblyItemCollection|KitItemCollection|NsResourceCollection|DiscountItemCollection|MarkupItemCollection|SubtotalItemCollection|DescriptionItemCollection|PaymentItemCollection|SalesTaxItemCollection|TaxGroupCollection|ShipItemCollection|DownloadItemCollection|GiftCertificateItemCollection|SubscriptionPlanCollection|NonInventorySaleItemCollection|NonInventoryResaleItemCollection|NonInventoryPurchaseItemCollection
        'keyword',                 // string
        'leadsgenerated',          // int
        'links',                   // NsLink, [read_only]
        'local',                   // bool
        'message',                 // string
        'offer',                   // NsResource
        'origcampaignid',          // string
        'owner',                   // Customer|Partner|Vendor|NsResource|Employee|Contact
        'profit',                  // float
        'promotionCode',           // PromotionCode
        'refName',                 // string, [read_only]
        'roi',                     // float
        'searchengine',            // NsResource
        'startdate',               // string
        'title',                   // string
        'totalrevenue',            // float
        'uniquevisitors',          // int
        'url',                     // string
        'vertical',                // NsResource
    ];    

   /**
    * POST /campaign
    * 
    * @param $body {campaign}
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @response [204 No Content]  - Inserted record
    * @response [default] nsError - Error response
    */
    public function insertRecord($body, $replace = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null)
    {
        $parts = [];
        $path = "/campaign";
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
    * DELETE /campaign/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @response [204 No Content]  - Removed record
    * @response [default] nsError - Error response
    */
    public function removeRecord($id = null)
    {
        $path = "/campaign/$id";
        $response = $this->_makeRequest('DELETE', $path);

        return $response;
    }

   /**
    * GET /campaign/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @param bool $expandSubResources  Set to true to automatically expand all sublists, sublist lines and subrecords on this record. (in query)
    * @return string json:campaign - Retrieved record
    * @response [default] nsError - Error response
    */
    public function getRecord($id = null, $expandSubResources = null)
    {
        $parts = [];
        $path = "/campaign/$id";
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
    * PATCH /campaign/{id}
    * 
    * @param $body {campaign}
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
        $path = "/campaign/$id";
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
    * PUT /campaign/{id}
    * 
    * @param $body {campaign}
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
        $path = "/campaign/$id";
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
