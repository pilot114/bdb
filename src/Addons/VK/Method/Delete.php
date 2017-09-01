<?php

namespace Bdb\Addons\VK\Method;

/**
 * Deletes an item.
 */
class Delete
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
    public function owner_id(integer $owner_id) : Delete
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Item ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function item_id(integer $item_id) : Delete
    {
        $this->params['item_id'] = $item_id;
        return $this;
    }
}