<?php

namespace Bdb\Addons\VK\Method;

/**
 * Restores a [vk.com/dev/audio.delete|deleted] audio file.
 */
class Audio_Restore extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('audio.restore');
    }
    /**
     * Audio file ID.
     *
     * {"type":"int","minimum":0}
     */
    public function audio_id(int $audio_id) : Audio_Restore
    {
        $this->params['audio_id'] = $audio_id;
        return $this;
    }
    /**
     * ID of the user or community that owns the audio file.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : Audio_Restore
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
}