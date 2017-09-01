<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of target groups.
 */
class GetTargetGroups
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
    public function account_id(integer $account_id) : GetTargetGroups
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * 'Only for advertising agencies.'; ID of the client with the advertising account where the group will be created.;
     *
     * {"type":"integer"}
     */
    public function _client_id(integer $_client_id) : GetTargetGroups
    {
        $this->params['_client_id'] = $_client_id;
        return $this;
    }
    /**
     * '1' — to return pixel code.
     *
     * {"type":"boolean"}
     */
    public function _extended(boolean $_extended) : GetTargetGroups
    {
        $this->params['_extended'] = $_extended;
        return $this;
    }
}