<?php
class NSRecord_NonInventoryPurchaseItem extends RequestAbstract
{
   /**
    * [nonInventoryPurchaseItem]
    * This record is available as a beta record.
    *
    * @var array
    */
    public static $schema = [
        'VSOEDeferral',            // string enum(DEFERALLUNTIL, DEFERUNTIL)
        'VSOEDelivered',           // bool
        'VSOEPermitDiscount',      // string enum(IFDELIVERED, NEVER)
        'VSOEPrice',               // float
        'VSOESopGroup',            // string enum(EXCLUDE, NORMAL, SOFTWARE)
        'accountingBookDetail',    // NonInventoryPurchaseItemAccountingBookDetailCollection
        'amortizationPeriod',      // int
        'amortizationTemplate',    // AmortizationTemplate
        'availableToPartners',     // bool
        'billExchRateVarianceAcct',// Account
        'billPriceVarianceAcct',   // Account
        'billQtyVarianceAcct',     // Account
        'class',                   // Classification
        'cost',                    // float
        'costUnits',               // string
        'createExpensePlansOn',    // NsResource
        'createdDate',             // string
        'currency',                // Currency
        'customForm',              // string enum(-10916, -10915, -10914, -20961, -10230, -893, -892, -410, -891, -770)
        'deferralAccount',         // Account
        'department',              // Department
        'description',             // string
        'displayName',             // string
        'exchangeRate',            // string
        'expenseAccount',          // Account
        'expenseAmortizationRule', // NsResource
        'externalId',              // string
        'generateAccruals',        // bool
        'hierarchyversions',       // NonInventoryPurchaseItemHierarchyversionsCollection
        'id',                      // string
        'includeChildren',         // bool
        'insertItemAttribute',     // string enum(class, department, itemid, location, issueproduct, vendorname)
        'invt_DispName',           // string
        'invt_SalesDesc',          // string
        'isFulfillable',           // bool
        'isInactive',              // bool
        'isTaxable',               // bool
        'issueProduct',            // IssueProduct
        'itemId',                  // string
        'itemType',                // string enum(Group, Discount, Description, EndGroup, GiftCert, Subtotal, Service, ShipItem, InvtPart, TaxItem)
        'itemVendor',              // NonInventoryPurchaseItemItemVendorCollection
        'lastModifiedDate',        // string
        'links',                   // NsLink, [read_only]
        'location',                // Location
        'matrixItemNameTemplate',  // string
        'matrixItemNameTemplateHelp',// string
        'matrixType',              // string enum(, PARENT, CHILD)
        'parent',                  // NonInventoryPurchaseItem
        'parentOnly',              // bool
        'pf',                      // string
        'pi',                      // string
        'pr',                      // string
        'purchaseDescription',     // string
        'purchaseOrderAmount',     // float
        'purchaseOrderQuantity',   // float
        'purchaseOrderQuantityDiff',// float
        'purchaseTaxCode',         // NsResource
        'receiptAmount',           // float
        'receiptQuantity',         // float
        'receiptQuantityDiff',     // float
        'refName',                 // string, [read_only]
        'residual',                // float
        'salesTaxCode',            // NsResource
        'subsidiary',              // SubsidiaryCollection
        'taxRate',                 // float
        'taxSchedule',             // NsResource
        'translations',            // NonInventoryPurchaseItemTranslationsCollection
        'unitsTypeFracConv',       // bool
        'unitsTypeWarningDisplayed',// bool
        'unitsWarningDisplayed',   // bool
        'upcCode',                 // string
        'userNotes',               // NonInventoryPurchaseItemUserNotesCollection
        'vendor',                  // Vendor
        'vendorName',              // string
    ];    

   /**
    * GET /nonInventoryPurchaseItem
    * 
    * @param string $q                 Search query used to filter results. (in query)
    * @param int $limit                The limit used to specify the number of results on a single page. (in query)
    * @param int $offset               The offset used for selecting a specific page of results. (in query)
    * @return string json:nonInventoryPurchaseItemCollection - List of records 
    * @meta [default] nsError - Error response 
    */
    public function getListOfRecords($q = null, $limit = null, $offset = null)
    {
        $parts = [];
        $path = "/nonInventoryPurchaseItem";
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
    * POST /nonInventoryPurchaseItem
    * 
    * @param $body {nonInventoryPurchaseItem}
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @meta [204 No Content]  - Inserted record 
    * @meta [default] nsError - Error response 
    */
    public function insertRecord($body, $replace = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null)
    {
        $parts = [];
        $path = "/nonInventoryPurchaseItem";
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
    * DELETE /nonInventoryPurchaseItem/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @meta [204 No Content]  - Removed record 
    * @meta [default] nsError - Error response 
    */
    public function removeRecord($id = null)
    {
        $path = "/nonInventoryPurchaseItem/$id";
        $response = $this->_makeRequest('DELETE', $path);

        return $response;
    }

   /**
    * GET /nonInventoryPurchaseItem/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @param bool $expandSubResources  Set to true to automatically expand all sublists, sublist lines and subrecords on this record. (in query)
    * @return string json:nonInventoryPurchaseItem - Retrieved record 
    * @meta [default] nsError - Error response 
    */
    public function getRecord($id = null, $expandSubResources = null)
    {
        $parts = [];
        $path = "/nonInventoryPurchaseItem/$id";
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
    * PATCH /nonInventoryPurchaseItem/{id}
    * 
    * @param $body {nonInventoryPurchaseItem}
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
        $path = "/nonInventoryPurchaseItem/$id";
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
    * PUT /nonInventoryPurchaseItem/{id}
    * 
    * @param $body {nonInventoryPurchaseItem}
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
        $path = "/nonInventoryPurchaseItem/$id";
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
