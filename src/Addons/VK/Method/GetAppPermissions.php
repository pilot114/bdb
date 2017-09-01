<?php

namespace Bdb\Addons\VK\Method;

/**
 * Gets settings of the user in this application.
 */
class GetAppPermissions
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * User ID whose settings information shall be got. By default: current user.
     *
     * {"type":"integer","minimum":0}
     */
    public function user_id(integer $user_id) : GetAppPermissions
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
}