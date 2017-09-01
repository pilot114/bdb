<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of audio files from the "Popular".
 */
class GetPopular
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * '1' — to return only foreign audio files; '0' — to return all audio files;
     *
     * {"type":"boolean"}
     */
    public function _only_eng(boolean $_only_eng) : GetPopular
    {
        $this->params['_only_eng'] = $_only_eng;
        return $this;
    }
    /**
     * Genre ID. See the list of [vk.com/dev/audio_genres|audio genres].
     *
     * {"type":"integer","minimum":0}
     */
    public function _genre_id(integer $_genre_id) : GetPopular
    {
        $this->params['_genre_id'] = $_genre_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of audio files.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $_offset) : GetPopular
    {
        $this->params['_offset'] = $_offset;
        return $this;
    }
    /**
     * Number of audio files to return.
     *
     * {"type":"integer","minimum":0,"maximum":1000,"default":100}
     */
    public function _count(integer $_count) : GetPopular
    {
        $this->params['_count'] = $_count;
        return $this;
    }
}