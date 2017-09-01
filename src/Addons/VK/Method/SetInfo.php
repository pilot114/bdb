<?php

namespace Bdb\Addons\VK\Method;

/**
 * Allows to edit the current account info.
 */
class SetInfo
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Setting name.
     *
     * {"type":"string"}
     */
    public function _name(string $_name) : SetInfo
    {
        $this->params['_name'] = $_name;
        return $this;
    }
    /**
     * Setting value.
     *
     * {"type":"string"}
     */
    public function _value(string $_value) : SetInfo
    {
        $this->params['_value'] = $_value;
        return $this;
    }
}