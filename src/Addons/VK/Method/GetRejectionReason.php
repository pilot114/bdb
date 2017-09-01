<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a reason of ad rejection for pre-moderation.
 */
class GetRejectionReason
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
    public function account_id(integer $account_id) : GetRejectionReason
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * Ad ID.
     *
     * {"type":"integer"}
     */
    public function ad_id(integer $ad_id) : GetRejectionReason
    {
        $this->params['ad_id'] = $ad_id;
        return $this;
    }
}