<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns video album info
 */
class Video_GetAlbumById extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('video.getAlbumById');
    }
    /**
     * identifier of a user or community to add a video to. ; Use a negative value to designate a community ID.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : Video_GetAlbumById
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Album ID.
     *
     * {"type":"int"}
     */
    public function album_id(int $album_id) : Video_GetAlbumById
    {
        $this->params['album_id'] = $album_id;
        return $this;
    }
}