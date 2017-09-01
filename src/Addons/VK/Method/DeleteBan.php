<?php

namespace Bdb\Addons\VK\Method;

/**
 * Allows news from previously banned users and communities to be shown in the current user's newsfeed.
 */
class DeleteBan
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * not description
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function _user_ids(array $_user_ids) : DeleteBan
    {
        $this->params['_user_ids'] = $_user_ids;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function _group_ids(array $_group_ids) : DeleteBan
    {
        $this->params['_group_ids'] = $_group_ids;
        return $this;
    }
}