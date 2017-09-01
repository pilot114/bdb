<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns items list for a community.
 */
class Get
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * ID of an item owner community; "Note that community id in the 'owner_id' parameter should be negative number. For example 'owner_id'=-1 matches the [vk.com/apiclub|VK API] community "
     *
     * {"type":"integer"}
     */
    public function owner_id(integer $owner_id) : Get
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Number of items to return.
     *
     * {"type":"integer","minimum":0,"maximum":200,"default":100}
     */
    public function _count(integer $_count) : Get
    {
        $this->params['_count'] = $_count;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of results.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $_offset) : Get
    {
        $this->params['_offset'] = $_offset;
        return $this;
    }
    /**
     * '1' – method will return additional fields: 'likes, can_comment, car_repost, photos'. These parameters are not returned by default.
     *
     * {"type":"boolean"}
     */
    public function _extended(boolean $_extended) : Get
    {
        $this->params['_extended'] = $_extended;
        return $this;
    }
}