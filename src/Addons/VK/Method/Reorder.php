<?php

namespace Bdb\Addons\VK\Method;

/**
 * Reorders an audio file, placing it between other specified audio files.
 */
class Reorder
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Audio file ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function audio_id(integer $audio_id) : Reorder
    {
        $this->params['audio_id'] = $audio_id;
        return $this;
    }
    /**
     * ID of the user or community that owns the audio file.
     *
     * {"type":"integer"}
     */
    public function _owner_id(integer $_owner_id) : Reorder
    {
        $this->params['_owner_id'] = $_owner_id;
        return $this;
    }
    /**
     * ID of the audio file before which to place the audio file.
     *
     * {"type":"integer"}
     */
    public function _before(integer $_before) : Reorder
    {
        $this->params['_before'] = $_before;
        return $this;
    }
    /**
     * ID of the audio file after which to place the audio file.
     *
     * {"type":"integer"}
     */
    public function _after(integer $_after) : Reorder
    {
        $this->params['_after'] = $_after;
        return $this;
    }
}