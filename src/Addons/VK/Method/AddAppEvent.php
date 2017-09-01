<?php

namespace Bdb\Addons\VK\Method;

/**
 * Adds user activity information to an application
 */
class AddAppEvent
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * ID of a user to save the data
     *
     * {"type":"integer","minimum":0}
     */
    public function user_id(integer $user_id) : AddAppEvent
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * there are 2 default activities: ; * 1 – level. Works similar to ;; * 2 – points, saves points amount; Any other value is for saving completed missions
     *
     * {"type":"integer","minimum":0}
     */
    public function activity_id(integer $activity_id) : AddAppEvent
    {
        $this->params['activity_id'] = $activity_id;
        return $this;
    }
    /**
     * depends on activity_id:; * 1 – number, current level number;; * 2 – number, current user's points amount; ; Any other value is ignored
     *
     * {"type":"integer","minimum":0,"maximum":10000}
     */
    public function _value(integer $_value) : AddAppEvent
    {
        $this->params['_value'] = $_value;
        return $this;
    }
}