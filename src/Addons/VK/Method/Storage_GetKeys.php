<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns the names of all variables.
 */
class Storage_GetKeys extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('storage.getKeys');
    }
    /**
     * user id, whose variables names are returned if they were requested with a server method.
     *
     * {"type":"integer","minimum":0}
     */
    public function _user_id(integer $user_id) : Storage_GetKeys
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * amount of variable names the info needs to be collected from.
     *
     * {"type":"integer","minimum":0,"maximum":1000,"default":100}
     */
    public function _count(integer $count) : Storage_GetKeys
    {
        $this->params['count'] = $count;
        return $this;
    }
}