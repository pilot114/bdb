<?php

namespace Bdb\Addons\VK\Method;

/**
 * Saves audio files after successful [vk.com/dev/upload_files_2|uploading].
 */
class Audio_Save extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('audio.save');
    }
    /**
     * This parameter is returned when the audio file is [vk.com/dev/upload_files_2|uploaded to the server].
     *
     * {"type":"int"}
     */
    public function server(int $server) : Audio_Save
    {
        $this->params['server'] = $server;
        return $this;
    }
    /**
     * This parameter is returned when the audio file is [vk.com/dev/upload_files_2|uploaded to the server].
     *
     * {"type":"string"}
     */
    public function audio(string $audio) : Audio_Save
    {
        $this->params['audio'] = $audio;
        return $this;
    }
    /**
     * This parameter is returned when the audio file is [vk.com/dev/upload_files_2|uploaded to the server].
     *
     * {"type":"string"}
     */
    public function _hash(string $hash) : Audio_Save
    {
        $this->params['hash'] = $hash;
        return $this;
    }
    /**
     * The name of the artist. By default, this is obtained from ID3 tags.
     *
     * {"type":"string"}
     */
    public function _artist(string $artist) : Audio_Save
    {
        $this->params['artist'] = $artist;
        return $this;
    }
    /**
     * The title of the audio file. By default, this is obtained from ID3 tags.
     *
     * {"type":"string"}
     */
    public function _title(string $title) : Audio_Save
    {
        $this->params['title'] = $title;
        return $this;
    }
}