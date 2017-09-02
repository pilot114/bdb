<?php

namespace Bdb\Addons\VK\Method;

/**
 * Makes a photo into an album cover.
 */
class Photos_MakeCover extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('photos.makeCover');
    }
    /**
     * ID of the user or community that owns the photo.
     *
     * {"type":"integer"}
     */
    public function _owner_id(integer $owner_id) : Photos_MakeCover
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Photo ID.
     *
     * {"type":"integer"}
     */
    public function photo_id(integer $photo_id) : Photos_MakeCover
    {
        $this->params['photo_id'] = $photo_id;
        return $this;
    }
    /**
     * Album ID.
     *
     * {"type":"integer"}
     */
    public function _album_id(integer $album_id) : Photos_MakeCover
    {
        $this->params['album_id'] = $album_id;
        return $this;
    }
}