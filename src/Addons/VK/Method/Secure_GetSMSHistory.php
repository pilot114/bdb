<?php

namespace Bdb\Addons\VK\Method;

/**
 * Shows a list of SMS notifications sent by the application using [vk.com/dev/secure.sendSMSNotification|secure.sendSMSNotification] method.
 */
class Secure_GetSMSHistory extends \Bdb\Addons\VK\BaseMethod
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    public function __construct($client, $defaultQuery)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('secure.getSMSHistory');
    }
    /**
     * not description
     *
     * {"type":"integer","minimum":0}
     */
    public function _user_id(integer $user_id) : Secure_GetSMSHistory
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * filter by start date. It is set as UNIX-time.
     *
     * {"type":"integer","minimum":0}
     */
    public function _date_from(integer $date_from) : Secure_GetSMSHistory
    {
        $this->params['date_from'] = $date_from;
        return $this;
    }
    /**
     * filter by end date. It is set as UNIX-time.
     *
     * {"type":"integer","minimum":0}
     */
    public function _date_to(integer $date_to) : Secure_GetSMSHistory
    {
        $this->params['date_to'] = $date_to;
        return $this;
    }
    /**
     * number of returned posts. By default — 1000.
     *
     * {"type":"integer","minimum":0,"default":1000,"maximum":1000}
     */
    public function _limit(integer $limit) : Secure_GetSMSHistory
    {
        $this->params['limit'] = $limit;
        return $this;
    }
}