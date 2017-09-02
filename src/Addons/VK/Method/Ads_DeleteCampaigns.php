<?php

namespace Bdb\Addons\VK\Method;

/**
 * Archives advertising campaigns.
 */
class Ads_DeleteCampaigns extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('ads.deleteCampaigns');
    }
    /**
     * Advertising account ID.
     *
     * {"type":"integer"}
     */
    public function account_id(integer $account_id) : Ads_DeleteCampaigns
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * Serialized JSON array with IDs of deleted campaigns.
     *
     * {"type":"string"}
     */
    public function ids(string $ids) : Ads_DeleteCampaigns
    {
        $this->params['ids'] = $ids;
        return $this;
    }
}