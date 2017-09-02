<?php

namespace Bdb\Addons\VK\Method;

/**
 * Creates ads.
 */
class Ads_CreateAds extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('ads.createAds');
    }
    /**
     * Advertising account ID.
     *
     * {"type":"integer"}
     */
    public function account_id(integer $account_id) : Ads_CreateAds
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * Serialized JSON array of objects that describe created ads. Description of 'ad_specification' objects see below.
     *
     * {"type":"string"}
     */
    public function data(string $data) : Ads_CreateAds
    {
        $this->params['data'] = $data;
        return $this;
    }
}