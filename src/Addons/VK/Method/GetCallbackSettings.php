<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns [vk.com/dev/callback_api|Callback API] notifications settings.
 */
class GetCallbackSettings
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
    public function group_id(integer $group_id) : GetCallbackSettings
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}