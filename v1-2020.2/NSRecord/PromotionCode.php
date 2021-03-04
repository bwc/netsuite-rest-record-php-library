<?php
class NSRecord_PromotionCode extends RequestAbstract
{
   /**
    * [promotionCode]
    * This record is available as a beta record.
    *
    * @var array
    */
    public static $schema = [
        'applyDiscountTo',         // string enum(FIRSTSALE, ALLSALES)
        'applyDiscountToType',     // string enum(CHEAPESTDISCITEM, MOSTEXPENSIVEDISCITEM, EACHDISCITEM)
        'audience',                // string enum(EVERYONE, SPECIFICCUSTOMERS)
        'campaigns',               // PromotionCodeCampaignsCollection
        'canBeAutoApplied',        // bool
        'cannotBeCombined',        // bool
        'code',                    // string
        'codePattern',             // string
        'combinationType',         // string enum(COMBINABLE, GLOBALEXCLUSIVE, ITEMLINEEXCLUSIVE, ORDERTYPEEXCLUSIVE, SHIPPINGTYPEEXCLUSIVE)
        'couponCodeFile',          // string
        'currency',                // PromotionCodeCurrencyCollection
        'customForm',              // string enum(-10916, -10915, -10914, -20961, -10230, -893, -892, -410, -891, -770)
        'customerCategory',        // CustomerCategoryCollection
        'customerGroup',           // NsResource
        'customerGroupPreference', // string enum(USECACHED, RUNEACHTIME)
        'customers',               // CustomerCollection
        'description',             // string
        'discount',                // InventoryItem|ServiceItem|OtherChargeItem|AssemblyItem|KitItem|NsResource|DiscountItem|MarkupItem|SubtotalItem|DescriptionItem|PaymentItem|SalesTaxItem|TaxGroup|ShipItem|DownloadItem|GiftCertificateItem|SubscriptionPlan|NonInventorySaleItem|NonInventoryResaleItem|NonInventoryPurchaseItem
        'discountType',            // string enum(F, T)
        'discountedItems',         // PromotionCodeDiscountedItemsCollection
        'discountedItemsSavedSearch',// NsResource
        'displayLineDiscounts',    // bool
        'endDate',                 // string
        'excludeItems',            // bool
        'externalId',              // string
        'fixedPrice',              // float
        'freeShipMethod',          // ShipItem
        'id',                      // string
        'implementation',          // string enum(default, CUSTOMSCRIPT_ADVPROMO_BUYX_GETY, CUSTOMSCRIPT_ADVPROMO_ORDER_SPECIFIC, CUSTOMSCRIPT_ADVPROMO_ITEM_SPECIFIC)
        'isInactive',              // bool
        'isPublic',                // bool
        'itemQuantifier',          // int
        'items',                   // PromotionCodeItemsCollection
        'itemssavedsearch',        // NsResource
        'lastUploadDate',          // string
        'lastUploadFile',          // string
        'lastUploadStatus',        // string
        'links',                   // NsLink, [read_only]
        'location',                // LocationCollection
        'minimumOrderAmount',      // float
        'minimumOrderAmountCheck', // bool
        'name',                    // string
        'numberToGenerate',        // int
        'partnercnt',              // int
        'partners',                // PromotionCodePartnersCollection
        'promotionCodeInstances',  // PromotionCodePromotionCodeInstancesCollection
        'promotionType',           // string enum(STANDARD, ADVANCED, ITEM, ORDER, SHIPPING, FIXEDPRICE, FREEGIFT)
        'rate',                    // float
        'refName',                 // string, [read_only]
        'repeatDiscount',          // bool
        'salesChannels',           // string enum(ALL, SPECIFICLOCATIONS, SPECIFICWEBSITES)
        'specificitemscheck',      // bool
        'startDate',               // string
        'useCachedCustomerGroup',  // bool
        'useMaterializedSavedSearch',// bool
        'useType',                 // string enum(MULTIPLEUSES, SINGLEUSE)
        'website',                 // WebSiteCollection
        'whatTheCustomerNeedsToBuy',// string enum(ANYTHING, MINIMUMORDERAMOUNTORSPECIFICITEMS)
    ];    

   /**
    * GET /promotionCode
    * 
    * @param string $q                 Search query used to filter results. (in query)
    * @param int $limit                The limit used to specify the number of results on a single page. (in query)
    * @param int $offset               The offset used for selecting a specific page of results. (in query)
    * @return string json:promotionCodeCollection - List of records 
    * @meta [default] nsError - Error response 
    */
    public function getListOfRecords($q = null, $limit = null, $offset = null)
    {
        $parts = [];
        $path = "/promotionCode";
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
    * POST /promotionCode
    * 
    * @param $body {promotionCode}
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @meta [204 No Content]  - Inserted record 
    * @meta [default] nsError - Error response 
    */
    public function insertRecord($body, $replace = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null)
    {
        $parts = [];
        $path = "/promotionCode";
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
    * DELETE /promotionCode/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @meta [204 No Content]  - Removed record 
    * @meta [default] nsError - Error response 
    */
    public function removeRecord($id = null)
    {
        $path = "/promotionCode/$id";
        $response = $this->_makeRequest('DELETE', $path);

        return $response;
    }

   /**
    * GET /promotionCode/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @param bool $expandSubResources  Set to true to automatically expand all sublists, sublist lines and subrecords on this record. (in query)
    * @return string json:promotionCode - Retrieved record 
    * @meta [default] nsError - Error response 
    */
    public function getRecord($id = null, $expandSubResources = null)
    {
        $parts = [];
        $path = "/promotionCode/$id";
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
    * PATCH /promotionCode/{id}
    * 
    * @param $body {promotionCode}
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
        $path = "/promotionCode/$id";
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
    * PUT /promotionCode/{id}
    * 
    * @param $body {promotionCode}
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
        $path = "/promotionCode/$id";
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
