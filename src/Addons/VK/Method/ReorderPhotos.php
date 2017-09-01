<?php

namespace Bdb\Addons\VK\Method;

/**
 * Reorders the photo in the list of photos of the user album.
 */
class ReorderPhotos
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
    public function _owner_id(integer $_owner_id) : ReorderPhotos
    {
        $this->params['_owner_id'] = $_owner_id;
        return $this;
    }
    /**
     * Photo ID.
     *
     * {"type":"integer"}
     */
    public function photo_id(integer $photo_id) : ReorderPhotos
    {
        $this->params['photo_id'] = $photo_id;
        return $this;
    }
    /**
     * ID of the photo before which the photo in question shall be placed.
     *
     * {"type":"integer"}
     */
    public function _before(integer $_before) : ReorderPhotos
    {
        $this->params['_before'] = $_before;
        return $this;
    }
    /**
     * ID of the photo after which the photo in question shall be placed.
     *
     * {"type":"integer"}
     */
    public function _after(integer $_after) : ReorderPhotos
    {
        $this->params['_after'] = $_after;
        return $this;
    }
}