<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of orders.
 */
class Orders_Get extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('orders.get');
    }
    /**
     * number of returned orders.
     *
     * {"type":"int","minimum":0,"maximum":1000,"default":100}
     */
    public function _count(int $count) : Orders_Get
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * if this parameter is set to 1, this method returns a list of test mode orders. By default — 0.
     *
     * {"type":"boolean"}
     */
    public function _test_mode(boolean $test_mode) : Orders_Get
    {
        $this->params['test_mode'] = $test_mode;
        return $this;
    }
}