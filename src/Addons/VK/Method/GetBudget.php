<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns current budget of the advertising account.
 */
class GetBudget
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
    public function account_id(integer $account_id) : GetBudget
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
}