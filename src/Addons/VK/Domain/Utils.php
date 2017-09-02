<?php

namespace Bdb\Addons\VK\Domain;

use Bdb\Addons\VK\Method;
class Utils
{
    protected $client;
    protected $defaultQuery;
    public function __construct($client, $defaultQuery)
    {
        $this->client = $client;
        $this->defaultQuery = $defaultQuery;
    }
    public function checkLink() : Method\Utils_CheckLink
    {
        return new Method\Utils_CheckLink($this->client, $this->defaultQuery);
    }
    public function resolveScreenName() : Method\Utils_ResolveScreenName
    {
        return new Method\Utils_ResolveScreenName($this->client, $this->defaultQuery);
    }
    public function getServerTime() : Method\Utils_GetServerTime
    {
        return new Method\Utils_GetServerTime($this->client, $this->defaultQuery);
    }
}