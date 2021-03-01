<?php
declare(strict_types=1);
$base = dirname(__FILE__);
include_once($base . "/RequestAbstract.php");
include_once($base . "/NetsuiteException.php");
foreach (glob("$base/NSRecord/*.php") as $filename) {
    include_once $filename;
}

class Loader
{
    /**
     * Loads config from config.json
     *
     * @return array
     */
    public function getConfig()
    {
        static $config = null;
        if ($config === null) {
            $config = json_decode(
                file_get_contents(
                    sprintf(
                        '%s/config.json',
                        dirname(__FILE__)
                    )
                )
            );
        }
        $accountId = str_replace('_', '-', strtolower($config->ACCOUNT_ID));

        return [
            'account_id'        => $accountId,
            'realm'             => str_replace('-', '_', strtoupper($config->ACCOUNT_ID)),
            'consumer_key'      => $config->CONSUMER_KEY,
            'consumer_secret'   => $config->CONSUMER_SECRET,
            'token_id'          => $config->TOKEN_ID,
            'token_secret'      => $config->TOKEN_SECRET,
            'api_source'        => $config->API_SOURCE,
        ];
    }
}
