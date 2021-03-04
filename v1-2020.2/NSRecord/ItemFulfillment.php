<?php
class NSRecord_ItemFulfillment extends RequestAbstract
{
   /**
    * [itemFulfillment]
    * This record is available as a beta record.
    *
    * @var array
    */
    public static $schema = [
        'accessibilityTypeFedex',  // string enum(ACCESSIBLE, INACCESSIBLE)
        'accountingBookDetail',    // ItemFulfillmentAccountingBookDetailCollection
        'alreadyGotLabel',         // bool
        'ancillaryEndorsementFedex',// string enum(ADDRESS_CORRECTION, CARRIER_LEAVE_IF_NO_RESPONSE, CHANGE_SERVICE, FORWARDING_SERVICE, RETURN_SERVICE)
        'applDiscountTotal',       // float
        'applTaxTotal',            // float
        'b13aFilingOptionFedex',   // string enum(NOT_REQUIRED, MANUALLY_ATTACHED, FILED_ELECTRONICALLY, SUMMARY_REPORTING)
        'b13aStatementDataFedex',  // string
        'backupEmailAddressUps',   // string
        'balance',                 // float
        'baseDimensionUnit',       // string
        'baseWeightUnit',          // string
        'billingType',             // string
        'blankUps',                // string
        'blanketEndDateFedex',     // string
        'blanketEndDateUps',       // string
        'blanketEndDateUsr',       // string
        'blanketStartDateFedex',   // string
        'blanketStartDateUps',     // string
        'blanketStartDateUsr',     // string
        'bookingConfirmationNumFedex',// string
        'carrierForm',             // string
        'carrierIdUps',            // string
        'certOfOriginFedex',       // bool
        'certifiedMailUsps',       // bool
        'class',                   // Classification
        'codManuallyUpdatedFedex', // bool
        'codManuallyUpdatedUps',   // bool
        'codManuallyUpdatedUsps',  // bool
        'commInvoiceFedex',        // bool
        'consolidatebalance',      // float
        'containerTypeFedex',      // string
        'createdDate',             // string
        'createdFrom',             // NsResource
        'createdFromShipGroup',    // int
        'credholdentity',          // int
        'credholdoverride',        // string
        'credlim',                 // float
        'crosssubfulfillment',     // bool
        'currencycode',            // string
        'customForm',              // string enum(88, 89, -9960, 90, 91, -9965, 92, -9966, 93, -9967)
        'dateToday',               // string
        'daysoverdue',             // int
        'defaultItemWeight',       // float
        'defaultshipStage',        // string
        'deliveryInstructionsFedex',// string
        'department',              // Department
        'dutyPaymentAcctFedex',    // string
        'dutyPaymentTypeFedex',    // string enum(NONESELECTED, RECIPIENT, THIRDPARTY)
        'eccNumberUps',            // string
        'empty',                   // string
        'entity',                  // Customer|Partner|Vendor|NsResource|Employee|Contact
        'entityCurrency',          // Currency
        'entityTaxId',             // string
        'entryNumberUps',          // string
        'exchangerate',            // float
        'excludeFromGLNumbering',  // bool
        'exportTypeUps',           // string enum(D, F, M)
        'externalId',              // string
        'fulfillmentHasLabel',     // bool
        'fulfillmentHasTNum',      // bool
        'futureShipDateUsps',      // string
        'futureShipDateUsr',       // string
        'generateIntegratedShipperLabel',// bool
        'generateReturnLabel',     // bool
        'halAddr1Fedex',           // string
        'halAddr2Fedex',           // string
        'halAddr3Fedex',           // string
        'halAddressFedex',         // string
        'halCityFedex',            // string
        'halCountryFedex',         // string
        'halLocationPhoneFedex',   // string
        'halPhoneFedex',           // string
        'halStateFedex',           // string
        'halZipFedex',             // string
        'handlingCost',            // float
        'hazmatTypeFedex',         // string enum(HAZMAT, DGOODS)
        'holdAtLocationFedex',     // bool
        'holidayDeliveryUsps',     // bool
        'homeDeliveryDateFedex',   // string
        'homeDeliveryTypeFedex',   // string enum(EVENING, APPOINTMENT, DATECERTAIN)
        'id',                      // string
        'ifDiscountTotal',         // float
        'ifTaxTotal',              // float
        'ignoreShipperVoidError',  // bool
        'inBondCodeUps',           // string
        'incoterm',                // NsResource
        'insideDeliveryFedex',     // bool
        'insidePickupFedex',       // bool
        'intlExemptionNumFedex',   // string
        'isAdvBill',               // bool
        'isBrowserRequest',        // bool
        'isCargoAircraftOnlyFedex',// bool
        'isDynScriptingEnabled',   // bool
        'isFreeShippingPromo',     // bool
        'isFulfillmentEdit',       // bool
        'isLabelEnabled',          // bool
        'isMultiSubsidiary',       // bool
        'isRoutedExportTransactionUps',// bool
        'isTransforming',          // bool
        'isbasecurrency',          // bool
        'item',                    // ItemFulfillmentItemCollection
        'kcurrency',               // int
        'labelLength',             // float
        'lastModifiedDate',        // string
        'lengthCertOfOrigin',      // int
        'lengthCommInvoice',       // int
        'lengthDGoodsReport',      // int
        'lengthHazmatOp900Report', // int
        'lengthNaftaCertOfOrigin', // int
        'lengthProFormaInvoice',   // int
        'licenseDateUps',          // string
        'licenseExceptionUps',     // string enum(NLR, AGR, APR, AVS, BAG, CIV, CTP, ENC, GBS, GFT)
        'licenseNumberUps',        // string
        'links',                   // NsLink, [read_only]
        'location',                // Location
        'manualCreditHold',        // string
        'markPackShip',            // string
        'memo',                    // string
        'methodOfTransportUps',    // string enum(1, 2, 3, 4, 5, 6, 7, 8, 9, 10)
        'naftaCertOfOriginFedex',  // bool
        'onSaveShipmentWeight',    // float
        'oncredithold',            // string
        'ordBulk',                 // bool
        'orderId',                 // int
        'orderType',               // string
        'originalShipStatus',      // string enum(A, B, C, D, E, F, G, H, I, J)
        'originalSyncShipStatus',  // string enum(A, B, C, D, E, F, G, H, I, J)
        'originatingSubsidiary',   // Subsidiary
        'overallbalance',          // float
        'overallunbilledorders',   // float
        'package',                 // ItemFulfillmentPackageCollection
        'packageFedex',            // ItemFulfillmentPackageFedexCollection
        'packageUps',              // ItemFulfillmentPackageUpsCollection
        'packageUsps',             // ItemFulfillmentPackageUspsCollection
        'packedDate',              // string
        'packingInstructionsFedex',// string
        'partiesToTransactionFedex',// bool
        'partiesToTransactionUps', // bool
        'partiesToTransactionUsr', // bool
        'partner',                 // Partner
        'phone',                   // string
        'pickedDate',              // string
        'pkgWeightManuallyUpdated',// bool
        'pkgWeightManuallyUpdatedFedex',// bool
        'pkgWeightManuallyUpdatedUps',// bool
        'pkgWeightManuallyUpdatedUsps',// bool
        'postingPeriod',           // AccountingPeriod
        'prevDate',                // string
        'prevShipMethod',          // string
        'previous_returnAddressList',// string
        'previous_shipAddressList',// string
        'primarycurrency',         // float
        'primarycurrencyfxrate',   // float
        'proformaInvoiceFedex',    // bool
        'reasonForExportFedex',    // string enum(SALE, GIFT, SAMPLE, RETURN, REPAIR, INTERCOMPANYDATA)
        'reasonForExportUps',      // string enum(SALE, GIFT, SAMPLE, RETURN, REPAIR, INTERCOMPANYDATA)
        'reasonForExportUsr',      // string enum(SALE, GIFT, SAMPLE, RETURN, REPAIR, INTERCOMPANYDATA)
        'recipientCustomsIdFedex', // string
        'recipientCustomsIdTypeFedex',// string enum(COMPANY, INDIVIDUAL, PASSPORT)
        'recipientTaxIdFedex',     // string
        'recipientTaxIdUps',       // string
        'recipientTaxIdentificationNumberUsr',// string
        'recordShipmethod',        // ShipItem
        'refName',                 // string, [read_only]
        'requestedby',             // FulfillmentRequest
        'returnAddress',           // string
        'returnAddressList',       // NsResource
        'returnAddressMaster',     // string
        'returnShipAddr1',         // string
        'returnShipAddr2',         // string
        'returnShipCity',          // string
        'returnShipCountry',       // string
        'returnShipMethod',        // string enum(44, 45, 46, 47, 48, 49, 50, 51, 52, 53)
        'returnShipState',         // string
        'returnShipZipCode',       // string
        'returnShippingAddress_text',// string
        'returnType',              // string enum(1, FAULTY_ITEM, FOR_REPAIR, ITEM_FOR_LOAN, OTHER, REJECTED, TRIAL, COURTESY_RETURN_LABEL, FOLLOWING_REPAIR, REPLACEMENT)
        'returnTypeDescription',   // string
        'returnshippingaddress',   // ItemFulfillmentReturnshippingaddress
        'sEmail',                  // string
        'sHandlingAccount',        // Account
        'sRealtimeRateType',       // string enum(pluginRate, fedexRealTimeRate, upsRealTimeRate, uspsRealTimeRate, fr, weight, peritem, ptotal, shippingtable)
        'saturdayDeliveryFedex',   // bool
        'saturdayDeliveryUps',     // bool
        'saturdayDeliveryUsr',     // bool
        'saturdayPickupFedex',     // bool
        'sendBackupEmailUps',      // bool
        'sendOrderFulfillmentEmail',// bool
        'sendShipNotifyEmailFedex',// bool
        'sendShipNotifyEmailUps',  // bool
        'sendShipNotifyEmailUsps', // bool
        'sendShipNotifyEmailUsr',  // bool
        'serviceGroup',            // string
        'shipAddr1',               // string
        'shipAddr2',               // string
        'shipAddr3',               // string
        'shipAddress',             // string
        'shipAddressList',         // NsResource
        'shipAttention',           // string
        'shipCarrier',             // string
        'shipCity',                // string
        'shipCompany',             // string
        'shipCountry',             // string enum(PR, PS, PT, PW, PY, QA, AD, AE, AF, AG)
        'shipDateFedex',           // string
        'shipIsResidential',       // bool
        'shipMethod',              // ShipItem
        'shipNotifyEmailAddress2Ups',// string
        'shipNotifyEmailAddressFedex',// string
        'shipNotifyEmailAddressUps',// string
        'shipNotifyEmailAddressUsps',// string
        'shipNotifyEmailAddressUsr',// string
        'shipNotifyEmailMessageUps',// string
        'shipOverride',            // bool
        'shipPhone',               // string
        'shipState',               // string
        'shipStatus',              // string enum(A, B, C, D, E, F, G, H, I, J)
        'shipZip',                 // string
        'shipmentDetails',         // ItemFulfillmentShipmentDetails
        'shipmentDetailsCustomForm',// string
        'shipmentPackage',         // ItemFulfillmentShipmentPackageCollection
        'shipmentProcessed',       // bool
        'shipmentWeightFedex',     // float
        'shipmentWeightUps',       // float
        'shipmentWeightUsps',      // float
        'shippedDate',             // string
        'shipperServiceCode',      // string
        'shippingAddress',         // ItemFulfillmentShippingAddress
        'shippingAddress_text',    // string
        'shippingCost',            // float
        'shippingCostOverridden',  // bool
        'shippingErrorMsg',        // string
        'shippingGroupId',         // int
        'shippingPartner',         // string
        'signatureHomeDeliveryFedex',// bool
        'soDiscountTotal',         // float
        'soNum',                   // string
        'soTaxTotal',              // float
        'srcCountry',              // string
        'status',                  // string enum(A, B, C)
        'storeorder',              // string
        'subsidiary',              // Subsidiary
        'taxPeriod',               // TaxPeriod
        'termsFreightChargeFedex', // float
        'termsInsuranceChargeFedex',// float
        'termsOfSaleFedex',        // string enum(CFR, CIF, CIP, CPT, DAP, DAT, DDP, DDU, EXW, FCA)
        'testId',                  // string
        'thirdPartyAcctFedex',     // string
        'thirdPartyAcctUps',       // string
        'thirdPartyAcctUsr',       // string
        'thirdPartyCarrierFedex',  // string
        'thirdPartyCarrierUps',    // string
        'thirdPartyCountryFedex',  // string enum(PR, PS, PT, PW, PY, QA, AD, AE, AF, AG)
        'thirdPartyCountryUps',    // string enum(PR, PS, PT, PW, PY, QA, AD, AE, AF, AG)
        'thirdPartyCountryUsr',    // string enum(PR, PS, PT, PW, PY, QA, AD, AE, AF, AG)
        'thirdPartyTypeFedex',     // string enum(BILLNONESELECTED, BILLTHIRDPARTY, BILLRECIPIENT, BILLCOLLECT)
        'thirdPartyTypeUps',       // string enum(BILLNONESELECTED, BILLTHIRDPARTY, BILLRECIPIENT, BILLCOLLECT)
        'thirdPartyTypeUsr',       // string enum(BILLNONESELECTED, BILLTHIRDPARTY, BILLRECIPIENT, BILLCOLLECT)
        'thirdPartyZipCodeUps',    // string
        'totalQuantity',           // float
        'tranDate',                // string
        'tranDimensionUnit',       // string
        'tranId',                  // string
        'tranWeightUnit',          // string
        'transferLocation',        // Location
        'unbilledOrders',          // float
        'upsFooterDisclaimer',     // string
        'ups_address_validation_disclaimer_footer',// string
        'usdtosubsidiaryexchangerate',// float
        'website',                 // string
        'weekendDeliveryUsps',     // bool
        'weightConversionFactor',  // float
    ];    

