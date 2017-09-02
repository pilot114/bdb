<?php

namespace Bdb\Addons\VK\Method;

/**
 * Gets settings of the user in this application.
 */
class Account_GetAppPermissions extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('account.getAppPermissions');
    }
    /**
     * User ID whose settings information shall be got. By default: current user.
     *
     * {"type":"integer","minimum":0}
     */
    public function user_id(integer $user_id) : Account_GetAppPermissions
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
}