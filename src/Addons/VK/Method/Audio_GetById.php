<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns information about audio files by their IDs.
 */
class Audio_GetById extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('audio.getById');
    }
    /**
     * Audio file IDs, in the following format:; "{owner_id}_{audio_id}"
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function audios(array $audios) : Audio_GetById
    {
        $this->params['audios'] = $audios;
        return $this;
    }
}