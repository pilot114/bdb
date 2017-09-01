<?php

namespace Bdb\Addons\VK\Method;

/**
 * Archives ads.
 */
class DeleteAds
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
    public function account_id(integer $account_id) : DeleteAds
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * Serialized JSON array with ad IDs.
     *
     * {"type":"string"}
     */
    public function ids(string $ids) : DeleteAds
    {
        $this->params['ids'] = $ids;
        return $this;
    }
}