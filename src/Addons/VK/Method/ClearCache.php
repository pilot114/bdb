<?php

namespace Bdb\Addons\VK\Method;

/**
 * Allows to clear the cache of particular 'external' pages which may be attached to VK posts.
 */
class ClearCache
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return true;
    }
    /**
     * Address of the page where you need to refesh the cached version
     *
     * {"type":"string"}
     */
    public function url(string $url) : ClearCache
    {
        $this->params['url'] = $url;
        return $this;
    }
}