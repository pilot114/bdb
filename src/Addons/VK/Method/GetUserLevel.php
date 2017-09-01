<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns one of the previously set game levels of one or more users in the application.
 */
class GetUserLevel
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
    public function user_ids(array $user_ids) : GetUserLevel
    {
        $this->params['user_ids'] = $user_ids;
        return $this;
    }
}