<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of market categories.
 */
class Market_GetCategories extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('market.getCategories');
    }
    /**
     * Number of results to return.
     *
     * {"type":"integer","minimum":0,"maximum":1000,"default":10}
     */
    public function _count(integer $count) : Market_GetCategories
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of results.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $offset) : Market_GetCategories
    {
        $this->params['offset'] = $offset;
        return $this;
    }
}