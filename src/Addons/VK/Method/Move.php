<?php

namespace Bdb\Addons\VK\Method;

/**
 * Moves a photo from one album to another.
 */
class Move
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
    public function _owner_id(integer $_owner_id) : Move
    {
        $this->params['_owner_id'] = $_owner_id;
        return $this;
    }
    /**
     * ID of the album to which the photo will be moved.
     *
     * {"type":"integer"}
     */
    public function target_album_id(integer $target_album_id) : Move
    {
        $this->params['target_album_id'] = $target_album_id;
        return $this;
    }
    /**
     * Photo ID.
     *
     * {"type":"integer"}
     */
    public function photo_id(integer $photo_id) : Move
    {
        $this->params['photo_id'] = $photo_id;
        return $this;
    }
}