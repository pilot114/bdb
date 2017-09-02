<?php

namespace Bdb\Addons\VK\Method;

/**
 * Deletes an item.
 */
class Market_Delete extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('market.delete');
    }
    /**
     * ID of an item owner community.
     *
     * {"type":"integer"}
     */
    public function owner_id(integer $owner_id) : Market_Delete
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Item ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function item_id(integer $item_id) : Market_Delete
    {
        $this->params['item_id'] = $item_id;
        return $this;
    }
}