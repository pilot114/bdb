<?php

namespace Bdb\Addons\VK\Method;

/**
 * Reorders the collections list.
 */
class ReorderAlbums
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
    public function owner_id(integer $owner_id) : ReorderAlbums
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Collection ID.
     *
     * {"type":"integer"}
     */
    public function album_id(integer $album_id) : ReorderAlbums
    {
        $this->params['album_id'] = $album_id;
        return $this;
    }
    /**
     * ID of a collection to place current collection before it.
     *
     * {"type":"integer","minimum":0}
     */
    public function _before(integer $_before) : ReorderAlbums
    {
        $this->params['_before'] = $_before;
        return $this;
    }
    /**
     * ID of a collection to place current collection after it.
     *
     * {"type":"integer","minimum":0}
     */
    public function _after(integer $_after) : ReorderAlbums
    {
        $this->params['_after'] = $_after;
        return $this;
    }
}