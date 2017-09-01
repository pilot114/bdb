<?php

namespace Bdb\Addons\VK\Method;

/**
 * With this method you can leave a group, public page, or event.; ;
 */
class Leave
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * ID or screen name of the community.
     *
     * {"type":"integer","minimum":0}
     */
    public function group_id(integer $group_id) : Leave
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}