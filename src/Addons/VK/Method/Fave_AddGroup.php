<?php

namespace Bdb\Addons\VK\Method;

/**
 * Adds a community to user faves.
 */
class Fave_AddGroup extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('fave.addGroup');
    }
    /**
     * Community ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function group_id(integer $group_id) : Fave_AddGroup
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}