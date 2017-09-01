<?php

namespace Bdb\Addons\VK\Method;

/**
 * Checks the user authentication in 'IFrame' and 'Flash' apps using the 'access_token' parameter.
 */
class CheckToken
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * client 'access_token'
     *
     * {"type":"string"}
     */
    public function _token(string $_token) : CheckToken
    {
        $this->params['_token'] = $_token;
        return $this;
    }
    /**
     * user 'ip address'. Note that user may access using the 'ipv6' address, in this case it is required to transmit the 'ipv6' address. ; If not transmitted, the address will not be checked.
     *
     * {"type":"string"}
     */
    public function _ip(string $_ip) : CheckToken
    {
        $this->params['_ip'] = $_ip;
        return $this;
    }
}