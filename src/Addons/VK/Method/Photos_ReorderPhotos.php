<?php

namespace Bdb\Addons\VK\Method;

/**
 * Reorders the photo in the list of photos of the user album.
 */
class Photos_ReorderPhotos extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('photos.reorderPhotos');
    }
    /**
     * ID of the user or community that owns the photo.
     *
     * {"type":"integer"}
     */
    public function _owner_id(integer $owner_id) : Photos_ReorderPhotos
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Photo ID.
     *
     * {"type":"integer"}
     */
    public function photo_id(integer $photo_id) : Photos_ReorderPhotos
    {
        $this->params['photo_id'] = $photo_id;
        return $this;
    }
    /**
     * ID of the photo before which the photo in question shall be placed.
     *
     * {"type":"integer"}
     */
    public function _before(integer $before) : Photos_ReorderPhotos
    {
        $this->params['before'] = $before;
        return $this;
    }
    /**
     * ID of the photo after which the photo in question shall be placed.
     *
     * {"type":"integer"}
     */
    public function _after(integer $after) : Photos_ReorderPhotos
    {
        $this->params['after'] = $after;
        return $this;
    }
}