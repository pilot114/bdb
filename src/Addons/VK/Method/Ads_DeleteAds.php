<?php

namespace Bdb\Addons\VK\Method;

/**
 * Archives ads.
 */
class Ads_DeleteAds extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('ads.deleteAds');
    }
    /**
     * Advertising account ID.
     *
     * {"type":"integer"}
     */
    public function account_id(integer $account_id) : Ads_DeleteAds
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * Serialized JSON array with ad IDs.
     *
     * {"type":"string"}
     */
    public function ids(string $ids) : Ads_DeleteAds
    {
        $this->params['ids'] = $ids;
        return $this;
    }
}