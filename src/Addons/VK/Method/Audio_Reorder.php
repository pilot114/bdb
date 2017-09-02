<?php

namespace Bdb\Addons\VK\Method;

/**
 * Reorders an audio file, placing it between other specified audio files.
 */
class Audio_Reorder extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('audio.reorder');
    }
    /**
     * Audio file ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function audio_id(integer $audio_id) : Audio_Reorder
    {
        $this->params['audio_id'] = $audio_id;
        return $this;
    }
    /**
     * ID of the user or community that owns the audio file.
     *
     * {"type":"integer"}
     */
    public function _owner_id(integer $owner_id) : Audio_Reorder
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * ID of the audio file before which to place the audio file.
     *
     * {"type":"integer"}
     */
    public function _before(integer $before) : Audio_Reorder
    {
        $this->params['before'] = $before;
        return $this;
    }
    /**
     * ID of the audio file after which to place the audio file.
     *
     * {"type":"integer"}
     */
    public function _after(integer $after) : Audio_Reorder
    {
        $this->params['after'] = $after;
        return $this;
    }
}