<?php

namespace Bdb\Addons\VK\Method;

/**
 * Removes a community from user faves.
 */
class RemoveGroup
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Community ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function group_id(integer $group_id) : RemoveGroup
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}