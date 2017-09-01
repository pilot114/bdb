<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of managers and supervisors of advertising account.
 */
class GetOfficeUsers
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
    public function account_id(integer $account_id) : GetOfficeUsers
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
}