<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a reason of ad rejection for pre-moderation.
 */
class Ads_GetRejectionReason extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('ads.getRejectionReason');
    }
    /**
     * Advertising account ID.
     *
     * {"type":"integer"}
     */
    public function account_id(integer $account_id) : Ads_GetRejectionReason
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * Ad ID.
     *
     * {"type":"integer"}
     */
    public function ad_id(integer $ad_id) : Ads_GetRejectionReason
    {
        $this->params['ad_id'] = $ad_id;
        return $this;
    }
}