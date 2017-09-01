<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of photos in which a user is tagged.
 */
class GetUserPhotos
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
    public function _user_id(integer $_user_id) : GetUserPhotos
    {
        $this->params['_user_id'] = $_user_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of photos. By default, '0'.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $_offset) : GetUserPhotos
    {
        $this->params['_offset'] = $_offset;
        return $this;
    }
    /**
     * Number of photos to return. Maximum value is 1000.
     *
     * {"type":"integer","minimum":0,"default":20,"maximum":1000}
     */
    public function _count(integer $_count) : GetUserPhotos
    {
        $this->params['_count'] = $_count;
        return $this;
    }
    /**
     * '1' — to return an additional 'likes' field; '0' — (default)
     *
     * {"type":"boolean"}
     */
    public function _extended(boolean $_extended) : GetUserPhotos
    {
        $this->params['_extended'] = $_extended;
        return $this;
    }
    /**
     * Sort order:; '1' — by date the tag was added in ascending order; '0' — by date the tag was added in descending order
     *
     * {"type":"string"}
     */
    public function _sort(string $_sort) : GetUserPhotos
    {
        $this->params['_sort'] = $_sort;
        return $this;
    }
}