   /**
    * GET /itemFulfillment
    * 
    * @param string $q                 Search query used to filter results. (in query)
    * @param int $limit                The limit used to specify the number of results on a single page. (in query)
    * @param int $offset               The offset used for selecting a specific page of results. (in query)
    * @return string json:itemFulfillmentCollection - List of records 
    * @meta [default] nsError - Error response 
    */
    public function getListOfRecords($q = null, $limit = null, $offset = null)
    {
        $parts = [];
        $path = "/itemFulfillment";
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
    * POST /itemFulfillment
    * 
    * @param $body {itemFulfillment}
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @meta [204 No Content]  - Inserted record 
    * @meta [default] nsError - Error response 
    */
    public function insertRecord($body, $replace = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null)
    {
        $parts = [];
        $path = "/itemFulfillment";
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
    * DELETE /itemFulfillment/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @meta [204 No Content]  - Removed record 
    * @meta [default] nsError - Error response 
    */
    public function removeRecord($id = null)
    {
        $path = "/itemFulfillment/$id";
        $response = $this->_makeRequest('DELETE', $path);

        return $response;
    }

   /**
    * GET /itemFulfillment/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @param bool $expandSubResources  Set to true to automatically expand all sublists, sublist lines and subrecords on this record. (in query)
    * @return string json:itemFulfillment - Retrieved record 
    * @meta [default] nsError - Error response 
    */
    public function getRecord($id = null, $expandSubResources = null)
    {
        $parts = [];
        $path = "/itemFulfillment/$id";
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
    * PATCH /itemFulfillment/{id}
    * 
    * @param $body {itemFulfillment}
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
        $path = "/itemFulfillment/$id";
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
    * PUT /itemFulfillment/{id}
    * 
    * @param $body {itemFulfillment}
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
        $path = "/itemFulfillment/$id";
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
