<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of user IDs of a user's friends who are online.
 */
class GetOnline
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * User ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function _user_id(integer $_user_id) : GetOnline
    {
        $this->params['_user_id'] = $_user_id;
        return $this;
    }
    /**
     * Friend list ID. If this parameter is not set, information about all online friends is returned.
     *
     * {"type":"integer","minimum":0}
     */
    public function _list_id(integer $_list_id) : GetOnline
    {
        $this->params['_list_id'] = $_list_id;
        return $this;
    }
    /**
     * '1' — to return an additional 'online_mobile' field; '0' — (default);
     *
     * {"type":"boolean"}
     */
    public function _online_mobile(boolean $_online_mobile) : GetOnline
    {
        $this->params['_online_mobile'] = $_online_mobile;
        return $this;
    }
    /**
     * Sort order:; 'random' — random order
     *
     * {"type":"string"}
     */
    public function _order(string $_order) : GetOnline
    {
        $this->params['_order'] = $_order;
        return $this;
    }
    /**
     * Number of friends to return.
     *
     * {"type":"integer","minimum":0}
     */
    public function _count(integer $_count) : GetOnline
    {
        $this->params['_count'] = $_count;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of friends.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $_offset) : GetOnline
    {
        $this->params['_offset'] = $_offset;
        return $this;
    }
}