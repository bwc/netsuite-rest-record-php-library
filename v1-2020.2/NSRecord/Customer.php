<?php
class NSRecord_Customer extends RequestAbstract
{
   /**
    * [customer]
    * This record is available as a beta record.
    *
    * @var array
    */
    public static $schema = [
        'accountNumber',           // string
        'addressBook',             // CustomerAddressBookCollection
        'aging',                   // float
        'aging1',                  // float
        'aging2',                  // float
        'aging3',                  // float
        'aging4',                  // float
        'alcoholRecipientType',    // string enum(CONSUMER, LICENSEE)
        'altEmail',                // string
        'altName',                 // string
        'altPhone',                // string
        'assignedwebsite',         // WebSite
        'autoName',                // bool
        'balance',                 // float
        'balancesearch',           // float
        'billingratecard',         // BillingRateCard
        'billingschedule',         // BillingSchedule
        'billingtransactionform',  // string enum(88, 89, -9960, 90, 91, -9965, 92, -9966, 93, -9967)
        'billingtransactiontype',  // string enum(VendPymt, CustCred, ItemShip, Check, RevContr, Journal, CustChrg, RevArrng, GLAdj, InvReval)
        'bulkMerge',               // CustomerBulkMergeCollection
        'buyingReason',            // NsResource
        'buyingTimeFrame',         // NsResource
        'campaignCategory',        // NsResource
        'campaignEvent',           // NsResource
        'campaigns',               // CustomerCampaignsCollection
        'category',                // CustomerCategory
        'comments',                // string
        'companyName',             // string
        'consolaging',             // float
        'consolaging1',            // float
        'consolaging2',            // float
        'consolaging3',            // float
        'consolaging4',            // float
        'consolbalance',           // float
        'consolbalancesearch',     // float
        'consoldaysoverdue',       // int
        'consoldaysoverduesearch', // int
        'consoldepositbalance',    // float
        'consoloverduebalance',    // float
        'consoloverduebalancesearch',// float
        'consolunbilledorders',    // float
        'consolunbilledorderssearch',// float
        'contact',                 // Contact
        'contactList',             // ContactCollection
        'contactRoles',            // CustomerContactRolesCollection
        'contribPct',              // string
        'creditCards',             // CustomerCreditCardsCollection
        'creditLimit',             // float
        'creditholdoverride',      // string enum(AUTO, OFF, ON)
        'currency',                // Currency
        'currencyList',            // CustomerCurrencyListCollection
        'customForm',              // string enum(-10916, -10915, -10914, -20961, -10230, -893, -892, -410, -891, -770)
        'dateCreated',             // string
        'daysoverdue',             // int
        'defaultAddress',          // string
        'defaultAllocationStrategy',// NsResource
        'defaultBankAccount',      // Account
        'defaultBillingAddress',   // string
        'defaultOrderPriority',    // float
        'defaultShippingAddress',  // string
        'defaultTaxReg',           // string
        'defaultTaxRegOptions',    // string
        'depositbalance',          // float
        'displaySymbol',           // string
        'download',                // CustomerDownloadCollection
        'draccount',               // Account
        'edition',                 // string enum(XX, AU, UK, JP, US, CA)
        'eftAcct',                 // CustomerEftAcctCollection
        'email',                   // string
        'emailPreference',         // string enum(PDF, HTML, DEFAULT)
        'emailTransactions',       // bool
        'emailVal',                // string
        'endDate',                 // string
        'entityId',                // string
        'entityNumber',            // int
        'entityStatus',            // CustomerStatus
        'entityTitle',             // string
        'estimatedBudget',         // float
        'externalId',              // string
        'fax',                     // string
        'faxTransactions',         // bool
        'firstName',               // string
        'firstOrderDate',          // string
        'firstSaleDate',           // string
        'formatSample',            // string
        'fxaccount',               // Account
        'giveAccess',              // bool
        'globalSubscriptionStatus',// string enum(1, 2, 3, 4)
        'glommedName',             // string
        'groupInvoices',           // bool
        'grouppricing',            // CustomerGrouppricingCollection
        'hasShippingAddress',      // bool
        'homePhone',               // string
        'id',                      // string
        'image',                   // NsResource
        'initiallyOverrideAllowed',// bool
        'intercoreceivablesacctpref',// string
        'isBudgetApproved',        // bool
        'isInactive',              // bool
        'isIndividual',            // bool
        'isPerson',                // bool
        'isautogeneratedrepresentingentity',// bool
        'itempricing',             // CustomerItempricingCollection
        'language',                // string enum(ro_RO, af_ZA, tl_PH, pt_BR, th_TH, bn_BD, cs_CZ, ca_ES, hu_HU, kn_IN)
        'lastModifiedDate',        // string
        'lastName',                // string
        'lastOrderDate',           // string
        'lastSaleDate',            // string
        'leadSource',              // NsResource
        'links',                   // NsLink, [read_only]
        'middleName',              // string
        'mobilePhone',             // string
        'monthlyClosing',          // string enum(1, 25, 15, 5, 20, 31, 10)
        'negativeNumberFormat',    // string enum(0, 1)
        'numberFormat',            // string enum(0, 1, 2, 3, 4, 5)
        'oncredithold',            // bool
        'openingbalance',          // float
        'openingbalanceaccount',   // Account
        'openingbalancedate',      // string
        'overduebalance',          // float
        'overduebalancesearch',    // float
        'overrideCurrencyFormat',  // bool
        'parent',                  // Customer
        'parentSubsidiary',        // string
        'parent_currency',         // int
        'partner',                 // Partner
        'partners',                // CustomerPartnersCollection
        'paymentInstruments',      // CustomerPaymentInstrumentsCollection
        'phone',                   // string
        'phoneticName',            // string
        'prefCcProcessor',         // NsResource
        'priceLevel',              // PriceLevel
        'printOnCheckAs',          // string
        'printTransactions',       // bool
        'receivablesaccount',      // Account
        'receivablesacctpref',     // string
        'refName',                 // string, [read_only]
        'reminderDays',            // int
        'representingsubsidiary',  // Subsidiary
        'resaleNumber',            // string
        'salesGroup',              // NsResource
        'salesReadiness',          // NsResource
        'salesRep',                // Employee
        'salesTeam',               // CustomerSalesTeamCollection
        'salutation',              // string
        'searchStage',             // string
        'sendEmail',               // bool
        'shipAddr1',               // string
        'shipAddr2',               // string
        'shipAddr3',               // string
        'shipAddressee',           // string
        'shipAttention',           // string
        'shipCity',                // string
        'shipComplete',            // bool
        'shipCountry',             // string
        'shipState',               // string
        'shipZip',                 // string
        'shippingCarrier',         // string
        'shippingItem',            // ShipItem
        'shipping_country',        // string enum(PR, PS, PT, PW, PY, QA, AD, AE, AF, AG)
        'sourcewebsite',           // WebSite
        'startDate',               // string
        'subMachine',              // CustomerSubMachineCollection
        'subscriptionMessageHistory',// CustomerSubscriptionMessageHistoryCollection
        'subscriptions',           // CustomerSubscriptionsCollection
        'subsidiary',              // Subsidiary
        'symbolPlacement',         // string enum(1, 2)
        'syncPartnerTeams',        // bool
        'syncSalesTeams',          // bool
        'taxExempt',               // bool
        'taxFractionUnit',         // string enum(2, 1, 0, -1, -2)
        'taxItem',                 // NsResource
        'taxRegistration',         // CustomerTaxRegistrationCollection
        'taxRounding',             // string enum(DOWN, UP, OFF)
        'taxable',                 // bool
        'terms',                   // Term
        'territory',               // NsResource
        'thirdPartyAcct',          // string
        'thirdPartyCarrier',       // string enum(fedex, ups, usps)
        'thirdPartyCountry',       // string enum(PR, PS, PT, PW, PY, QA, AD, AE, AF, AG)
        'thirdPartyZipCode',       // string
        'title',                   // string
        'unbilledorders',          // float
        'unbilledorderssearch',    // float
        'upsell',                  // CustomerUpsellCollection
        'url',                     // string
        'vatRegNumber',            // string
        'weblead',                 // bool
    ];    

