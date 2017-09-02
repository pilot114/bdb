<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns [vk.com/dev/callback_api|Callback API] server settings for the community.
 */
class Groups_GetCallbackServerSettings extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('groups.getCallbackServerSettings');
    }
    /**
     * Community ID.
     *
     * {"type":"int","minimum":0}
     */
    public function group_id(int $group_id) : Groups_GetCallbackServerSettings
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}