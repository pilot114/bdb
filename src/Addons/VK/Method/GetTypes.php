<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns documents types available for current user.
 */
class GetTypes
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * ID of the user or community that owns the documents. Use a negative value to designate a community ID.
     *
     * {"type":"integer"}
     */
    public function owner_id(integer $owner_id) : GetTypes
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
}