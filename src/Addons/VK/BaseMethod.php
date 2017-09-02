<?php

namespace Bdb\Addons\VK;

/**
 * Base class for all methods
 */
abstract class BaseMethod
{
    protected $client;
    protected $params;
    protected $defaultQuery;

    public function __construct($client, $defaultQuery)
    {
        $this->client = $client;
        $this->defaultQuery = $defaultQuery;
    }

    /**
     * @param $method
     * @return \GuzzleHttp\Psr7\Response
     */
    protected function onCall($method)
    {
        $params = array_merge($this->defaultQuery, $this->params);
        return $this->client->get($method, ['query' => $params]);
    }
}