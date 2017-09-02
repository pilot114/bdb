<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of audio files of a user or community.
 */
class Audio_Get extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('audio.get');
    }
    /**
     * ID of the user or community that owns the audio file. Use a negative value to designate a community ID.
     *
     * {"type":"integer"}
     */
    public function _owner_id(integer $owner_id) : Audio_Get
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Audio album ID.
     *
     * {"type":"integer"}
     */
    public function _album_id(integer $album_id) : Audio_Get
    {
        $this->params['album_id'] = $album_id;
        return $this;
    }
    /**
     * IDs of the audio files to return.
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function _audio_ids(array $audio_ids) : Audio_Get
    {
        $this->params['audio_ids'] = $audio_ids;
        return $this;
    }
    /**
     * '1' — to return information about users who uploaded audio files
     *
     * {"type":"boolean"}
     */
    public function _need_user(boolean $need_user) : Audio_Get
    {
        $this->params['need_user'] = $need_user;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of audio files.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $offset) : Audio_Get
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of audio files to return.
     *
     * {"type":"integer","minimum":0}
     */
    public function _count(integer $count) : Audio_Get
    {
        $this->params['count'] = $count;
        return $this;
    }
}