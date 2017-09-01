<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of campaigns in an advertising account.
 */
class GetCampaigns
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
    public function account_id(integer $account_id) : GetCampaigns
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * 'For advertising agencies'. ID of the client advertising campaigns are retrieved from.
     *
     * {"type":"integer"}
     */
    public function _client_id(integer $_client_id) : GetCampaigns
    {
        $this->params['_client_id'] = $_client_id;
        return $this;
    }
    /**
     * Flag that specifies whether archived ads shall be shown.; *0 — show only active campaigns;; *1 — show all campaigns.;
     *
     * {"type":"boolean"}
     */
    public function _include_deleted(boolean $_include_deleted) : GetCampaigns
    {
        $this->params['_include_deleted'] = $_include_deleted;
        return $this;
    }
    /**
     * Filter of advertising campaigns to show. ; Serialized JSON array with campaign IDs. Only campaigns that exist in 'campaign_ids' and belong to the specified advertising account will be shown. If the parameter is null, all campaigns will be shown.;
     *
     * {"type":"string"}
     */
    public function _campaign_ids(string $_campaign_ids) : GetCampaigns
    {
        $this->params['_campaign_ids'] = $_campaign_ids;
        return $this;
    }
}