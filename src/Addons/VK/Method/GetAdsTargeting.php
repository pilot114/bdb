<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns ad targeting parameters.
 */
class GetAdsTargeting
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
    public function account_id(integer $account_id) : GetAdsTargeting
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * 'For advertising agencies.' ID of the client ads are retrieved from.
     *
     * {"type":"integer"}
     */
    public function _client_id(integer $_client_id) : GetAdsTargeting
    {
        $this->params['_client_id'] = $_client_id;
        return $this;
    }
    /**
     * flag that specifies whether archived ads shall be shown:; *0 — show only active ads;; *1 — show all ads.
     *
     * {"type":"boolean"}
     */
    public function _include_deleted(boolean $_include_deleted) : GetAdsTargeting
    {
        $this->params['_include_deleted'] = $_include_deleted;
        return $this;
    }
    /**
     * Filter by advertising campaigns.; Serialized JSON array with campaign IDs. If the parameter is null, ads of all campaigns will be shown.;
     *
     * {"type":"string"}
     */
    public function _campaign_ids(string $_campaign_ids) : GetAdsTargeting
    {
        $this->params['_campaign_ids'] = $_campaign_ids;
        return $this;
    }
    /**
     * Filter by ads.; Serialized JSON array with ad IDs. If the parameter is null, all ads will be shown.
     *
     * {"type":"string"}
     */
    public function _ad_ids(string $_ad_ids) : GetAdsTargeting
    {
        $this->params['_ad_ids'] = $_ad_ids;
        return $this;
    }
    /**
     * Limit of number of returned ads. Used only if 'ad_ids' parameter is null, and 'campaign_ids' parameter contains ID of only one campaign.
     *
     * {"type":"integer"}
     */
    public function _limit(integer $_limit) : GetAdsTargeting
    {
        $this->params['_limit'] = $_limit;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of results.
     *
     * {"type":"integer"}
     */
    public function _offset(integer $_offset) : GetAdsTargeting
    {
        $this->params['_offset'] = $_offset;
        return $this;
    }
}