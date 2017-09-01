<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns community settings.
 */
class GetSettings
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
    public function group_id(integer $group_id) : GetSettings
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}