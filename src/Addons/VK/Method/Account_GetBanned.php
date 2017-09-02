<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a user's blacklist.
 */
class Account_GetBanned extends \Bdb\Addons\VK\BaseMethod
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    public function __construct($client, $defaultQuery)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('account.getBanned');
    }
    /**
     * Offset needed to return a specific subset of results.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $offset) : Account_GetBanned
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of results to return.
     *
     * {"type":"integer","minimum":0,"default":20,"maximum":200}
     */
    public function _count(integer $count) : Account_GetBanned
    {
        $this->params['count'] = $count;
        return $this;
    }
}