<?php

namespace Bdb\Addons\VK\Method;

/**
 * Allow to set [vk.com/dev/callback_api|Callback API] server URL for the community. ; ;
 */
class SetCallbackServer
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
    public function group_id(integer $group_id) : SetCallbackServer
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Server URL.
     *
     * {"type":"string"}
     */
    public function _server_url(string $_server_url) : SetCallbackServer
    {
        $this->params['_server_url'] = $_server_url;
        return $this;
    }
}