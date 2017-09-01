<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns the names of all variables.
 */
class GetKeys
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * user id, whose variables names are returned if they were requested with a server method.
     *
     * {"type":"integer","minimum":0}
     */
    public function _user_id(integer $_user_id) : GetKeys
    {
        $this->params['_user_id'] = $_user_id;
        return $this;
    }
    /**
     * amount of variable names the info needs to be collected from.
     *
     * {"type":"integer","minimum":0,"maximum":1000,"default":100}
     */
    public function _count(integer $_count) : GetKeys
    {
        $this->params['_count'] = $_count;
        return $this;
    }
}