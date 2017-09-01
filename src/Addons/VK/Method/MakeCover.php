<?php

namespace Bdb\Addons\VK\Method;

/**
 * Makes a photo into an album cover.
 */
class MakeCover
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * ID of the user or community that owns the photo.
     *
     * {"type":"integer"}
     */
    public function _owner_id(integer $_owner_id) : MakeCover
    {
        $this->params['_owner_id'] = $_owner_id;
        return $this;
    }
    /**
     * Photo ID.
     *
     * {"type":"integer"}
     */
    public function photo_id(integer $photo_id) : MakeCover
    {
        $this->params['photo_id'] = $photo_id;
        return $this;
    }
    /**
     * Album ID.
     *
     * {"type":"integer"}
     */
    public function _album_id(integer $_album_id) : MakeCover
    {
        $this->params['_album_id'] = $_album_id;
        return $this;
    }
}