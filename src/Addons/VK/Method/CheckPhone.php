<?php

namespace Bdb\Addons\VK\Method;

/**
 * Checks a user's phone number for correctness.
 */
class CheckPhone
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return true;
    }
    /**
     * Phone number.
     *
     * {"type":"string"}
     */
    public function phone(string $phone) : CheckPhone
    {
        $this->params['phone'] = $phone;
        return $this;
    }
    /**
     * User ID.
     *
     * {"type":"integer"}
     */
    public function _client_id(integer $_client_id) : CheckPhone
    {
        $this->params['_client_id'] = $_client_id;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"string"}
     */
    public function client_secret(string $client_secret) : CheckPhone
    {
        $this->params['client_secret'] = $client_secret;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"boolean"}
     */
    public function _auth_by_phone(boolean $_auth_by_phone) : CheckPhone
    {
        $this->params['_auth_by_phone'] = $_auth_by_phone;
        return $this;
    }
}