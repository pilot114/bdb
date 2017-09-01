<?php

namespace Bdb\Addons\VK\Method;

/**
 * Adds a community to user faves.
 */
class AddGroup
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
    public function group_id(integer $group_id) : AddGroup
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}