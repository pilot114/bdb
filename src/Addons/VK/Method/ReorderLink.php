<?php

namespace Bdb\Addons\VK\Method;

/**
 * Allows to reorder links in the community.
 */
class ReorderLink
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Community ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function group_id(integer $group_id) : ReorderLink
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Link ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function link_id(integer $link_id) : ReorderLink
    {
        $this->params['link_id'] = $link_id;
        return $this;
    }
    /**
     * ID of the link after which to place the link with 'link_id'.
     *
     * {"type":"integer","minimum":0}
     */
    public function _after(integer $_after) : ReorderLink
    {
        $this->params['_after'] = $_after;
        return $this;
    }
}