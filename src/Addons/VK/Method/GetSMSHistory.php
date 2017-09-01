<?php

namespace Bdb\Addons\VK\Method;

/**
 * Shows a list of SMS notifications sent by the application using [vk.com/dev/secure.sendSMSNotification|secure.sendSMSNotification] method.
 */
class GetSMSHistory
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * not description
     *
     * {"type":"integer","minimum":0}
     */
    public function _user_id(integer $_user_id) : GetSMSHistory
    {
        $this->params['_user_id'] = $_user_id;
        return $this;
    }
    /**
     * filter by start date. It is set as UNIX-time.
     *
     * {"type":"integer","minimum":0}
     */
    public function _date_from(integer $_date_from) : GetSMSHistory
    {
        $this->params['_date_from'] = $_date_from;
        return $this;
    }
    /**
     * filter by end date. It is set as UNIX-time.
     *
     * {"type":"integer","minimum":0}
     */
    public function _date_to(integer $_date_to) : GetSMSHistory
    {
        $this->params['_date_to'] = $_date_to;
        return $this;
    }
    /**
     * number of returned posts. By default — 1000.
     *
     * {"type":"integer","minimum":0,"default":1000,"maximum":1000}
     */
    public function _limit(integer $_limit) : GetSMSHistory
    {
        $this->params['_limit'] = $_limit;
        return $this;
    }
}