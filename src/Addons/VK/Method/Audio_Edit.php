<?php

namespace Bdb\Addons\VK\Method;

/**
 * Edits an audio file on a user or community page.;
 */
class Audio_Edit extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('audio.edit');
    }
    /**
     * ID of the user or community that owns the audio file.
     *
     * {"type":"integer"}
     */
    public function owner_id(integer $owner_id) : Audio_Edit
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Audio file ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function audio_id(integer $audio_id) : Audio_Edit
    {
        $this->params['audio_id'] = $audio_id;
        return $this;
    }
    /**
     * Name of the artist.
     *
     * {"type":"string"}
     */
    public function _artist(string $artist) : Audio_Edit
    {
        $this->params['artist'] = $artist;
        return $this;
    }
    /**
     * Title of the audio file.
     *
     * {"type":"string"}
     */
    public function _title(string $title) : Audio_Edit
    {
        $this->params['title'] = $title;
        return $this;
    }
    /**
     * Text of the lyrics of the audio file.
     *
     * {"type":"string"}
     */
    public function _text(string $text) : Audio_Edit
    {
        $this->params['text'] = $text;
        return $this;
    }
    /**
     * Genre of the audio file. See the list of [vk.com/dev/audio_genres|audio genres].
     *
     * {"type":"integer","minimum":0}
     */
    public function _genre_id(integer $genre_id) : Audio_Edit
    {
        $this->params['genre_id'] = $genre_id;
        return $this;
    }
    /**
     * '1' — audio file will not be available for search; '0' — audio file will be available for search (default)
     *
     * {"type":"boolean"}
     */
    public function _no_search(boolean $no_search) : Audio_Edit
    {
        $this->params['no_search'] = $no_search;
        return $this;
    }
}