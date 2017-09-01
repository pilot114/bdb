<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of user IDs of the current user's recently added friends.
 */
class GetRecent
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Number of recently added friends to return.
     *
     * {"type":"integer","minimum":0,"default":100,"maximum":1000}
     */
    public function _count(integer $_count) : GetRecent
    {
        $this->params['_count'] = $_count;
        return $this;
    }
}