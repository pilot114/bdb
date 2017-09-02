<?php

namespace Bdb\Addons\VK\Method;

/**
 * Checks a user's phone number for correctness.
 */
class Auth_CheckPhone extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('auth.checkPhone');
    }
    /**
     * Phone number.
     *
     * {"type":"string"}
     */
    public function phone(string $phone) : Auth_CheckPhone
    {
        $this->params['phone'] = $phone;
        return $this;
    }
    /**
     * User ID.
     *
     * {"type":"int"}
     */
    public function _client_id(int $client_id) : Auth_CheckPhone
    {
        $this->params['client_id'] = $client_id;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"string"}
     */
    public function client_secret(string $client_secret) : Auth_CheckPhone
    {
        $this->params['client_secret'] = $client_secret;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"boolean"}
     */
    public function _auth_by_phone(boolean $auth_by_phone) : Auth_CheckPhone
    {
        $this->params['auth_by_phone'] = $auth_by_phone;
        return $this;
    }
}