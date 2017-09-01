<?php

namespace Bdb\Addons\VK\Method;

/**
 * Adds an item to one or multiple collections.
 */
class AddToAlbum
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
    public function owner_id(integer $owner_id) : AddToAlbum
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Item ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function item_id(integer $item_id) : AddToAlbum
    {
        $this->params['item_id'] = $item_id;
        return $this;
    }
    /**
     * Collections IDs to add item to.
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function album_ids(array $album_ids) : AddToAlbum
    {
        $this->params['album_ids'] = $album_ids;
        return $this;
    }
}