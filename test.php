<?php
declare(strict_types=1);

// Find base directory
$src = '';
foreach (scandir('./') as $fileName) {
    if (preg_match('@^v[\d\.]+-[\d.]+$@', $fileName)) {
        $src = $fileName;
    }
}
if (!$src) {
    echo "Could not find base directory, run script.php first.\n";
    exit;
}

include_once("$src/Loader.php");

// Init
new Loader();

/**
 * Vendor Tests
 */
echo "Test GET for Vendor record...\n";
$vendor = new NSRecord_Vendor();
$result =$vendor->getRecord(19);
var_dump(isset($result->links));
echo "Test Insert for Vendor record...\n";
$minimalVendorData = [
    'companyName' => 'Company ' . time(),
    'subsidiary' => ['id' => 1]
];
$result = $vendor->insertRecord(json_encode($minimalVendorData));
var_dump(isset($result->success));

/**
 * Customer Tests
 */
echo "Test GET for Customer record...\n";
$customer = new NSRecord_Customer();
$result = $customer->getRecord();
var_dump(isset($result->links));
$minimalCustomerData = [
    'companyName' => 'Company ' . time(),
    'email' => 'customer@company.com',
    'parentSubsidiary' => 1,
];
echo "Test Insert for Customer record...\n";
$result = $customer->insertRecord(json_encode($minimalCustomerData));
var_dump(isset($result->success));
