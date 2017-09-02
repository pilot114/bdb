<?php

namespace Bdb\Addons\VK\Method;

/**
 * Restores recently deleted item
 */
class Market_Restore extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('market.restore');
    }
    /**
     * ID of an item owner community.
     *
     * {"type":"integer"}
     */
    public function owner_id(integer $owner_id) : Market_Restore
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Deleted item ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function item_id(integer $item_id) : Market_Restore
    {
        $this->params['item_id'] = $item_id;
        return $this;
    }
}