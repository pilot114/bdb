<?php

namespace Bdb\Addons\VK\Method;

/**
 * Creates advertising campaigns.
 */
class CreateCampaigns
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
    public function account_id(integer $account_id) : CreateCampaigns
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * Serialized JSON array of objects that describe created campaigns. Description of 'campaign_specification' objects see below.
     *
     * {"type":"string"}
     */
    public function data(string $data) : CreateCampaigns
    {
        $this->params['data'] = $data;
        return $this;
    }
}