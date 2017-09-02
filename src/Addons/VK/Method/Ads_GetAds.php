<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns number of ads.
 */
class Ads_GetAds extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('ads.getAds');
    }
    /**
     * Advertising account ID.
     *
     * {"type":"int"}
     */
    public function account_id(int $account_id) : Ads_GetAds
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * 'Available and required for advertising agencies.' ID of the client ads are retrieved from.
     *
     * {"type":"int"}
     */
    public function _client_id(int $client_id) : Ads_GetAds
    {
        $this->params['client_id'] = $client_id;
        return $this;
    }
    /**
     * Flag that specifies whether archived ads shall be shown:; *0 — show only active ads;; *1 — show all ads.;
     *
     * {"type":"boolean"}
     */
    public function _include_deleted(boolean $include_deleted) : Ads_GetAds
    {
        $this->params['include_deleted'] = $include_deleted;
        return $this;
    }
    /**
     * Filter by advertising campaigns. ; Serialized JSON array with campaign IDs. If the parameter is null, ads of all campaigns will be shown.;
     *
     * {"type":"string"}
     */
    public function _campaign_ids(string $campaign_ids) : Ads_GetAds
    {
        $this->params['campaign_ids'] = $campaign_ids;
        return $this;
    }
    /**
     * Filter by ads. ; Serialized JSON array with ad IDs. If the parameter is null, all ads will be shown.;
     *
     * {"type":"string"}
     */
    public function _ad_ids(string $ad_ids) : Ads_GetAds
    {
        $this->params['ad_ids'] = $ad_ids;
        return $this;
    }
    /**
     * Limit of number of returned ads. Used only if ad_ids parameter is null, and 'campaign_ids' parameter contains ID of only one campaign.
     *
     * {"type":"int"}
     */
    public function _limit(int $limit) : Ads_GetAds
    {
        $this->params['limit'] = $limit;
        return $this;
    }
    /**
     * Offset. Used in the same cases as 'limit' parameter.
     *
     * {"type":"int"}
     */
    public function _offset(int $offset) : Ads_GetAds
    {
        $this->params['offset'] = $offset;
        return $this;
    }
}