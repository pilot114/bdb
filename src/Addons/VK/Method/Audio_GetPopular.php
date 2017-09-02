<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of audio files from the "Popular".
 */
class Audio_GetPopular extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('audio.getPopular');
    }
    /**
     * '1' — to return only foreign audio files; '0' — to return all audio files;
     *
     * {"type":"boolean"}
     */
    public function _only_eng(boolean $only_eng) : Audio_GetPopular
    {
        $this->params['only_eng'] = $only_eng;
        return $this;
    }
    /**
     * Genre ID. See the list of [vk.com/dev/audio_genres|audio genres].
     *
     * {"type":"int","minimum":0}
     */
    public function _genre_id(int $genre_id) : Audio_GetPopular
    {
        $this->params['genre_id'] = $genre_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of audio files.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : Audio_GetPopular
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of audio files to return.
     *
     * {"type":"int","minimum":0,"maximum":1000,"default":100}
     */
    public function _count(int $count) : Audio_GetPopular
    {
        $this->params['count'] = $count;
        return $this;
    }
}