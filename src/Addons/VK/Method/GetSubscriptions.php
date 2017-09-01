<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of IDs of users and communities followed by the user.
 */
class GetSubscriptions
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return true;
    }
    /**
     * User ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function _user_id(integer $_user_id) : GetSubscriptions
    {
        $this->params['_user_id'] = $_user_id;
        return $this;
    }
    /**
     * '1' — to return a combined list of users and communities; '0' — to return separate lists of users and communities (default)
     *
     * {"type":"boolean"}
     */
    public function _extended(boolean $_extended) : GetSubscriptions
    {
        $this->params['_extended'] = $_extended;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of subscriptions.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $_offset) : GetSubscriptions
    {
        $this->params['_offset'] = $_offset;
        return $this;
    }
    /**
     * Number of users and communities to return.
     *
     * {"type":"integer","minimum":0,"default":20,"maximum":200}
     */
    public function _count(integer $_count) : GetSubscriptions
    {
        $this->params['_count'] = $_count;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $_fields) : GetSubscriptions
    {
        $this->params['_fields'] = $_fields;
        return $this;
    }
}