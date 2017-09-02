<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns lyrics associated with an audio file.
 */
class Audio_GetLyrics extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('audio.getLyrics');
    }
    /**
     * Lyrics ID (could be obtained with [vk.com/dev/audio.get|audio.get], [vk.com/dev/audio.getById|audio.getById], or [vk.com/dev/audio.search|audio.search] methods).
     *
     * {"type":"int"}
     */
    public function lyrics_id(int $lyrics_id) : Audio_GetLyrics
    {
        $this->params['lyrics_id'] = $lyrics_id;
        return $this;
    }
}