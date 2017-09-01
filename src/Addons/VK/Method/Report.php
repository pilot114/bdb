<?php

namespace Bdb\Addons\VK\Method;

/**
 * Sends a complaint to the item.
 */
class Report
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * ID of an item owner community.
     *
     * {"type":"integer"}
     */
    public function owner_id(integer $owner_id) : Report
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Item ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function item_id(integer $item_id) : Report
    {
        $this->params['item_id'] = $item_id;
        return $this;
    }
    /**
     * Complaint reason. Possible values:; *'0' — spam;; *'1' — child porn;; *'2' — extremism;; *'3' — violence;; *'4' — drugs propaganda;; *'5' — adult materials;; *'6' — insult.
     *
     * {"type":"integer","minimum":0,"enum":[0,1,2,3,4,5,6],"enumNames":["spam","child pornography","extremism","violence","drug propaganda","adult material","insult abuse"]}
     */
    public function reason(integer $reason) : Report
    {
        $this->params['reason'] = $reason;
        return $this;
    }
}