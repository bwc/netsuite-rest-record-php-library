<?php
class NSRecord_WebSite extends RequestAbstract
{
   /**
    * [webSite]
    * This record is available as a beta record.
    *
    * @var array
    */
    public static $schema = [
        'CREDITSALESREPSONWEB',    // bool
        'CheckoutErrorEmail',      // NsResource
        'DownloadAvailableEmail',  // NsResource
        'GiftCertificateConfEmail',// NsResource
        'GiftCertificateEmail',    // NsResource
        'LicenseCodeEmail',        // NsResource
        'OrderApprovedConfEmail',  // NsResource
        'OrderCancelledConfEmail', // NsResource
        'OrderFulfilledConfEmail', // NsResource
        'OrderReceivedConfEmail',  // NsResource
        'PasswordRecoveryEmail',   // NsResource
        'RegistrationConfEmail',   // NsResource
        'analyticsclickattributes',// string
        'analyticssubmitattributes',// string
        'assignnewcustomerstosite',// bool
        'authorization_url',       // string
        'autoapplypromotionsenabled',// bool
        'autodownloadmedia',       // bool
        'bSendCheckoutErrorEmail', // bool
        'bSendDownloadAvailableEmail',// bool
        'bSendGiftCertificateConfEmail',// bool
        'bSendGiftCertificateEmail',// bool
        'bSendLicenseCodeEmail',   // bool
        'bSendOrderApprovedConfEmail',// bool
        'bSendOrderCancelledConfEmail',// bool
        'bSendOrderFulfilledConfEmail',// bool
        'bSendOrderReceivedConfEmail',// bool
        'bSendPasswordRecoveryEmail',// bool
        'bStrRegistrationConfCopy',// bool
        'bsendregistrationconfemail',// bool
        'bstrapproveordercopy',    // bool
        'bstrcancelordercopy',     // bool
        'bstremailcopy',           // bool
        'bstremailgiftconfcopy',   // bool
        'bstremailgiftcopy',       // bool
        'bstrfulfillordercopy',    // bool
        'cartcolumn',              // WebSiteCartcolumnCollection
        'cartdisplayorder',        // string enum(RECENT_LAST, RECENT_FIRST)
        'cartsharingmode',         // string enum(PER_CUSTOMER, PER_CONTACT)
        'cartupsellitems',         // string enum(UPSELL_FIRST_RELATED_NEXT, ONLY_UPSELL_ITEMS, RELATED_FIRST_UPSELL_NEXT, ONLY_RELATED_ITEMS)
        'categorylistlayout',      // NsResource
        'ccformtemplate',          // string enum(88, 89, -9960, 90, 91, -9965, 92, -9966, 93, -9967)
        'ccrequireauth',           // bool
        'cctemplatecompatible',    // string
        'checkoutdomain',          // string
        'chromaSubsampling',       // bool
        'client_id',               // string
        'client_secret',           // string
        'colorset',                // string
        'commerceapiunifiedmode',  // bool
        'compressedImageQuality',  // string
        'config_url',              // string
        'confpagetrackinghtml',    // string
        'cookiepolicy',            // NsResource
        'createcustomersascompanies',// bool
        'currentidpinfo',          // string
        'custromeregistrationtype',// string enum(OPTANON, MANDATORY, DISALLOWED, ALLANON)
        'defaultapplication',      // NsResource
        'defaultcustomercategory', // CustomerCategory
        'defaulthostingroot',      // NsResource
        'defaultshippingcountry',  // string enum(PR, PS, PT, PW, PY, QA, AD, AE, AF, AG)
        'defaultshippingmethod',   // ShipItem
        'descriptionfontsize',     // int
        'dispfirstlastnameseparately',// bool
        'displaycompanyfield',     // bool
        'displaycustomercode',     // bool
        'displayname',             // string
        'displayunsubscribe',      // bool
        'doctypehtml',             // string
        'dropshipspecorditemsalwaysinstock',// bool
        'emailfooter',             // string
        'emailheader',             // string
        'enableCompression',       // bool
        'enablegaintegration',     // bool
        'entrypoints',             // WebSiteEntrypointsCollection
        'facetfield',              // string
        'fieldset',                // WebSiteFieldsetCollection
        'filtermethodsbycurrency', // bool
        'font',                    // string enum(OCRB, Garamond, Times-Roman, Trebuchet, Univers, OCRA, MS Gothic, Helvetica, BARCODE, Myriad Pro)
        'giftcerteaffectsminamount',// bool
        'hidepaymentpagewhennobalance',// bool
        'id',                      // string
        'idp_login_as_default',    // bool
        'idp_meta_file',           // string
        'igniteedition',           // string enum(STANDARD, ADVANCED)
        'imagedomain',             // string
        'imagefilenameformat',     // string
        'imagefolder',             // NsResource
        'imageitemfielddelimiter', // string
        'imagesize',               // WebSiteImagesizeCollection
        'imagestructurefielddelimiter',// string
        'imageuniquefield',        // NsResource
        'includeuncategorizeditems',// bool
        'includevatwithprices',    // bool
        'internalId',              // int
        'internalname',            // string
        'invalidDescriptiveURLAction',// string enum(1, 2, 3)
        'invoiceformtemplate',     // string enum(88, 89, -9960, 90, 91, -9965, 92, -9966, 93, -9967)
        'invtemplatecompatible',   // string
        'isadvanced',              // bool
        'isinactive',              // bool
        'isprimary',               // string
        'isscriptablecartandcheckout',// bool
        'issuer',                  // string
        'iswebstoreoffline',       // bool
        'iswsdk',                  // bool
        'itemlistlayout',          // NsResource
        'itemtemplateaccountingtitem',// string enum(-134, -178, -177, -133, -136, -135, -179, -174, -130, -173)
        'itemtemplateinformationitem',// string enum(-134, -178, -177, -133, -136, -135, -179, -174, -130, -173)
        'jwks_uri',                // string
        'legacycategorydescriptions',// bool
        'legacydenselistsupport',  // bool
        'legacyimageattributetags',// bool
        'legacynavigationlinks',   // bool
        'legacywelcomepage',       // bool
        'links',                   // NsLink, [read_only]
        'loginallowed',            // bool
        'minimumorderamount',      // float
        'noactivatetabonhostedpages',// bool
        'nonccpaymethodsallowed',  // bool
        'nub',                     // NsResource
        'nubhtml',                 // string
        'oidc_setup_option',       // bool
        'onlinepricelevel',        // PriceLevel
        'outofstockbehavior',      // string enum(ENABLE, ENABLENMSG, DISABLE, REMOVE)
        'outofstockitems',         // bool
        'outputlinebreaksasbr',    // bool
        'pagealign',               // string enum(CENTER, LEFT, RIGHT)
        'pagewidth',               // string
        'pagezoom',                // string enum(0.75, 0.95, 1.75, 1, 2, 1.05, 1.1, 1.2, 1.25, 1.3)
        'passpromocodetocheckout', // bool
        'paymentprocessingprofiles',// NsResourceCollection
        'paypalaccount',           // string
        'presetcheckoutdomainprefix',// string
        'refName',                 // string, [read_only]
        'relateditemsdescription', // string
        'relateditemslayout',      // NsResource
        'relevanceboostweight',    // int
        'requestshippingaddressfirst',// bool
        'requirecompanyfield',     // bool
        'requireloginforpricing',  // bool
        'requireshippinginformation',// bool
        'requiretermsandconditions',// bool
        'sFromCheckoutErrorEmail', // string
        'sFromDownloadAvailableEmail',// string
        'sFromGiftCertificateConfEmail',// string
        'sFromGiftCertificateEmail',// string
        'sFromLicenseCodeEmail',   // string
        'sFromOrderApprovedConfEmail',// string
        'sFromOrderCancelledConfEmail',// string
        'sFromOrderFulfilledConfEmail',// string
        'sFromOrderReceivedConfEmail',// string
        'sFromPasswordRecoveryEmail',// string
        'sFromRegistrationConfEmail',// string
        'sRegistrationConfEmailCopy',// string
        'salesordertype',          // string enum(88, 89, -9960, 90, 91, -9965, 92, -9966, 93, -9967)
        'sapproveordercopyemail',  // string
        'savecreditinfo',          // bool
        'scancelordercopyemail',   // string
        'scripttemplatecreditcard',// string enum(88, 89, -9960, 90, 91, -9965, 92, -9966, 93, -9967)
        'scripttemplateinvoice',   // string enum(88, 89, -9960, 90, 91, -9965, 92, -9966, 93, -9967)
        'searchcategorylistlayout',// NsResource
        'searchfield',             // string
        'searchforcategories',     // bool
        'searchforinformationitems',// bool
        'searchformitemlistlayout',// NsResource
        'searchitemlistlayout',    // NsResource
        'searchlinkform',          // string
        'searchportletdisplay',    // bool
        'searchportletform',       // string
        'semailaddrforerror',      // string
        'sfulfillordercopyemail',  // string
        'shippingestimatorpriority',// string enum(LOWEST_PRICE, WEBSTORE_DEFAULT, COMPANY_DEFAULT, USER_PREVIOUS_PREFERENCE)
        'shipstoallcountries',     // bool
        'shipstocountries',        // string
        'showbillingaddress',      // bool
        'showcartsummaryportlet',  // bool
        'showcookieconsentbanner', // bool
        'showcurrencyportlet',     // bool
        'showextendedcart',        // bool
        'shownavigationportlet',   // bool
        'showordertrackinglink',   // bool
        'showpofieldonpayment',    // bool
        'showquantitypricinginlists',// bool
        'showsavecreditinfo',      // bool
        'showsearchportlet',       // bool
        'showshippingestimator',   // bool
        'showtellafriendlink',     // bool
        'sitecurrency',            // WebSiteSitecurrencyCollection
        'sitelanguage',            // WebSiteSitelanguageCollection
        'siteloginrequired',       // bool
        'siteportletstyle',        // string enum(HEADERBAR, HEADERBARSM, JOINED, BOXED, TRANSPARENT, ROUNDEDCAPS)
        'siteregion',              // string
        'sitetabalignment',        // string enum(CENTER, LEFT, RIGHT)
        'sitetabstyle',            // string enum(STANDARDTABS, TABBAR, LINKS, BUTTONBAR, RECTTABS, CURVEDTABS, DEFAULT)
        'siteusescarttags',        // bool
        'siteusesdropshadows',     // bool
        'sortfield',               // string
        'sstoreemailaddrforcopy',  // string
        'sstoreemailaddrforgiftconfcopy',// string
        'sstoreemailaddrforgiftcopy',// string
        'storealias',              // string
        'storeemail',              // string
        'storetab',                // WebSiteStoretabCollection
        'stripMetadata',           // bool
        'termsandconditionshtml',  // string
        'textgroup',               // string enum(-2)
        'titlefontsize',           // int
        'token_url',               // string
        'upload_method',           // bool
        'upselldescription',       // string
        'upsellitems',             // string enum(UPSELL_FIRST_RELATED_NEXT, ONLY_UPSELL_ITEMS, RELATED_FIRST_UPSELL_NEXT, ONLY_RELATED_ITEMS)
        'upsellitemslayout',       // NsResource
        'upsellminimumcorrelation',// float
        'upsellminimumcount',      // int
        'upsellminimumlift',       // float
        'urlformat',               // string enum(T, F)
        'useurlfileextension',     // bool
        'websitehomepage',         // string
        'websitehomepagetype',     // string
        'websitelogo',             // NsResource
        'websitelogoalign',        // string enum(CENTER, LEFT, RIGHT)
        'websitelogolinkurl',      // string
        'websitescope',            // string enum(SUITE_COMMERCE_IN_STORE, SUITE_COMMERCE, FULL_WEB_STORE, INFO_CATALOG_PRICING, INFO_CATALOG, SUITE_COMMERCE_MY_ACCOUNT, INFO_ONLY, SUITE_COMMERCE_ADVANCED)
        'websitetheme',            // string enum(-101, 99, -100, -103, -102, -104)
        'webstoreadditembehavior', // string enum(SHOWCART, SAMEPAGE)
        'webstoremetatags',        // string
        'wsdkcancelcarturl',       // string
        'wsdkcancelcheckouturl',   // string
        'wsdkcancelloginurl',      // string
        'wsdkcompletecheckouturl', // string
        'wsdkcompleteloginurl',    // string
    ];    

