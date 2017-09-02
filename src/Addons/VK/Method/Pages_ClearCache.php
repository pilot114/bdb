<?php

namespace Bdb\Addons\VK\Method;

/**
 * Allows to clear the cache of particular 'external' pages which may be attached to VK posts.
 */
class Pages_ClearCache extends \Bdb\Addons\VK\BaseMethod
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return true;
    }
    public function __construct($client, $defaultQuery)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('pages.clearCache');
    }
    /**
     * Address of the page where you need to refesh the cached version
     *
     * {"type":"string"}
     */
    public function url(string $url) : Pages_ClearCache
    {
        $this->params['url'] = $url;
        return $this;
    }
}