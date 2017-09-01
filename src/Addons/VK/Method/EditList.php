<?php

namespace Bdb\Addons\VK\Method;

/**
 * Edits a friend list of the current user.
 */
class EditList
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Name of the friend list.
     *
     * {"type":"string"}
     */
    public function _name(string $_name) : EditList
    {
        $this->params['_name'] = $_name;
        return $this;
    }
    /**
     * Friend list ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function list_id(integer $list_id) : EditList
    {
        $this->params['list_id'] = $list_id;
        return $this;
    }
    /**
     * IDs of users in the friend list.
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function _user_ids(array $_user_ids) : EditList
    {
        $this->params['_user_ids'] = $_user_ids;
        return $this;
    }
    /**
     * (Applies if 'user_ids' parameter is not set.); User IDs to add to the friend list.
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function _add_user_ids(array $_add_user_ids) : EditList
    {
        $this->params['_add_user_ids'] = $_add_user_ids;
        return $this;
    }
    /**
     * (Applies if 'user_ids' parameter is not set.); User IDs to delete from the friend list.
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function _delete_user_ids(array $_delete_user_ids) : EditList
    {
        $this->params['_delete_user_ids'] = $_delete_user_ids;
        return $this;
    }
}