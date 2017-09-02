<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns items list for a community.
 */
class Market_Get extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('market.get');
    }
    /**
     * ID of an item owner community; "Note that community id in the 'owner_id' parameter should be negative number. For example 'owner_id'=-1 matches the [vk.com/apiclub|VK API] community "
     *
     * {"type":"integer"}
     */
    public function owner_id(integer $owner_id) : Market_Get
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Number of items to return.
     *
     * {"type":"integer","minimum":0,"maximum":200,"default":100}
     */
    public function _count(integer $count) : Market_Get
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of results.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $offset) : Market_Get
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * '1' – method will return additional fields: 'likes, can_comment, car_repost, photos'. These parameters are not returned by default.
     *
     * {"type":"boolean"}
     */
    public function _extended(boolean $extended) : Market_Get
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}