<?php

namespace Bdb\Addons\VK\Method;

/**
 * Registers a new user by phone number.
 */
class Signup
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return true;
    }
    /**
     * User's first name.
     *
     * {"type":"string"}
     */
    public function first_name(string $first_name) : Signup
    {
        $this->params['first_name'] = $first_name;
        return $this;
    }
    /**
     * User's surname.
     *
     * {"type":"string"}
     */
    public function last_name(string $last_name) : Signup
    {
        $this->params['last_name'] = $last_name;
        return $this;
    }
    /**
     * Your application ID.
     *
     * {"type":"integer"}
     */
    public function client_id(integer $client_id) : Signup
    {
        $this->params['client_id'] = $client_id;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"string"}
     */
    public function client_secret(string $client_secret) : Signup
    {
        $this->params['client_secret'] = $client_secret;
        return $this;
    }
    /**
     * User's phone number. Can be pre-checked with the [vk.com/dev/auth.checkPhone|auth.checkPhone] method.
     *
     * {"type":"string"}
     */
    public function phone(string $phone) : Signup
    {
        $this->params['phone'] = $phone;
        return $this;
    }
    /**
     * User's password (minimum of 6 characters). Can be specified later with the [vk.com/dev/auth.confirm|auth.confirm] method.
     *
     * {"type":"string"}
     */
    public function _password(string $_password) : Signup
    {
        $this->params['_password'] = $_password;
        return $this;
    }
    /**
     * '1' — test mode, in which the user will not be registered and the phone number will not be checked for availability; '0' — default mode (default)
     *
     * {"type":"boolean"}
     */
    public function _test_mode(boolean $_test_mode) : Signup
    {
        $this->params['_test_mode'] = $_test_mode;
        return $this;
    }
    /**
     * '1' — call the phone number and leave a voice message of the authorization code; '0' — send the code by SMS (default)
     *
     * {"type":"boolean"}
     */
    public function _voice(boolean $_voice) : Signup
    {
        $this->params['_voice'] = $_voice;
        return $this;
    }
    /**
     * '1' — female; '2' — male
     *
     * {"type":"integer","minimum":0,"enum":[0,1,2],"enumNames":["undefined","female","male"]}
     */
    public function _sex(integer $_sex) : Signup
    {
        $this->params['_sex'] = $_sex;
        return $this;
    }
    /**
     * Session ID required for method recall when SMS was not delivered.
     *
     * {"type":"string"}
     */
    public function _sid(string $_sid) : Signup
    {
        $this->params['_sid'] = $_sid;
        return $this;
    }
}