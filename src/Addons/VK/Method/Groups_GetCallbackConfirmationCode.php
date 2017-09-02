<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns Callback API confirmation code for the community.
 */
class Groups_GetCallbackConfirmationCode extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('groups.getCallbackConfirmationCode');
    }
    /**
     * Community ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function group_id(integer $group_id) : Groups_GetCallbackConfirmationCode
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}