<?php

class SuiteQL extends RequestAbstract
{
    const BASE_URL_PATTERN = 'https://%s.suitetalk.api.netsuite.com/services/rest/query/v1/suiteql';
    const SUITEQL_METHOD = 'POST';

    /**
     * @param string $sql
     * @return array|stdClass
     * @throws NetsuiteException
     * @todo Add ?limit paramter to the path + fix compatability with oauth following this
     */
    public function query($sql)
    {
        $method = self::SUITEQL_METHOD;
        $path = '';
        $body = json_encode(['q' => $sql]);
        $additionalHeaders = ['Prefer: transient'];

        return $this->_makeRequest($method, $path, $body, $additionalHeaders);
    }
}
