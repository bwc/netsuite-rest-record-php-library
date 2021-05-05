<?php
declare(strict_types=1);
include_once('../library/Loader.php');

/***
 * Configure file library/config.json
 */

// Init
new Loader();

/**
 * Quick Vendor Tests
 */
echo "Test GET for Vendor record...\n";
$vendor = new NSRecord_Vendor();
$result = $vendor->getRecord(19);
var_dump(isset($result['links']));

echo "Test Insert for Vendor record...\n";
$minimalVendorData = [
    'companyName' => 'Company ' . time(),
    'subsidiary' => ['id' => 1]
];
$result = $vendor->insertRecord(json_encode($minimalVendorData));
var_dump(isset($result['success']));

/**
 * Quick Customer Tests
 */
echo "Test GET for Customer record...\n";
$customer = new NSRecord_Customer();
$result = $customer->getRecord();
var_dump(isset($result['links']));

echo "Test Insert for Customer record...\n";
$minimalCustomerData = [
    'companyName' => 'Company ' . time(),
    'email' => 'customer@company.com',
    'parentSubsidiary' => 1,
    'subsidiary' => ['id' => 1]
];
$result = $customer->insertRecord(json_encode($minimalCustomerData));
var_dump(isset($result['success']));