   /**
    * GET /customer
    * 
    * @param string $q                 Search query used to filter results. (in query)
    * @param int $limit                The limit used to specify the number of results on a single page. (in query)
    * @param int $offset               The offset used for selecting a specific page of results. (in query)
    * @return string json:customerCollection - List of records
    * @response [default] nsError - Error response
    */
    public function getListOfRecords($q = null, $limit = null, $offset = null)
    {
        $parts = [];
        $path = "/customer";
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
    * POST /customer
    * 
    * @param $body {customer}
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @response [204 No Content]  - Inserted record
    * @response [default] nsError - Error response
    */
    public function insertRecord($body, $replace = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null)
    {
        $parts = [];
        $path = "/customer";
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
    * DELETE /customer/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @response [204 No Content]  - Removed record
    * @response [default] nsError - Error response
    */
    public function removeRecord($id = null)
    {
        $path = "/customer/$id";
        $response = $this->_makeRequest('DELETE', $path);

        return $response;
    }

   /**
    * GET /customer/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @param bool $expandSubResources  Set to true to automatically expand all sublists, sublist lines and subrecords on this record. (in query)
    * @return string json:customer - Retrieved record
    * @response [default] nsError - Error response
    */
    public function getRecord($id = null, $expandSubResources = null)
    {
        $parts = [];
        $path = "/customer/$id";
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
    * PATCH /customer/{id}
    * 
    * @param $body {customer}
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
        $path = "/customer/$id";
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
    * PUT /customer/{id}
    * 
    * @param $body {customer}
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
        $path = "/customer/$id";
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
    * POST /customer/{id}/!transform/cashSale
    * 
    * @param $body {cashSale}
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param numeric $id [Required]    Internal identifier (in path)
    * @response [204 No Content] cashSale - Transformed record
    * @response [default] nsError - Error response
    */
    public function transformToCashSale($body, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null, $replace = null, $id = null)
    {
        $parts = [];
        $path = "/customer/$id/!transform/cashSale";
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
    * POST /customer/{id}/!transform/customerPayment
    * 
    * @param $body {customerPayment}
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param numeric $id [Required]    Internal identifier (in path)
    * @response [204 No Content] customerPayment - Transformed record
    * @response [default] nsError - Error response
    */
    public function transformToCustomerPayment($body, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null, $replace = null, $id = null)
    {
        $parts = [];
        $path = "/customer/$id/!transform/customerPayment";
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
    * POST /customer/{id}/!transform/estimate
    * 
    * @param $body {estimate}
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param numeric $id [Required]    Internal identifier (in path)
    * @response [204 No Content] estimate - Transformed record
    * @response [default] nsError - Error response
    */
    public function transformToEstimate($body, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null, $replace = null, $id = null)
    {
        $parts = [];
        $path = "/customer/$id/!transform/estimate";
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
    * POST /customer/{id}/!transform/invoice
    * 
    * @param $body {invoice}
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param numeric $id [Required]    Internal identifier (in path)
    * @response [204 No Content] invoice - Transformed record
    * @response [default] nsError - Error response
    */
    public function transformToInvoice($body, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null, $replace = null, $id = null)
    {
        $parts = [];
        $path = "/customer/$id/!transform/invoice";
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
    * POST /customer/{id}/!transform/opportunity
    * 
    * @param $body {opportunity}
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param numeric $id [Required]    Internal identifier (in path)
    * @response [204 No Content] opportunity - Transformed record
    * @response [default] nsError - Error response
    */
    public function transformToOpportunity($body, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null, $replace = null, $id = null)
    {
        $parts = [];
        $path = "/customer/$id/!transform/opportunity";
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
    * POST /customer/{id}/!transform/salesOrder
    * 
    * @param $body {salesOrder}
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param numeric $id [Required]    Internal identifier (in path)
    * @response [204 No Content] salesOrder - Transformed record
    * @response [default] nsError - Error response
    */
    public function transformToSalesOrder($body, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null, $replace = null, $id = null)
    {
        $parts = [];
        $path = "/customer/$id/!transform/salesOrder";
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
    * POST /customer/{id}/!transform/vendor
    * 
    * @param $body {vendor}
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param numeric $id [Required]    Internal identifier (in path)
    * @response [204 No Content] vendor - Transformed record
    * @response [default] nsError - Error response
    */
    public function transformToVendor($body, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null, $replace = null, $id = null)
    {
        $parts = [];
        $path = "/customer/$id/!transform/vendor";
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
