<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns [vk.com/dev/callback_api|Callback API] server settings for the community.
 */
class GetCallbackServerSettings
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
    public function group_id(integer $group_id) : GetCallbackServerSettings
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}