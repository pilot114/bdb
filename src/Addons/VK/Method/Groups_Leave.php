<?php

namespace Bdb\Addons\VK\Method;

/**
 * With this method you can leave a group, public page, or event.; ;
 */
class Groups_Leave extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('groups.leave');
    }
    /**
     * ID or screen name of the community.
     *
     * {"type":"integer","minimum":0}
     */
    public function group_id(integer $group_id) : Groups_Leave
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}