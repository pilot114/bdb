<?php

namespace Bdb\Addons\VK\Method;

/**
 * Sets user game level in the application which can be seen by his/her friends.
 */
class SetUserLevel
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * not description
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _levels(array $_levels) : SetUserLevel
    {
        $this->params['_levels'] = $_levels;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"integer","minimum":0}
     */
    public function _user_id(integer $_user_id) : SetUserLevel
    {
        $this->params['_user_id'] = $_user_id;
        return $this;
    }
    /**
     * level value.
     *
     * {"type":"integer","minimum":0}
     */
    public function _level(integer $_level) : SetUserLevel
    {
        $this->params['_level'] = $_level;
        return $this;
    }
}