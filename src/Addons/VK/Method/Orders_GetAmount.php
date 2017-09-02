<?php

namespace Bdb\Addons\VK\Method;

/**
 * not description
 */
class Orders_GetAmount extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('orders.getAmount');
    }
    /**
     * not description
     *
     * {"type":"integer","minimum":0}
     */
    public function user_id(integer $user_id) : Orders_GetAmount
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"array","items":{"type":"string"},"maxItems":100}
     */
    public function votes(array $votes) : Orders_GetAmount
    {
        $this->params['votes'] = $votes;
        return $this;
    }
}