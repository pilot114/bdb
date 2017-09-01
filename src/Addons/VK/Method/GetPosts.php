<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of wall posts that the current user has liked.;
 */
class GetPosts
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Offset needed to return a specific subset of posts.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $_offset) : GetPosts
    {
        $this->params['_offset'] = $_offset;
        return $this;
    }
    /**
     * Number of posts to return.
     *
     * {"type":"integer","minimum":0,"default":50}
     */
    public function _count(integer $_count) : GetPosts
    {
        $this->params['_count'] = $_count;
        return $this;
    }
    /**
     * '1' — to return additional 'wall', 'profiles', and 'groups' fields.; ; By default: '0'.
     *
     * {"type":"boolean"}
     */
    public function _extended(boolean $_extended) : GetPosts
    {
        $this->params['_extended'] = $_extended;
        return $this;
    }
}