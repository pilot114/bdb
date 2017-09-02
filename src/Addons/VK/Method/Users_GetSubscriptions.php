<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of IDs of users and communities followed by the user.
 */
class Users_GetSubscriptions extends \Bdb\Addons\VK\BaseMethod
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return true;
    }
    public function __construct($client, $defaultQuery)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('users.getSubscriptions');
    }
    /**
     * User ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function _user_id(integer $user_id) : Users_GetSubscriptions
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * '1' — to return a combined list of users and communities; '0' — to return separate lists of users and communities (default)
     *
     * {"type":"boolean"}
     */
    public function _extended(boolean $extended) : Users_GetSubscriptions
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of subscriptions.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $offset) : Users_GetSubscriptions
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of users and communities to return.
     *
     * {"type":"integer","minimum":0,"default":20,"maximum":200}
     */
    public function _count(integer $count) : Users_GetSubscriptions
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : Users_GetSubscriptions
    {
        $this->params['fields'] = $fields;
        return $this;
    }
}