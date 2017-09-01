<?php

namespace Bdb\Addons\VK\Method;

/**
 * Deletes a collection of items.
 */
class DeleteAlbum
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * ID of an collection owner community.
     *
     * {"type":"integer"}
     */
    public function owner_id(integer $owner_id) : DeleteAlbum
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Collection ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function album_id(integer $album_id) : DeleteAlbum
    {
        $this->params['album_id'] = $album_id;
        return $this;
    }
}