<?php

namespace Bdb\Addons\VK\Method;

/**
 * Activates an audio broadcast to the status of a user or community.
 */
class Audio_SetBroadcast extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('audio.setBroadcast');
    }
    /**
     * ID of the audio file to be shown in status (e.g., '1_190442705'). If the parameter is not set, the audio status of given communities and user will be deleted.
     *
     * {"type":"string"}
     */
    public function _audio(string $audio) : Audio_SetBroadcast
    {
        $this->params['audio'] = $audio;
        return $this;
    }
    /**
     * IDs of communities and user whose statuses will be included in the broadcast. Use a negative value to designate a community ID. By default, current user ID.
     *
     * {"type":"array","items":{"type":"integer"},"maxItems":20}
     */
    public function _target_ids(array $target_ids) : Audio_SetBroadcast
    {
        $this->params['target_ids'] = $target_ids;
        return $this;
    }
}