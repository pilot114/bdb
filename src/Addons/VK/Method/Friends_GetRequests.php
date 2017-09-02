<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns information about the current user's incoming and outgoing friend requests.
 */
class Friends_GetRequests extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('friends.getRequests');
    }
    /**
     * Offset needed to return a specific subset of friend requests.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $offset) : Friends_GetRequests
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of friend requests to return (default 100, maximum 1000).
     *
     * {"type":"integer","minimum":0,"maximum":1000,"default":100}
     */
    public function _count(integer $count) : Friends_GetRequests
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * '1' — to return response messages from users who have sent a friend request or, if 'suggested' is set to '1', to return a list of suggested friends
     *
     * {"type":"boolean"}
     */
    public function _extended(boolean $extended) : Friends_GetRequests
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * '1' — to return a list of mutual friends (up to 20), if any
     *
     * {"type":"boolean"}
     */
    public function _need_mutual(boolean $need_mutual) : Friends_GetRequests
    {
        $this->params['need_mutual'] = $need_mutual;
        return $this;
    }
    /**
     * '1' — to return outgoing requests; '0' — to return incoming requests (default)
     *
     * {"type":"boolean"}
     */
    public function _out(boolean $out) : Friends_GetRequests
    {
        $this->params['out'] = $out;
        return $this;
    }
    /**
     * Sort order:; '1' — by number of mutual friends; '0' — by date
     *
     * {"type":"integer","minimum":0,"enum":[0,1],"enumNames":["date","mutual"]}
     */
    public function _sort(integer $sort) : Friends_GetRequests
    {
        $this->params['sort'] = $sort;
        return $this;
    }
    /**
     * '1' — to return a list of suggested friends; '0' — to return friend requests (default)
     *
     * {"type":"boolean"}
     */
    public function _suggested(boolean $suggested) : Friends_GetRequests
    {
        $this->params['suggested'] = $suggested;
        return $this;
    }
}