<?php

namespace Bdb\Addons\VK\Method;

/**
 * Allows to invite friends to the community.
 */
class Groups_Invite extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('groups.invite');
    }
    /**
     * Community ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function group_id(integer $group_id) : Groups_Invite
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * User ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function user_id(integer $user_id) : Groups_Invite
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
}