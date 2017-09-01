<?php

namespace Bdb\Addons\VK\Method;

/**
 * Sends 'SMS' notification to a user's mobile device.
 */
class SendSMSNotification
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * ID of the user to whom SMS notification is sent. The user shall allow the application to send him/her notifications (, +1).
     *
     * {"type":"integer","minimum":0}
     */
    public function user_id(integer $user_id) : SendSMSNotification
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * 'SMS' text to be sent in 'UTF-8' encoding. Only Latin letters and numbers are allowed. Maximum size is '160' characters.
     *
     * {"type":"string"}
     */
    public function message(string $message) : SendSMSNotification
    {
        $this->params['message'] = $message;
        return $this;
    }
}