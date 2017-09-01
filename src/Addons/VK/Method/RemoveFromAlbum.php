<?php

namespace Bdb\Addons\VK\Method;

/**
 * Removes an item from one or multiple collections.
 */
class RemoveFromAlbum
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
    public function owner_id(integer $owner_id) : RemoveFromAlbum
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Item ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function item_id(integer $item_id) : RemoveFromAlbum
    {
        $this->params['item_id'] = $item_id;
        return $this;
    }
    /**
     * Collections IDs to remove item from.
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function album_ids(array $album_ids) : RemoveFromAlbum
    {
        $this->params['album_ids'] = $album_ids;
        return $this;
    }
}