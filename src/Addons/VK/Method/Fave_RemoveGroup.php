<?php

namespace Bdb\Addons\VK\Method;

/**
 * Removes a community from user faves.
 */
class Fave_RemoveGroup extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('fave.removeGroup');
    }
    /**
     * Community ID.
     *
     * {"type":"int","minimum":0}
     */
    public function group_id(int $group_id) : Fave_RemoveGroup
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}