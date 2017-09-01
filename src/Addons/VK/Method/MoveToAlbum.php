<?php

namespace Bdb\Addons\VK\Method;

/**
 * Moves audio files to an album.
 */
class MoveToAlbum
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * ID of the community where the audio files are located. By default, current user ID.;
     *
     * {"type":"integer","minimum":0}
     */
    public function _group_id(integer $_group_id) : MoveToAlbum
    {
        $this->params['_group_id'] = $_group_id;
        return $this;
    }
    /**
     * ID of the album to which the audio files will be moved.
     *
     * {"type":"integer","minimum":0}
     */
    public function _album_id(integer $_album_id) : MoveToAlbum
    {
        $this->params['_album_id'] = $_album_id;
        return $this;
    }
    /**
     * IDs of the audio files to be moved.; "NOTE: An album can hold up to 1000 audio files.";
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function audio_ids(array $audio_ids) : MoveToAlbum
    {
        $this->params['audio_ids'] = $audio_ids;
        return $this;
    }
}