<?php
class NSRecord_WorkOrderCompletion extends RequestAbstract
{
   /**
    * [workOrderCompletion]
    * This record is available as a beta record.
    *
    * @var array
    */
    public static $schema = [
        'accountingBookDetail',    // WorkOrderCompletionAccountingBookDetailCollection
        'billOfMaterials',         // Bom
        'billOfMaterialsRevision', // BomRevision
        'binItem',                 // bool
        'binNumbers',              // string
        'class',                   // Classification
        'completedQuantity',       // float
        'component',               // WorkOrderCompletionComponentCollection
        'createdDate',             // string
        'createdFrom',             // WorkOrder
        'currencyPrecision',       // string
        'customForm',              // string enum(88, 89, -9960, 90, 91, -9965, 92, -9966, 93, -9967)
        'department',              // Department
        'endOperation',            // ManufacturingOperationTask
        'excludeFromGLNumbering',  // bool
        'expirationDate',          // string
        'externalId',              // string
        'firstOperation',          // string
        'hasNumberedComponents',   // bool
        'id',                      // string
        'inventoryDetail',         // WorkOrderCompletionInventoryDetail
        'inventoryDetailAvail',    // string
        'inventoryDetailReq',      // bool
        'inventoryDetailUiType',   // string
        'inventoryDetail_upd',     // string
        'isBackflush',             // bool
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
        'manufacturingRouting',    // ManufacturingRouting
        'memo',                    // string
        'operation',               // WorkOrderCompletionOperationCollection
        'orderQuantity',           // float
        'originalCompletedQuantity',// float
        'originalEndOperation',    // int
        'originalStartOperation',  // int
        'postingPeriod',           // AccountingPeriod
        'prevDate',                // string
        'qtyLmit',                 // float
        'quantity',                // float
        'refName',                 // string, [read_only]
        'revision',                // ItemRevision
        'revisionMemo',            // string
        'scrapQuantity',           // float
        'serialNumbers',           // string
        'startOperation',          // ManufacturingOperationTask
        'subsidiary',              // Subsidiary
        'taxPeriod',               // TaxPeriod
        'total',                   // float
        'tranDate',                // string
        'tranId',                  // string
        'transformId',             // string
        'unitCost',                // float
        'units',                   // string
        'woLocation',              // string
    ];    

   /**
    * GET /workOrderCompletion
    * 
    * @param string $q                 Search query used to filter results. (in query)
    * @param int $limit                The limit used to specify the number of results on a single page. (in query)
    * @param int $offset               The offset used for selecting a specific page of results. (in query)
    * @return string json:workOrderCompletionCollection - List of records
    * @response [default] nsError - Error response
    */
    public function getListOfRecords($q = null, $limit = null, $offset = null)
    {
        $parts = [];
        $path = "/workOrderCompletion";
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
    * POST /workOrderCompletion
    * 
    * @param $body {workOrderCompletion}
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @response [204 No Content]  - Inserted record
    * @response [default] nsError - Error response
    */
    public function insertRecord($body, $replace = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null)
    {
        $parts = [];
        $path = "/workOrderCompletion";
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
    * DELETE /workOrderCompletion/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @response [204 No Content]  - Removed record
    * @response [default] nsError - Error response
    */
    public function removeRecord($id = null)
    {
        $path = "/workOrderCompletion/$id";
        $response = $this->_makeRequest('DELETE', $path);

        return $response;
    }

   /**
    * GET /workOrderCompletion/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @param bool $expandSubResources  Set to true to automatically expand all sublists, sublist lines and subrecords on this record. (in query)
    * @return string json:workOrderCompletion - Retrieved record
    * @response [default] nsError - Error response
    */
    public function getRecord($id = null, $expandSubResources = null)
    {
        $parts = [];
        $path = "/workOrderCompletion/$id";
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
    * PATCH /workOrderCompletion/{id}
    * 
    * @param $body {workOrderCompletion}
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
        $path = "/workOrderCompletion/$id";
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
    * PUT /workOrderCompletion/{id}
    * 
    * @param $body {workOrderCompletion}
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
        $path = "/workOrderCompletion/$id";
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
