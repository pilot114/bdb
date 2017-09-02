<?php

namespace Bdb\Addons\VK\Method;

/**
 * Changes item place in a collection.
 */
class Market_ReorderItems extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('market.reorderItems');
    }
    /**
     * ID of an item owner community.
     *
     * {"type":"integer"}
     */
    public function owner_id(integer $owner_id) : Market_ReorderItems
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * ID of a collection to reorder items in. Set 0 to reorder full items list.
     *
     * {"type":"integer"}
     */
    public function _album_id(integer $album_id) : Market_ReorderItems
    {
        $this->params['album_id'] = $album_id;
        return $this;
    }
    /**
     * Item ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function item_id(integer $item_id) : Market_ReorderItems
    {
        $this->params['item_id'] = $item_id;
        return $this;
    }
    /**
     * ID of an item to place current item before it.
     *
     * {"type":"integer","minimum":0}
     */
    public function _before(integer $before) : Market_ReorderItems
    {
        $this->params['before'] = $before;
        return $this;
    }
    /**
     * ID of an item to place current item after it.
     *
     * {"type":"integer","minimum":0}
     */
    public function _after(integer $after) : Market_ReorderItems
    {
        $this->params['after'] = $after;
        return $this;
    }
}