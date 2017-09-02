<?php

namespace Bdb\Addons\VK\Method;

/**
 * Checks whether a link is blocked in VK.
 */
class Utils_CheckLink extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('utils.checkLink');
    }
    /**
     * Link to check (e.g., 'http://google.com').
     *
     * {"type":"string"}
     */
    public function url(string $url) : Utils_CheckLink
    {
        $this->params['url'] = $url;
        return $this;
    }
}