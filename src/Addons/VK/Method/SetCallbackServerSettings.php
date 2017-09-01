<?php

namespace Bdb\Addons\VK\Method;

/**
 * Allow to set [vk.com/dev/callback_api|Callback API] server settings.
 */
class SetCallbackServerSettings
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Community ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function group_id(integer $group_id) : SetCallbackServerSettings
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Callback API secret key.
     *
     * {"type":"string"}
     */
    public function _secret_key(string $_secret_key) : SetCallbackServerSettings
    {
        $this->params['_secret_key'] = $_secret_key;
        return $this;
    }
}