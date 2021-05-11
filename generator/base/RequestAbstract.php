<?php
declare(strict_types=1);

class RequestAbstract
{
    const EXTERNAL_ID_LOOKUP_PREFIX = 'eid:';
    const RECORD_API_VERSION = '1.0';
    const SIGNATURE_METHOD = 'HMAC-SHA256';
    const BASE_URL_PATTERN = 'https://%s.suitetalk.api.netsuite.com/services/rest/record/v1';
    const ERROR_CODE_USER_ERROR_OR_INVALID_INTERNAL_ID = 'USER_ERROR',
        ERROR_CODE_NONEXISTENT_EXTERNAL_ID = 'NONEXISTENT_EXTERNAL_ID';

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
     * @param array $params
     * @param string|array $body
     * @param int $tries
     * @param array $additionalHeaders
     * @return array
     * @throws NetsuiteException
     */
    protected function _makeRequest($method, $path, $params = [], $body = '', $additionalHeaders = [], $tries = 3)
    {
        for ($i = 1; $i <= $tries; $i++) {
            try {
                $json = [];
                $generatedParams = $this->_generateParams();
                $signatureParams = array_merge(
                    $params,
                    [
                        'oauth_consumer_key'        => rawurlencode(self::$_config['consumer_key']),
                        'oauth_nonce'               => rawurlencode($generatedParams['nonce']),
                        'oauth_signature_method'    => rawurlencode(self::SIGNATURE_METHOD),
                        'oauth_timestamp'           => rawurlencode($generatedParams['time']),
                        'oauth_token'               => rawurlencode(self::$_config['token_id']),
                        'oauth_version'             => self::RECORD_API_VERSION
                    ]
                );
                ksort($signatureParams);
                $baseString = sprintf(
                    '%s&%s&%s',
                    $method,
                    rawurlencode($this->_baseurl . $path),
                    rawurlencode(
                        http_build_query(
                            $signatureParams,
                            '',
                            '&',
                            PHP_QUERY_RFC3986
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
                $url = $this->_baseurl . $path;
                if ($method === 'GET' && $params) {
                    $url .= '?' . http_build_query($params);
                }

                $curlParams = [
                    CURLOPT_URL             => $url,
                    CURLOPT_RETURNTRANSFER  => true,
                    CURLOPT_ENCODING        => "",
                    CURLOPT_MAXREDIRS       => 10,
                    CURLOPT_TIMEOUT         => 0,
                    CURLOPT_FOLLOWLOCATION  => true,
                    CURLOPT_HTTP_VERSION    => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST   => $method,
                    CURLOPT_HTTPHEADER      => $header,
                ];
                if ($body) {
                    if (is_array($body)) {
                        $body = json_encode($body);
                    }
                    $curlParams[CURLOPT_POSTFIELDS] = $body;
                }
                curl_setopt_array($curl, $curlParams);
                $response = curl_exec($curl);
                $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
                curl_close($curl);
                if ($response) {
                    $json = json_decode($response, true);

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

                    if (isset($json['status']) && is_numeric($json['status']) && !$this->_isHttpOk($json['status'])) {
                        usleep(100 * $i);
                        throw new NetsuiteException(
                            sprintf(
                                "[HTTP:%d] NS Request Failed, tries: %d, method: %s, path: %s, json: %s",
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
                $errorCode = isset($json['o:errorDetails'][0]['o:errorCode'])
                    ? $json['o:errorDetails'][0]['o:errorCode']
                    : null;
                $isUserError = $errorCode === self::ERROR_CODE_USER_ERROR_OR_INVALID_INTERNAL_ID;
                $isNotExist = $errorCode === self::ERROR_CODE_NONEXISTENT_EXTERNAL_ID;
                if (!$isUserError && !$isNotExist) {
                    echo sprintf(
                        "[%d/%d] Request failed: %s %s (params:%s|body:%s), %s\n",
                        $i,
                        $tries,
                        $method,
                        $path,
                        json_encode($params),
                        json_encode($body),
                        ($i > $tries) ? 'Failed.' : 'Retrying...'
                    );
                }
                if ($isUserError || $isNotExist || $i === $tries) {
                    throw $e;
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
     * @param stdClass $config
     */
    public function setConfig($config)
    {
        self::$_config = $config;
    }

    /**
     * Returns non empty args as an alphabetically sorted array
     *
     * @param array $args
     * @return array
     */
    protected function _argsToHttpParams($args)
    {
        $params = [];
        foreach ($args as $name => $value) {
            if ($value !== null) {
                $params[$name] = $value;
            }
        }
        ksort($params);

        return $params;
    }
}
