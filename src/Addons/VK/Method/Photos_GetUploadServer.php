<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns the server address for photo upload.
 */
class Photos_GetUploadServer extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('photos.getUploadServer');
    }
    /**
     * Album ID.
     *
     * {"type":"integer"}
     */
    public function _album_id(integer $album_id) : Photos_GetUploadServer
    {
        $this->params['album_id'] = $album_id;
        return $this;
    }
    /**
     * ID of community that owns the album (if the photo will be uploaded to a community album).
     *
     * {"type":"integer"}
     */
    public function _group_id(integer $group_id) : Photos_GetUploadServer
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}