<?php

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

// Run test request
$vendor = new NSRecord_Vendor();
var_dump($vendor->getRecord(19));