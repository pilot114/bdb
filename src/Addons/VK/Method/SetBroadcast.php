<?php

namespace Bdb\Addons\VK\Method;

/**
 * Activates an audio broadcast to the status of a user or community.
 */
class SetBroadcast
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * ID of the audio file to be shown in status (e.g., '1_190442705'). If the parameter is not set, the audio status of given communities and user will be deleted.
     *
     * {"type":"string"}
     */
    public function _audio(string $_audio) : SetBroadcast
    {
        $this->params['_audio'] = $_audio;
        return $this;
    }
    /**
     * IDs of communities and user whose statuses will be included in the broadcast. Use a negative value to designate a community ID. By default, current user ID.
     *
     * {"type":"array","items":{"type":"integer"},"maxItems":20}
     */
    public function _target_ids(array $_target_ids) : SetBroadcast
    {
        $this->params['_target_ids'] = $_target_ids;
        return $this;
    }
}