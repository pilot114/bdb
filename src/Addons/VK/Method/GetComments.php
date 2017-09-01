<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns comments list for an item.
 */
class GetComments
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * ID of an item owner community
     *
     * {"type":"integer"}
     */
    public function owner_id(integer $owner_id) : GetComments
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Item ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function item_id(integer $item_id) : GetComments
    {
        $this->params['item_id'] = $item_id;
        return $this;
    }
    /**
     * '1' — to return likes info.
     *
     * {"type":"boolean"}
     */
    public function _need_likes(boolean $_need_likes) : GetComments
    {
        $this->params['_need_likes'] = $_need_likes;
        return $this;
    }
    /**
     * ID of a comment to start a list from (details below).
     *
     * {"type":"integer","minimum":0}
     */
    public function _start_comment_id(integer $_start_comment_id) : GetComments
    {
        $this->params['_start_comment_id'] = $_start_comment_id;
        return $this;
    }
    /**
     * Number of results to return.
     *
     * {"type":"integer","minimum":0,"default":20,"maximum":100}
     */
    public function _count(integer $_count) : GetComments
    {
        $this->params['_count'] = $_count;
        return $this;
    }
    /**
     * Sort order ('asc' — from old to new, 'desc' — from new to old)
     *
     * {"type":"string","default":0,"enum":["asc","desc"],"enumNames":["old to new","new to old"]}
     */
    public function _sort(string $_sort) : GetComments
    {
        $this->params['_sort'] = $_sort;
        return $this;
    }
    /**
     * '1' — comments will be returned as numbered objects, in addition lists of 'profiles' and 'groups' objects will be returned.
     *
     * {"type":"boolean"}
     */
    public function _extended(boolean $_extended) : GetComments
    {
        $this->params['_extended'] = $_extended;
        return $this;
    }
    /**
     * List of additional profile fields to return. See the [vk.com/dev/fields|details]
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $_fields) : GetComments
    {
        $this->params['_fields'] = $_fields;
        return $this;
    }
}