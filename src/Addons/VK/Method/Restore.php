<?php

namespace Bdb\Addons\VK\Method;

/**
 * Restores recently deleted item
 */
class Restore
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
    public function owner_id(integer $owner_id) : Restore
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Deleted item ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function item_id(integer $item_id) : Restore
    {
        $this->params['item_id'] = $item_id;
        return $this;
    }
}