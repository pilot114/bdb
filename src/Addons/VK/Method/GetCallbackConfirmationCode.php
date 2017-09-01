<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns Callback API confirmation code for the community.
 */
class GetCallbackConfirmationCode
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
    public function group_id(integer $group_id) : GetCallbackConfirmationCode
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}