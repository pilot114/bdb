<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns information about reposts of a post on user wall or community wall.
 */
class GetReposts
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return true;
    }
    /**
     * User ID or community ID. By default, current user ID. Use a negative value to designate a community ID.
     *
     * {"type":"integer"}
     */
    public function _owner_id(integer $_owner_id) : GetReposts
    {
        $this->params['_owner_id'] = $_owner_id;
        return $this;
    }
    /**
     * Post ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function _post_id(integer $_post_id) : GetReposts
    {
        $this->params['_post_id'] = $_post_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of reposts.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $_offset) : GetReposts
    {
        $this->params['_offset'] = $_offset;
        return $this;
    }
    /**
     * Number of reposts to return.
     *
     * {"type":"integer","minimum":0,"default":20,"maximum":1000}
     */
    public function _count(integer $_count) : GetReposts
    {
        $this->params['_count'] = $_count;
        return $this;
    }
}