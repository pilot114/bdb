<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns information specifying whether a user is a member of a community.
 */
class IsMember
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return true;
    }
    /**
     * ID or screen name of the community.
     *
     * {"type":"string"}
     */
    public function group_id(string $group_id) : IsMember
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * User ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function _user_id(integer $_user_id) : IsMember
    {
        $this->params['_user_id'] = $_user_id;
        return $this;
    }
    /**
     * User IDs.
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function _user_ids(array $_user_ids) : IsMember
    {
        $this->params['_user_ids'] = $_user_ids;
        return $this;
    }
    /**
     * '1' — to return an extended response with additional fields.; By default: '0'.
     *
     * {"type":"boolean"}
     */
    public function _extended(boolean $_extended) : IsMember
    {
        $this->params['_extended'] = $_extended;
        return $this;
    }
}