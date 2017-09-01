<?php

namespace Bdb\Addons\VK\Method;

/**
 * Completes a user's registration (begun with the [vk.com/dev/auth.signup|auth.signup] method) using an authorization code.
 */
class Confirm
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return true;
    }
    /**
     * not description
     *
     * {"type":"integer"}
     */
    public function client_id(integer $client_id) : Confirm
    {
        $this->params['client_id'] = $client_id;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"string"}
     */
    public function client_secret(string $client_secret) : Confirm
    {
        $this->params['client_secret'] = $client_secret;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"string"}
     */
    public function phone(string $phone) : Confirm
    {
        $this->params['phone'] = $phone;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"string"}
     */
    public function code(string $code) : Confirm
    {
        $this->params['code'] = $code;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"string"}
     */
    public function _password(string $_password) : Confirm
    {
        $this->params['_password'] = $_password;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"boolean"}
     */
    public function _test_mode(boolean $_test_mode) : Confirm
    {
        $this->params['_test_mode'] = $_test_mode;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"integer","minimum":0}
     */
    public function _intro(integer $_intro) : Confirm
    {
        $this->params['_intro'] = $_intro;
        return $this;
    }
}