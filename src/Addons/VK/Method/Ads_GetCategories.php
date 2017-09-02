<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of possible ad categories.
 */
class Ads_GetCategories extends \Bdb\Addons\VK\BaseMethod
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    public function __construct($client, $defaultQuery)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('ads.getCategories');
    }
    /**
     * Language. The full list of supported languages is [vk.com/dev/api_requests|here].
     *
     * {"type":"string"}
     */
    public function _lang(string $lang) : Ads_GetCategories
    {
        $this->params['lang'] = $lang;
        return $this;
    }
}