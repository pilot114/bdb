<?php

namespace Bdb\Addons\VK\Method;

/**
 * Edits ads.
 */
class Ads_UpdateAds extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('ads.updateAds');
    }
    /**
     * Advertising account ID.
     *
     * {"type":"int"}
     */
    public function account_id(int $account_id) : Ads_UpdateAds
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * Serialized JSON array of objects that describe changes in ads. Description of 'ad_edit_specification' objects see below.
     *
     * {"type":"string"}
     */
    public function data(string $data) : Ads_UpdateAds
    {
        $this->params['data'] = $data;
        return $this;
    }
}