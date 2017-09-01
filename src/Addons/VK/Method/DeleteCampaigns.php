<?php

namespace Bdb\Addons\VK\Method;

/**
 * Archives advertising campaigns.
 */
class DeleteCampaigns
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
    public function account_id(integer $account_id) : DeleteCampaigns
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * Serialized JSON array with IDs of deleted campaigns.
     *
     * {"type":"string"}
     */
    public function ids(string $ids) : DeleteCampaigns
    {
        $this->params['ids'] = $ids;
        return $this;
    }
}