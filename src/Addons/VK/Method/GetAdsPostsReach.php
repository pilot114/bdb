<?php

namespace Bdb\Addons\VK\Method;

/**
 * Allows to get detailed information about the ad post reach.
 */
class GetAdsPostsReach
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Advertising account ID.
     *
     * {"type":"integer"}
     */
    public function account_id(integer $account_id) : GetAdsPostsReach
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * Ads IDS separated by comma.
     *
     * {"type":"string"}
     */
    public function ads_ids(string $ads_ids) : GetAdsPostsReach
    {
        $this->params['ads_ids'] = $ads_ids;
        return $this;
    }
}