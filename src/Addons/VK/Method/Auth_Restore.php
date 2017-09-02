<?php

namespace Bdb\Addons\VK\Method;

/**
 * Allows to restore account access using a code received via SMS.; ; " This method is only available for apps with [vk.com/dev/auth_direct|Direct authorization] access. "
 */
class Auth_Restore extends \Bdb\Addons\VK\BaseMethod
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return true;
    }
    public function __construct($client, $defaultQuery)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('auth.restore');
    }
    /**
     * user phone number.
     *
     * {"type":"string"}
     */
    public function phone(string $phone) : Auth_Restore
    {
        $this->params['phone'] = $phone;
        return $this;
    }
}