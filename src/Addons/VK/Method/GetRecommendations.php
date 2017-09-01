<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of suggested audio files based on a user's playlist or a particular audio file.
 */
class GetRecommendations
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Use to get recommendations based on a particular audio file. The ID of the user or community that owns an audio file and that audio file's ID, separated by an underscore.;
     *
     * {"type":"string"}
     */
    public function _target_audio(string $_target_audio) : GetRecommendations
    {
        $this->params['_target_audio'] = $_target_audio;
        return $this;
    }
    /**
     * Use to get recommendations based on a user's playlist. User ID. By default, the current user ID.;
     *
     * {"type":"integer","minimum":0}
     */
    public function _user_id(integer $_user_id) : GetRecommendations
    {
        $this->params['_user_id'] = $_user_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of audio files.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $_offset) : GetRecommendations
    {
        $this->params['_offset'] = $_offset;
        return $this;
    }
    /**
     * Number of audio files to return.
     *
     * {"type":"integer","minimum":0,"maximum":1000,"default":100}
     */
    public function _count(integer $_count) : GetRecommendations
    {
        $this->params['_count'] = $_count;
        return $this;
    }
    /**
     * '1' — shuffle on
     *
     * {"type":"boolean"}
     */
    public function _shuffle(boolean $_shuffle) : GetRecommendations
    {
        $this->params['_shuffle'] = $_shuffle;
        return $this;
    }
}