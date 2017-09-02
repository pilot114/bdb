<?php

namespace Bdb\Addons\VK\Method;

/**
 * Creates advertising campaigns.
 */
class Ads_CreateCampaigns extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('ads.createCampaigns');
    }
    /**
     * Advertising account ID.
     *
     * {"type":"integer"}
     */
    public function account_id(integer $account_id) : Ads_CreateCampaigns
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * Serialized JSON array of objects that describe created campaigns. Description of 'campaign_specification' objects see below.
     *
     * {"type":"string"}
     */
    public function data(string $data) : Ads_CreateCampaigns
    {
        $this->params['data'] = $data;
        return $this;
    }
}