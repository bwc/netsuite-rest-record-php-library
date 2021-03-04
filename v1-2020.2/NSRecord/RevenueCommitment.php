<?php
class NSRecord_RevenueCommitment extends RequestAbstract
{
   /**
    * [revenueCommitment]
    * This record is available as a beta record.
    *
    * @var array
    */
    public static $schema = [
        'accountingBook',          // AccountingBook
        'accountingBookDetail',    // RevenueCommitmentAccountingBookDetailCollection
        'address_country_state_map',// string
        'balreadyrefunded',        // string
        'billAddr1',               // string
        'billAddr2',               // string
        'billAddr3',               // string
        'billAddress',             // string
        'billAddressList',         // NsResource
        'billCity',                // string
        'billCountry',             // string enum(PR, PS, PT, PW, PY, QA, AD, AE, AF, AG)
        'billState',               // string
        'billZip',                 // string
        'billaddressee',           // string
        'billattention',           // string
        'billingaddress',          // RevenueCommitmentBillingaddress
        'billingaddress_text',     // string
        'billoverride',            // string
        'billphone',               // string
        'canalterrroc',            // bool
        'checkCommitted',          // bool
        'class',                   // Classification
        'contribPct',              // string
        'couponCode',              // CouponCode
        'createdDate',             // string
        'createdFrom',             // NsResource
        'currency',                // Currency
        'currencyName',            // string
        'currencyPrecision',       // int
        'currencysymbol',          // string
        'custCurRep',              // int
        'customForm',              // string enum(88, 89, -9960, 90, 91, -9965, 92, -9966, 93, -9967)
        'dateDriven',              // string
        'defaultCatchUp',          // int
        'deferredrevenue',         // float
        'department',              // Department
        'discTax1',                // float
        'discTax1Amt',             // float
        'discTax2',                // float
        'discTax2Amt',             // float
        'discdays',                // int
        'discountIsTaxable',       // bool
        'discountItem',            // DiscountItem
        'discountRate',            // float
        'discountTotal',           // float
        'discountamount',          // float
        'discountdate',            // string
        'discpct',                 // float
        'duedate',                 // string
        'duedays',                 // int
        'edition',                 // string
        'endDate',                 // string
        'entity',                  // Customer|Partner|Vendor|NsResource|Employee|Contact
        'entityNexus',             // Nexus
        'entity_nexus_country',    // string
        'entityfieldname',         // string
        'exchangeRate',            // float
        'excludeFromGLNumbering',  // bool
        'excludecommission',       // bool
        'externalId',              // string
        'fob',                     // string
        'hasanydelayedrevrec',     // bool
        'hasprecalcs',             // bool
        'id',                      // string
        'installmentcount',        // int
        'invertrevrecschedule',    // bool
        'isAdvBill',               // bool
        'isOnlineTransaction',     // string
        'isTaxable',               // bool
        'isTransforming',          // bool
        'isinstallment',           // string
        'item',                    // RevenueCommitmentItemCollection
        'lastModifiedDate',        // string
        'links',                   // NsLink, [read_only]
        'location',                // Location
        'memo',                    // string
        'mindays',                 // int
        'nexus',                   // Nexus
        'nexusOverride',           // Nexus
        'nexus_country',           // string
        'oldrevenuecommitment',    // bool
        'oppcreatedfrom',          // string
        'oppcreatedfromtitle',     // string
        'opportunity',             // Opportunity
        'originalNexus',           // Nexus
        'originalNexusCountry',    // string
        'originator',              // string
        'otherRefNum',             // string
        'partner',                 // Partner
        'partners',                // RevenueCommitmentPartnersCollection
        'persistedterms',          // string
        'postingPeriod',           // AccountingPeriod
        'prevDate',                // string
        'previousOpportunity',     // string
        'prevpartner',             // int
        'prevrep',                 // int
        'promoCode',               // PromotionCode
        'recognizedrevenue',       // float
        'refName',                 // string, [read_only]
        'revChargeAmt',            // float
        'revcommitstatus',         // string
        'revenuestatus',           // string
        'revrecenddate',           // string
        'revreconrevcommitment',   // bool
        'revrecschedule',          // RevRecTemplate
        'revrecschedulestarted',   // bool
        'revrecstartdate',         // string
        'salesRep',                // Customer|Partner|Vendor|NsResource|Employee|Contact
        'salesTeam',               // RevenueCommitmentSalesTeamCollection
        'saleseffectivedate',      // string
        'shadow_shipAddress',      // string
        'shipAddr1',               // string
        'shipAddr2',               // string
        'shipAddr3',               // string
        'shipAddress',             // string
        'shipAddressList',         // NsResource
        'shipAddressee',           // string
        'shipAttention',           // string
        'shipCity',                // string
        'shipCountry',             // string enum(PR, PS, PT, PW, PY, QA, AD, AE, AF, AG)
        'shipIsResidential',       // bool
        'shipOverride',            // bool
        'shipPhone',               // string
        'shipState',               // string
        'shipZip',                 // string
        'shippingAddress',         // RevenueCommitmentShippingAddress
        'shippingAddress_text',    // string
        'source',                  // string enum(SuitePhone, smbXML, CSV, AMT, ADP, QIF, QB, Yahoo, PERQUEST, customerCenter)
        'startDate',               // string
        'storeorder',              // string
        'subsidiary',              // Subsidiary
        'subtotal',                // float
        'tax2Total',               // float
        'taxAmount2Override',      // float
        'taxAmountOverride',       // float
        'taxFractionUnit',         // int
        'taxItem',                 // NsResource
        'taxPeriod',               // TaxPeriod
        'taxRate',                 // float
        'taxRounding',             // string
        'taxRoundingLevel',        // string
        'taxTotal',                // float
        'terms',                   // Term
        'total',                   // float
        'trackingNumberList',      // NsResourceCollection
        'trackingNumbers',         // string
        'tranDate',                // string
        'tranId',                  // string
        'tranisvsoebundle',        // bool
        'updatecurrency',          // string
        'usingVSOEFldSet',         // bool
        'vatRegNum',               // string
        'vsoeautocalc',            // bool
        'warnNexusChange',         // bool
        'website',                 // string
        'weekendpreference',       // string
    ];    

