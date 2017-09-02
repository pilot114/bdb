<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns [vk.com/dev/callback_api|Callback API] notifications settings.
 */
class Groups_GetCallbackSettings extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('groups.getCallbackSettings');
    }
    /**
     * Community ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function group_id(integer $group_id) : Groups_GetCallbackSettings
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}