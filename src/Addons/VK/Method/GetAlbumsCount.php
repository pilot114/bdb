<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns the number of photo albums belonging to a user or community.
 */
class GetAlbumsCount
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * User ID.
     *
     * {"type":"integer"}
     */
    public function _user_id(integer $_user_id) : GetAlbumsCount
    {
        $this->params['_user_id'] = $_user_id;
        return $this;
    }
    /**
     * Community ID.
     *
     * {"type":"integer"}
     */
    public function _group_id(integer $_group_id) : GetAlbumsCount
    {
        $this->params['_group_id'] = $_group_id;
        return $this;
    }
}