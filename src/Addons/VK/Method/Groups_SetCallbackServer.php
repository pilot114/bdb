<?php

namespace Bdb\Addons\VK\Method;

/**
 * Allow to set [vk.com/dev/callback_api|Callback API] server URL for the community. ; ;
 */
class Groups_SetCallbackServer extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('groups.setCallbackServer');
    }
    /**
     * Community ID.
     *
     * {"type":"int","minimum":0}
     */
    public function group_id(int $group_id) : Groups_SetCallbackServer
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Server URL.
     *
     * {"type":"string"}
     */
    public function _server_url(string $server_url) : Groups_SetCallbackServer
    {
        $this->params['server_url'] = $server_url;
        return $this;
    }
}