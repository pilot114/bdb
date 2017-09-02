<?php

namespace Bdb\Addons\VK\Method;

/**
 * Pins the post on wall.
 */
class Wall_Pin extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('wall.pin');
    }
    /**
     * ID of the user or community that owns the wall. By default, current user ID. Use a negative value to designate a community ID.
     *
     * {"type":"integer"}
     */
    public function _owner_id(integer $owner_id) : Wall_Pin
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Post ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function post_id(integer $post_id) : Wall_Pin
    {
        $this->params['post_id'] = $post_id;
        return $this;
    }
}