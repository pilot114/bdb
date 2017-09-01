<?php

namespace Bdb\Addons\VK\Method;

/**
 * Creates a new friend list for the current user.
 */
class AddList
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Name of the friend list.
     *
     * {"type":"string"}
     */
    public function name(string $name) : AddList
    {
        $this->params['name'] = $name;
        return $this;
    }
    /**
     * IDs of users to be added to the friend list.;
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function _user_ids(array $_user_ids) : AddList
    {
        $this->params['_user_ids'] = $_user_ids;
        return $this;
    }
}