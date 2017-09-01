<?php

namespace Bdb\Addons\VK\Method;

/**
 * Changes item place in a collection.
 */
class ReorderItems
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * ID of an item owner community.
     *
     * {"type":"integer"}
     */
    public function owner_id(integer $owner_id) : ReorderItems
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * ID of a collection to reorder items in. Set 0 to reorder full items list.
     *
     * {"type":"integer"}
     */
    public function _album_id(integer $_album_id) : ReorderItems
    {
        $this->params['_album_id'] = $_album_id;
        return $this;
    }
    /**
     * Item ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function item_id(integer $item_id) : ReorderItems
    {
        $this->params['item_id'] = $item_id;
        return $this;
    }
    /**
     * ID of an item to place current item before it.
     *
     * {"type":"integer","minimum":0}
     */
    public function _before(integer $_before) : ReorderItems
    {
        $this->params['_before'] = $_before;
        return $this;
    }
    /**
     * ID of an item to place current item after it.
     *
     * {"type":"integer","minimum":0}
     */
    public function _after(integer $_after) : ReorderItems
    {
        $this->params['_after'] = $_after;
        return $this;
    }
}