<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns comments list for an item.
 */
class Market_GetComments extends \Bdb\Addons\VK\BaseMethod
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    public function __construct($client, $defaultQuery)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('market.getComments');
    }
    /**
     * ID of an item owner community
     *
     * {"type":"int"}
     */
    public function owner_id(int $owner_id) : Market_GetComments
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Item ID.
     *
     * {"type":"int","minimum":0}
     */
    public function item_id(int $item_id) : Market_GetComments
    {
        $this->params['item_id'] = $item_id;
        return $this;
    }
    /**
     * '1' — to return likes info.
     *
     * {"type":"boolean"}
     */
    public function _need_likes(boolean $need_likes) : Market_GetComments
    {
        $this->params['need_likes'] = $need_likes;
        return $this;
    }
    /**
     * ID of a comment to start a list from (details below).
     *
     * {"type":"int","minimum":0}
     */
    public function _start_comment_id(int $start_comment_id) : Market_GetComments
    {
        $this->params['start_comment_id'] = $start_comment_id;
        return $this;
    }
    /**
     * Number of results to return.
     *
     * {"type":"int","minimum":0,"default":20,"maximum":100}
     */
    public function _count(int $count) : Market_GetComments
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Sort order ('asc' — from old to new, 'desc' — from new to old)
     *
     * {"type":"string","default":0,"enum":["asc","desc"],"enumNames":["old to new","new to old"]}
     */
    public function _sort(string $sort) : Market_GetComments
    {
        $this->params['sort'] = $sort;
        return $this;
    }
    /**
     * '1' — comments will be returned as numbered objects, in addition lists of 'profiles' and 'groups' objects will be returned.
     *
     * {"type":"boolean"}
     */
    public function _extended(boolean $extended) : Market_GetComments
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * List of additional profile fields to return. See the [vk.com/dev/fields|details]
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : Market_GetComments
    {
        $this->params['fields'] = $fields;
        return $this;
    }
}