<?php

namespace Bdb\Addons\VK\Method;

/**
 * Edits advertising campaigns.
 */
class UpdateCampaigns
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
    public function account_id(integer $account_id) : UpdateCampaigns
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * Serialized JSON array of objects that describe changes in campaigns. Description of 'campaign_mod' objects see below.
     *
     * {"type":"string"}
     */
    public function data(string $data) : UpdateCampaigns
    {
        $this->params['data'] = $data;
        return $this;
    }
}