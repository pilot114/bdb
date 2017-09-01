<?php

namespace Bdb\Addons\VK\Method;

/**
 * Unpins the post on wall.
 */
class Unpin
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * ID of the user or community that owns the wall. By default, current user ID. Use a negative value to designate a community ID.
     *
     * {"type":"integer"}
     */
    public function _owner_id(integer $_owner_id) : Unpin
    {
        $this->params['_owner_id'] = $_owner_id;
        return $this;
    }
    /**
     * Post ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function post_id(integer $post_id) : Unpin
    {
        $this->params['post_id'] = $post_id;
        return $this;
    }
}