<?php

namespace Bdb\Addons\VK\Method;

/**
 * Prevents news from specified users and communities from appearing in the current user's newsfeed.
 */
class AddBan
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * not description
     *
     * {"type":"array","items":{"type":"integer"}}
     */
    public function _user_ids(array $_user_ids) : AddBan
    {
        $this->params['_user_ids'] = $_user_ids;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"array","items":{"type":"integer"}}
     */
    public function _group_ids(array $_group_ids) : AddBan
    {
        $this->params['_group_ids'] = $_group_ids;
        return $this;
    }
}