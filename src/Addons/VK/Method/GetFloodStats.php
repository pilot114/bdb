<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns information about current state of a counter — number of remaining runs of methods and time to the next counter nulling in seconds.
 */
class GetFloodStats
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
    public function account_id(integer $account_id) : GetFloodStats
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
}