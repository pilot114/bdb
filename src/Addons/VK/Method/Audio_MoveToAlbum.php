<?php

namespace Bdb\Addons\VK\Method;

/**
 * Moves audio files to an album.
 */
class Audio_MoveToAlbum extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('audio.moveToAlbum');
    }
    /**
     * ID of the community where the audio files are located. By default, current user ID.;
     *
     * {"type":"integer","minimum":0}
     */
    public function _group_id(integer $group_id) : Audio_MoveToAlbum
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * ID of the album to which the audio files will be moved.
     *
     * {"type":"integer","minimum":0}
     */
    public function _album_id(integer $album_id) : Audio_MoveToAlbum
    {
        $this->params['album_id'] = $album_id;
        return $this;
    }
    /**
     * IDs of the audio files to be moved.; "NOTE: An album can hold up to 1000 audio files.";
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function audio_ids(array $audio_ids) : Audio_MoveToAlbum
    {
        $this->params['audio_ids'] = $audio_ids;
        return $this;
    }
}