<?php
class NSRecord_AssemblyUnbuild extends RequestAbstract
{
   /**
    * [assemblyUnbuild]
    * This record is available as a beta record.
    *
    * @var array
    */
    public static $schema = [
        'accountingBookDetail',    // AssemblyUnbuildAccountingBookDetailCollection
        'auxDate',                 // string
        'billOfMaterials',         // Bom
        'billOfMaterialsRevision', // BomRevision
        'binItem',                 // bool
        'binNumbers',              // string
        'built',                   // float
        'class',                   // Classification
        'component',               // AssemblyUnbuildComponentCollection
        'componentQuantitiesNeedRecalculation',// bool
        'costingMethod',           // string
        'createdDate',             // string
        'currencyPrecision',       // string
        'customForm',              // string enum(88, 89, -9960, 90, 91, -9965, 92, -9966, 93, -9967)
        'department',              // Department
        'effectiveBomControl',     // string
        'excludeFromGLNumbering',  // bool
        'expirationDate',          // string
        'externalId',              // string
        'hasNumberedComponents',   // bool
        'id',                      // string
        'inventoryDetail',         // AssemblyUnbuildInventoryDetail
        'inventoryDetailAvail',    // string
        'inventoryDetailReq',      // string
        'inventoryDetailUiType',   // string
        'inventoryDetail_upd',     // string
        'isLotNumberedAssembly',   // bool
        'isNumbered',              // bool
        'isNumberedAssembly',      // bool
        'isSerial',                // bool
        'item',                    // AssemblyItem
        'itemBinList',             // string
        'lastModifiedDate',        // string
        'line',                    // int
        'links',                   // NsLink, [read_only]
        'location',                // Location
        'locationusesbins',        // bool
        'maxReloadDate',           // string
        'memo',                    // string
        'minReloadDate',           // string
        'orderAssemblyQty',        // float
        'orderDoc',                // string
        'origQuantity',            // float
        'outsourcingCharge',       // InventoryItem|ServiceItem|OtherChargeItem|AssemblyItem|KitItem|NsResource|DiscountItem|MarkupItem|SubtotalItem|DescriptionItem|PaymentItem|SalesTaxItem|TaxGroup|ShipItem|DownloadItem|GiftCertificateItem|SubscriptionPlan|NonInventorySaleItem|NonInventoryResaleItem|NonInventoryPurchaseItem
        'outsourcingChargeUnitPrice',// float
        'postingPeriod',           // AccountingPeriod
        'prevDate',                // string
        'qtyLmit',                 // float
        'quantity',                // float
        'refName',                 // string, [read_only]
        'revision',                // ItemRevision
        'revisionMemo',            // string
        'serialNumbers',           // string
        'subsidiary',              // Subsidiary
        'taxPeriod',               // TaxPeriod
        'total',                   // float
        'tranDate',                // string
        'tranId',                  // string
        'units',                   // string
    ];    

   /**
    * GET /assemblyUnbuild
    * 
    * @param string $q                 Search query used to filter results. (in query)
    * @param int $limit                The limit used to specify the number of results on a single page. (in query)
    * @param int $offset               The offset used for selecting a specific page of results. (in query)
    * @return string json:assemblyUnbuildCollection - List of records 
    * @meta [default] nsError - Error response 
    */
    public function getListOfRecords($q = null, $limit = null, $offset = null)
    {
        $parts = [];
        $path = "/assemblyUnbuild";
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
    * POST /assemblyUnbuild
    * 
    * @param $body {assemblyUnbuild}
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @meta [204 No Content]  - Inserted record 
    * @meta [default] nsError - Error response 
    */
    public function insertRecord($body, $replace = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null)
    {
        $parts = [];
        $path = "/assemblyUnbuild";
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
    * DELETE /assemblyUnbuild/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @meta [204 No Content]  - Removed record 
    * @meta [default] nsError - Error response 
    */
    public function removeRecord($id = null)
    {
        $path = "/assemblyUnbuild/$id";
        $response = $this->_makeRequest('DELETE', $path);

        return $response;
    }

   /**
    * GET /assemblyUnbuild/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @param bool $expandSubResources  Set to true to automatically expand all sublists, sublist lines and subrecords on this record. (in query)
    * @return string json:assemblyUnbuild - Retrieved record 
    * @meta [default] nsError - Error response 
    */
    public function getRecord($id = null, $expandSubResources = null)
    {
        $parts = [];
        $path = "/assemblyUnbuild/$id";
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
    * PATCH /assemblyUnbuild/{id}
    * 
    * @param $body {assemblyUnbuild}
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
        $path = "/assemblyUnbuild/$id";
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
    * PUT /assemblyUnbuild/{id}
    * 
    * @param $body {assemblyUnbuild}
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
        $path = "/assemblyUnbuild/$id";
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