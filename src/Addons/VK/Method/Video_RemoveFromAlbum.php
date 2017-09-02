<?php

namespace Bdb\Addons\VK\Method;

/**
 * not description
 */
class Video_RemoveFromAlbum extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('video.removeFromAlbum');
    }
    /**
     * not description
     *
     * {"type":"int"}
     */
    public function _target_id(int $target_id) : Video_RemoveFromAlbum
    {
        $this->params['target_id'] = $target_id;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"int"}
     */
    public function _album_id(int $album_id) : Video_RemoveFromAlbum
    {
        $this->params['album_id'] = $album_id;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"array","items":{"type":"integer"}}
     */
    public function _album_ids(array $album_ids) : Video_RemoveFromAlbum
    {
        $this->params['album_ids'] = $album_ids;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"int"}
     */
    public function owner_id(int $owner_id) : Video_RemoveFromAlbum
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"int","minimum":0}
     */
    public function video_id(int $video_id) : Video_RemoveFromAlbum
    {
        $this->params['video_id'] = $video_id;
        return $this;
    }
}