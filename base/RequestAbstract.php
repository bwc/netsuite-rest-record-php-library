<?php
declare(strict_types=1);

class RequestAbstract
{
    const EXTERNAL_ID_LOOKUP_PREFIX = 'eid:';
    const RECORD_API_VERSION = '1.0';
    const SIGNATURE_METHOD = 'HMAC-SHA256';
    const BASE_URL_PATTERN = 'https://%s.suitetalk.api.netsuite.com/services/rest/record/v1';

    /**
     * @var array
     */
    public static $schema = [];

    /**
     * @var array
     */
    private static $_config = [];

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
        if (self::$_config === []) {
            self::$_config = $loader->getConfig();
        }
        $this->_baseurl = sprintf(static::BASE_URL_PATTERN, self::$_config['account_id']);
    }

    /**
     * @param string $method
     * @param string $path
     * @param string $body
     * @param int $tries
     * @param array $additionalHeaders
     * @return stdClass
     * @throws NetsuiteException
     */
    protected function _makeRequest($method, $path, $body = null, $additionalHeaders = [], $tries = 3)
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
                            rawurlencode(self::$_config['consumer_key']),
                            rawurlencode($generatedParams['nonce']),
                            rawurlencode(self::SIGNATURE_METHOD),
                            rawurlencode($generatedParams['time']),
                            rawurlencode(self::$_config['token_id']),
                            rawurlencode(self::RECORD_API_VERSION)
                        )
                    )
                );
                $key = sprintf(
                    '%s&%s',
                    rawurlencode(self::$_config['consumer_secret']),
                    rawurlencode(self::$_config['token_secret'])
                );

                $signature = rawurlencode(
                    base64_encode(
                        hash_hmac('sha256', $baseString, $key, true)
                    )
                );

                $header = [
                    sprintf(
                        'Authorization: OAuth%s            realm="%s",oauth_consumer_key="%s",oauth_token="%s",'
                        . 'oauth_signature_method="%s",oauth_timestamp="%s",oauth_nonce="%s",'
                        . 'oauth_version="%s",oauth_signature="%s"',
                        PHP_EOL,
                        self::$_config['realm'],
                        self::$_config['consumer_key'],
                        self::$_config['token_id'],
                        self::SIGNATURE_METHOD,
                        $generatedParams['time'],
                        $generatedParams['nonce'],
                        self::RECORD_API_VERSION,
                        $signature
                    ),
                    'Cookie: NS_ROUTING_VERSION=LAGGING',
                    'Content-Type: application/json',
                ];
                if ($additionalHeaders) {
                    $header = array_merge($header, $additionalHeaders);
                }

                $curl = curl_init();
                $curlParams = [
                    CURLOPT_URL => $this->_baseurl . $path,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => $method,
                    CURLOPT_HTTPHEADER => $header,
                ];
                if ($body) {
                    $curlParams[CURLOPT_POSTFIELDS] = $body;
                }
                curl_setopt_array($curl, $curlParams);
                $response = curl_exec($curl);
                $json = json_decode($response, true);
                $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
                curl_close($curl);

                if (!$this->_isHttpOk($httpCode)) {
                    throw new NetsuiteException(
                        sprintf(
                            '[HTTP:%d] NS Request Failed, tries: %d, no body returned, method: %s, path: %s, json: %s',
                            $httpCode,
                            $tries,
                            $method,
                            $path,
                            $response
                        )
                    );
                }
                if ($response) {
                    if (isset($json['status']) && !$this->_isHttpOk($json['status'])) {
                        usleep(100 * $i);
                        throw new NetsuiteException(
                            sprintf(
                                "[HTTP:]NS Request Failed, tries: %d, method: %s, path: %s, json: %s",
                                $json['status'],
                                $tries,
                                $method,
                                $path,
                                $response
                            )
                        );
                    }
                } else {
                    $json = [
                        'success' => true,
                        'http_code' => $httpCode,
                    ];
                }
                break;
            } catch (NetsuiteException $e) {
                $isUserError = isset($json['o:errorDetails'][0]['o:errorCode'])
                    && $json['o:errorDetails'][0]['o:errorCode'] === 'USER_ERROR';
                if ($isUserError || $i === 2) {
                    throw $e;
                } else {
                    continue;
                }
            }
        }

        return $json;
    }

    /**
     * @param int $code
     * @return bool
     */
    private function _isHttpOk($code)
    {
        return $code >= 200 && $code < 300;
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

    /**
     * @return array
     */
    public function getSchema()
    {
        return static::$schema;
    }

    /**
     * @param stdClass $config
     */
    public function setConfig($config)
    {
        self::$_config = $config;
    }
}
