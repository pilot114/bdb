<?php

namespace Bdb\Addons\VK\Method;

/**
 * Sets a new status for the current user.
 */
class Set
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Text of the new status.
     *
     * {"type":"string"}
     */
    public function _text(string $_text) : Set
    {
        $this->params['_text'] = $_text;
        return $this;
    }
    /**
     * Identifier of a community to set a status in. If left blank the status is set to current user.
     *
     * {"type":"integer","minimum":0}
     */
    public function _group_id(integer $_group_id) : Set
    {
        $this->params['_group_id'] = $_group_id;
        return $this;
    }
}