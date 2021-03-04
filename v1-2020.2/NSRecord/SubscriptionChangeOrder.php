<?php
class NSRecord_SubscriptionChangeOrder extends RequestAbstract
{
   /**
    * [subscriptionChangeOrder]
    * This record is available as a beta record.
    *
    * @var array
    */
    public static $schema = [
        'action',                  // string enum(ACTIVATE, MODIFY_PRICING, SUSPEND, REACTIVATE, RENEW, TERMINATE)
        'approvaldate',            // string
        'approvalstatus',          // string enum(PENDING_APPROVAL, APPROVED, REJECTED)
        'autoName',                // bool
        'billingaccount',          // BillingAccount
        'changeOrderLine',         // SubscriptionChangeOrderChangeOrderLineCollection
        'createdby',               // string
        'customForm',              // string enum(-10916, -10915, -10914, -20961, -10230, -893, -892, -410, -891, -770)
        'customer',                // Customer
        'datecreated',             // string
        'dateformat',              // string
        'effectivedate',           // string
        'externalId',              // string
        'hascustomfieldschanged',  // string
        'id',                      // string
        'idNumber',                // string
        'isqualifiedforrenewalextend',// bool
        'isqualifiedforrenewalnewsales',// bool
        'linestatusnewvalue',      // string
        'links',                   // NsLink, [read_only]
        'memo',                    // string
        'modificationtype',        // string enum(NEW_CHURN, UPSELL_DOWNSELL, IGNORED)
        'newsubline',              // SubscriptionChangeOrderNewsublineCollection
        'reactivationoption',      // string enum(BILL_FOR_THE_SUSPENDED_PERIOD, BILL_FROM_THE_REACTIVATION_DATE)
        'refName',                 // string, [read_only]
        'renewalenddate',          // string
        'renewalmethod',           // string enum(, EXTEND_EXISTING_SUBSCRIPTION, CREATE_NEW_SUBSCRIPTION)
        'renewalplan',             // SubscriptionPlan
        'renewalpricebook',        // PriceBook
        'renewalstartdate',        // string
        'renewalsteps',            // SubscriptionChangeOrderRenewalstepsCollection
        'renewalterm',             // NsResource
        'renewaltrantype',         // string enum(VendPymt, CustCred, ItemShip, Check, RevContr, Journal, CustChrg, RevArrng, GLAdj, InvReval)
        'requestoffcycleinvoice',  // bool
        'requestor',               // Employee
        'subline',                 // SubscriptionChangeOrderSublineCollection
        'subscription',            // Subscription
        'subscriptionchangeorderstatus',// string enum(ACTIVE, VOIDED)
        'subscriptionplan',        // SubscriptionPlan
        'subsidiary',              // Subsidiary
        'whichfieldschanged',      // string
    ];    

   /**
    * GET /subscriptionChangeOrder
    * 
    * @param string $q                 Search query used to filter results. (in query)
    * @param int $limit                The limit used to specify the number of results on a single page. (in query)
    * @param int $offset               The offset used for selecting a specific page of results. (in query)
    * @return string json:subscriptionChangeOrderCollection - List of records 
    * @meta [default] nsError - Error response 
    */
    public function getListOfRecords($q = null, $limit = null, $offset = null)
    {
        $parts = [];
        $path = "/subscriptionChangeOrder";
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
    * POST /subscriptionChangeOrder
    * 
    * @param $body {subscriptionChangeOrder}
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @meta [204 No Content]  - Inserted record 
    * @meta [default] nsError - Error response 
    */
    public function insertRecord($body, $replace = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null)
    {
        $parts = [];
        $path = "/subscriptionChangeOrder";
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
    * DELETE /subscriptionChangeOrder/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @meta [204 No Content]  - Removed record 
    * @meta [default] nsError - Error response 
    */
    public function removeRecord($id = null)
    {
        $path = "/subscriptionChangeOrder/$id";
        $response = $this->_makeRequest('DELETE', $path);

        return $response;
    }

   /**
    * GET /subscriptionChangeOrder/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @param bool $expandSubResources  Set to true to automatically expand all sublists, sublist lines and subrecords on this record. (in query)
    * @return string json:subscriptionChangeOrder - Retrieved record 
    * @meta [default] nsError - Error response 
    */
    public function getRecord($id = null, $expandSubResources = null)
    {
        $parts = [];
        $path = "/subscriptionChangeOrder/$id";
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
    * PATCH /subscriptionChangeOrder/{id}
    * 
    * @param $body {subscriptionChangeOrder}
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
        $path = "/subscriptionChangeOrder/$id";
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
    * PUT /subscriptionChangeOrder/{id}
    * 
    * @param $body {subscriptionChangeOrder}
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
        $path = "/subscriptionChangeOrder/$id";
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
