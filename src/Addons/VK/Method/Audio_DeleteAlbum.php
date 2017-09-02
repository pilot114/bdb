<?php

namespace Bdb\Addons\VK\Method;

/**
 * Deletes an audio album.
 */
class Audio_DeleteAlbum extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('audio.deleteAlbum');
    }
    /**
     * ID of the community where the album is located.;
     *
     * {"type":"integer","minimum":0}
     */
    public function _group_id(integer $group_id) : Audio_DeleteAlbum
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Album ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function album_id(integer $album_id) : Audio_DeleteAlbum
    {
        $this->params['album_id'] = $album_id;
        return $this;
    }
}