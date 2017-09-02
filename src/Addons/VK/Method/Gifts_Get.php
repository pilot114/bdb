<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of user gifts.
 */
class Gifts_Get extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('gifts.get');
    }
    /**
     * User ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function _user_id(integer $user_id) : Gifts_Get
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * Number of gifts to return.
     *
     * {"type":"integer","minimum":0}
     */
    public function _count(integer $count) : Gifts_Get
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of results.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $offset) : Gifts_Get
    {
        $this->params['offset'] = $offset;
        return $this;
    }
}