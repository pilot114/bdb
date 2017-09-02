<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of suggested audio files based on a user's playlist or a particular audio file.
 */
class Audio_GetRecommendations extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('audio.getRecommendations');
    }
    /**
     * Use to get recommendations based on a particular audio file. The ID of the user or community that owns an audio file and that audio file's ID, separated by an underscore.;
     *
     * {"type":"string"}
     */
    public function _target_audio(string $target_audio) : Audio_GetRecommendations
    {
        $this->params['target_audio'] = $target_audio;
        return $this;
    }
    /**
     * Use to get recommendations based on a user's playlist. User ID. By default, the current user ID.;
     *
     * {"type":"int","minimum":0}
     */
    public function _user_id(int $user_id) : Audio_GetRecommendations
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of audio files.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : Audio_GetRecommendations
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of audio files to return.
     *
     * {"type":"int","minimum":0,"maximum":1000,"default":100}
     */
    public function _count(int $count) : Audio_GetRecommendations
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * '1' — shuffle on
     *
     * {"type":"boolean"}
     */
    public function _shuffle(boolean $shuffle) : Audio_GetRecommendations
    {
        $this->params['shuffle'] = $shuffle;
        return $this;
    }
}