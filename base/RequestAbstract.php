<?php
declare(strict_types=1);

class RequestAbstract
{
    const RECORD_API_VERSION = '1.0';
    const SIGNATURE_METHOD = 'HMAC-SHA256';
    const BASE_URL_PATTERN = 'https://%s.suitetalk.api.netsuite.com/services/rest/record/v1';

    /**
     * @var array
     */
    private $_config = [];

    /**
     * @var string
     */
    private $_baseurl = '';

    /**
     * RequestAbstract constructor
     */
    public function __construct()
    {
        $loader = new Loader();
        $this->_config = $loader->getConfig();
        $this->_baseurl = sprintf(self::BASE_URL_PATTERN, $this->_config['account_id']);
    }

    /**
     * @param string $method
     * @param string $path
     * @param int $tries
     * @return stdClass
     * @throws NetsuiteException
     */
    protected function _makeRequest($method, $path, $tries = 3)
    {
        for ($i = 0; $i < $tries; $i++) {
            try {
                $generatedParams = $this->_generateParams();
                $baseString = sprintf(
                    '%s&%s&%s',
                    $method,
                    rawurlencode($this->_baseurl . $path),
                    rawurlencode(
                        sprintf(
                            'oauth_consumer_key=%s&oauth_nonce=%s&oauth_signature_method=%s'
                            . '&oauth_timestamp=%s&oauth_token=%s&oauth_version=%s',
                            rawurlencode($this->_config['consumer_key']),
                            rawurlencode($generatedParams['nonce']),
                            rawurlencode(self::SIGNATURE_METHOD),
                            rawurlencode($generatedParams['time']),
                            rawurlencode($this->_config['token_id']),
                            rawurlencode(self::RECORD_API_VERSION)
                        )
                    )
                );
                $key = sprintf(
                    '%s&%s',
                    rawurlencode($this->_config['consumer_secret']),
                    rawurlencode($this->_config['token_secret'])
                );

                $signature = base64_encode(hash_hmac('sha256', $baseString, $key, true));

                $header = [
                    sprintf(
                        'Authorization: OAuth%s            realm="%s",oauth_consumer_key="%s",oauth_token="%s",'
                        . 'oauth_signature_method="%s",oauth_timestamp="%s",oauth_nonce="%s",'
                        . 'oauth_version="%s",oauth_signature="%s"',
                        PHP_EOL,
                        $this->_config['realm'],
                        $this->_config['consumer_key'],
                        $this->_config['token_id'],
                        self::SIGNATURE_METHOD,
                        $generatedParams['time'],
                        $generatedParams['nonce'],
                        self::RECORD_API_VERSION,
                        $signature
                    ),
                    'Cookie: NS_ROUTING_VERSION=LAGGING',
                ];

                $curl = curl_init();
                curl_setopt_array(
                    $curl,
                    [
                        CURLOPT_URL => $this->_baseurl . $path,
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING => "",
                        CURLOPT_MAXREDIRS => 10,
                        CURLOPT_TIMEOUT => 0,
                        CURLOPT_FOLLOWLOCATION => true,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => $method,
                        CURLOPT_HTTPHEADER => $header,
                    ]
                );
                $response = curl_exec($curl);
                curl_close($curl);

                if (!is_string($response)) {
                    throw new NetsuiteException(
                        "NS Request Failed, tries: $tries, no body returned, method: $method, path: $path"
                    );
                }
                $json = json_decode($response);
                if (isset($json->status) && $json->status < 200 || $json->status >= 300) {
                    usleep(100 * $i);
                    throw new NetsuiteException(
                        sprintf(
                            "NS Request Failed, tries: %d, status: %d, method: %s, path: %s, json: %s",
                            $tries,
                            $json->status,
                            $method,
                            $path,
                            $response
                        )
                    );
                }
                break;
            } catch (NetsuiteException $e) {
                throw $e;
            }
        }

        return $json;
    }

    /**
     * Generates one off time & nonce
     *
     * @return array
     */
    private function _generateParams()
    {
        return [
            'time' => (string) time(),
            'nonce' => substr(
                str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 20
            ),
        ];
    }
}
