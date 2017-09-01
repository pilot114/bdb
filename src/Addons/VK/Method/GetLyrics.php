<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns lyrics associated with an audio file.
 */
class GetLyrics
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Lyrics ID (could be obtained with [vk.com/dev/audio.get|audio.get], [vk.com/dev/audio.getById|audio.getById], or [vk.com/dev/audio.search|audio.search] methods).
     *
     * {"type":"integer"}
     */
    public function lyrics_id(integer $lyrics_id) : GetLyrics
    {
        $this->params['lyrics_id'] = $lyrics_id;
        return $this;
    }
}