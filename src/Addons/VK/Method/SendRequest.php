<?php

namespace Bdb\Addons\VK\Method;

/**
 * Sends a request to another user in an app that uses VK authorization.
 */
class SendRequest
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * id of the user to send a request
     *
     * {"type":"integer","minimum":0}
     */
    public function user_id(integer $user_id) : SendRequest
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * request text
     *
     * {"type":"string"}
     */
    public function _text(string $_text) : SendRequest
    {
        $this->params['_text'] = $_text;
        return $this;
    }
    /**
     * request type. Values:; 'invite' – if the request is sent to a user who does not have the app installed;; 'request' – if a user has already installed the app
     *
     * {"type":"string","default":0,"enum":["request","invite"]}
     */
    public function _type(string $_type) : SendRequest
    {
        $this->params['_type'] = $_type;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"string","maxLength":128}
     */
    public function _name(string $_name) : SendRequest
    {
        $this->params['_name'] = $_name;
        return $this;
    }
    /**
     * special string key to be sent with the request
     *
     * {"type":"string"}
     */
    public function _key(string $_key) : SendRequest
    {
        $this->params['_key'] = $_key;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"boolean"}
     */
    public function _separate(boolean $_separate) : SendRequest
    {
        $this->params['_separate'] = $_separate;
        return $this;
    }
}