   /**
    * GET /webSite
    * 
    * @param string $q                 Search query used to filter results. (in query)
    * @param int $limit                The limit used to specify the number of results on a single page. (in query)
    * @param int $offset               The offset used for selecting a specific page of results. (in query)
    * @return string json:webSiteCollection - List of records
    * @response [default] nsError - Error response
    */
    public function getListOfRecords($q = null, $limit = null, $offset = null)
    {
        $parts = [];
        $path = "/webSite";
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
    * POST /webSite
    * 
    * @param $body {webSite}
    * @param string $replace           Names of sublists on this record. All lines on these sublists will be replaced with lines from input. Sublists not specified here will have lines added to record. Names are delimited by comma. (in query)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyNameValidationSets strictness of property name validation. (in header)
    * @param string enum(Error, Warning, Ignore) $xNetSuitePropertyValueValidationSets strictness of property value validation. (in header)
    * @response [204 No Content]  - Inserted record
    * @response [default] nsError - Error response
    */
    public function insertRecord($body, $replace = null, $xNetSuitePropertyNameValidation = null, $xNetSuitePropertyValueValidation = null)
    {
        $parts = [];
        $path = "/webSite";
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
    * DELETE /webSite/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @response [204 No Content]  - Removed record
    * @response [default] nsError - Error response
    */
    public function removeRecord($id = null)
    {
        $path = "/webSite/$id";
        $response = $this->_makeRequest('DELETE', $path);

        return $response;
    }

   /**
    * GET /webSite/{id}
    * 
    * @param numeric $id [Required]    Internal identifier (in path)
    * @param bool $expandSubResources  Set to true to automatically expand all sublists, sublist lines and subrecords on this record. (in query)
    * @return string json:webSite - Retrieved record
    * @response [default] nsError - Error response
    */
    public function getRecord($id = null, $expandSubResources = null)
    {
        $parts = [];
        $path = "/webSite/$id";
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
    * PATCH /webSite/{id}
    * 
    * @param $body {webSite}
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
        $path = "/webSite/$id";
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
    * PUT /webSite/{id}
    * 
    * @param $body {webSite}
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
        $path = "/webSite/$id";
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
