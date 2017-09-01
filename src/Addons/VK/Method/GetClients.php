<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of advertising agency's clients.
 */
class GetClients
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
    public function account_id(integer $account_id) : GetClients
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
}