   /**
    * GET /revenueCommitment
    * 
    * @param string $q                 Search query used to filter results. (in query)
    * @param int $limit                The limit used to specify the number of results on a single page. (in query)
    * @param int $offset               The offset used for selecting a specific page of results. (in query)
    * @return string json:revenueCommitmentCollection - List of records 
    * @meta [default] nsError - Error response 
    */
    public function getListOfRecords($q = null, $limit = null, $offset = null)
    {
        $parts = [];
        $path = "/revenueCommitment";
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
    * POST /revenueCommitment
    * 
    * @param $body {revenueCommitment}
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @meta [204 No Content]  - Inserted record 
    * @meta [default] nsError - Error response 
    */
    public function insertRecord($body, $replace = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null)
    {
        $parts = [];
        $path = "/revenueCommitment";
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
    * DELETE /revenueCommitment/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @meta [204 No Content]  - Removed record 
    * @meta [default] nsError - Error response 
    */
    public function removeRecord($id = null)
    {
        $path = "/revenueCommitment/$id";
        $response = $this->_makeRequest('DELETE', $path);

        return $response;
    }

   /**
    * GET /revenueCommitment/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @param bool $expandSubResources  Set to true to automatically expand all sublists, sublist lines and subrecords on this record. (in query)
    * @return string json:revenueCommitment - Retrieved record 
    * @meta [default] nsError - Error response 
    */
    public function getRecord($id = null, $expandSubResources = null)
    {
        $parts = [];
        $path = "/revenueCommitment/$id";
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
    * PATCH /revenueCommitment/{id}
    * 
    * @param $body {revenueCommitment}
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
        $path = "/revenueCommitment/$id";
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
    * PUT /revenueCommitment/{id}
    * 
    * @param $body {revenueCommitment}
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
        $path = "/revenueCommitment/$id";
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
