<?php

namespace Bdb\Addons\VK\Method;

/**
 * Allow to set [vk.com/dev/callback_api|Callback API] server settings.
 */
class Groups_SetCallbackServerSettings extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('groups.setCallbackServerSettings');
    }
    /**
     * Community ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function group_id(integer $group_id) : Groups_SetCallbackServerSettings
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Callback API secret key.
     *
     * {"type":"string"}
     */
    public function _secret_key(string $secret_key) : Groups_SetCallbackServerSettings
    {
        $this->params['secret_key'] = $secret_key;
        return $this;
    }
}