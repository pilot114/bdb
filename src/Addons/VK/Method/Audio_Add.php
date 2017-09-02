<?php

namespace Bdb\Addons\VK\Method;

/**
 * Copies an audio file to a user page or community page.
 */
class Audio_Add extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('audio.add');
    }
    /**
     * Audio file ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function audio_id(integer $audio_id) : Audio_Add
    {
        $this->params['audio_id'] = $audio_id;
        return $this;
    }
    /**
     * ID of the user or community that owns the audio file. Use a negative value to designate a community ID. ; ;
     *
     * {"type":"integer"}
     */
    public function owner_id(integer $owner_id) : Audio_Add
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Community ID, needed when adding the audio file to a community (without minus).
     *
     * {"type":"integer"}
     */
    public function _group_id(integer $group_id) : Audio_Add
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Album ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function _album_id(integer $album_id) : Audio_Add
    {
        $this->params['album_id'] = $album_id;
        return $this;
    }
}