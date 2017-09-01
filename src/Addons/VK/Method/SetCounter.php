<?php

namespace Bdb\Addons\VK\Method;

/**
 * Sets a counter which is shown to the user in bold in the left menu.
 */
class SetCounter
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
    public function _counters(array $_counters) : SetCounter
    {
        $this->params['_counters'] = $_counters;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"integer","minimum":0}
     */
    public function _user_id(integer $_user_id) : SetCounter
    {
        $this->params['_user_id'] = $_user_id;
        return $this;
    }
    /**
     * counter value.
     *
     * {"type":"integer"}
     */
    public function _counter(integer $_counter) : SetCounter
    {
        $this->params['_counter'] = $_counter;
        return $this;
    }
}