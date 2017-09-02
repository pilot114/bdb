<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns the number of photo albums belonging to a user or community.
 */
class Photos_GetAlbumsCount extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('photos.getAlbumsCount');
    }
    /**
     * User ID.
     *
     * {"type":"integer"}
     */
    public function _user_id(integer $user_id) : Photos_GetAlbumsCount
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * Community ID.
     *
     * {"type":"integer"}
     */
    public function _group_id(integer $group_id) : Photos_GetAlbumsCount
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}