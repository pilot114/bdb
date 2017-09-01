<?php

namespace Bdb\Addons\VK\Method;

/**
 * Sends notification to the user.
 */
class SendNotification
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * not description
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function _user_ids(array $_user_ids) : SendNotification
    {
        $this->params['_user_ids'] = $_user_ids;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"integer","minimum":0}
     */
    public function _user_id(integer $_user_id) : SendNotification
    {
        $this->params['_user_id'] = $_user_id;
        return $this;
    }
    /**
     * notification text which should be sent in 'UTF-8' encoding ('254' characters maximum).
     *
     * {"type":"string"}
     */
    public function message(string $message) : SendNotification
    {
        $this->params['message'] = $message;
        return $this;
    }
}