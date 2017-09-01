<?php

namespace Bdb\Addons\VK\Method;

/**
 * Checks the current user's friendship status with other specified users.
 */
class AreFriends
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * IDs of the users whose friendship status to check.
     *
     * {"type":"array","items":{"type":"integer"}}
     */
    public function user_ids(array $user_ids) : AreFriends
    {
        $this->params['user_ids'] = $user_ids;
        return $this;
    }
    /**
     * '1' — to return 'sign' field. 'sign' is md5("{id}_{user_id}_{friends_status}_{application_secret}"), where id is current user ID.; This field allows to check that data has not been modified by the client.; By default: '0'.
     *
     * {"type":"boolean"}
     */
    public function _need_sign(boolean $_need_sign) : AreFriends
    {
        $this->params['_need_sign'] = $_need_sign;
        return $this;
    }
}