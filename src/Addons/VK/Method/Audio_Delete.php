<?php

namespace Bdb\Addons\VK\Method;

/**
 * Deletes an audio file from a user page or community page.
 */
class Audio_Delete extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('audio.delete');
    }
    /**
     * Audio file ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function audio_id(integer $audio_id) : Audio_Delete
    {
        $this->params['audio_id'] = $audio_id;
        return $this;
    }
    /**
     * ID of the user or community that owns the audio file. Use a negative value to designate a community ID.
     *
     * {"type":"integer"}
     */
    public function owner_id(integer $owner_id) : Audio_Delete
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
}