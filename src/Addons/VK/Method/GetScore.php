<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns user score in app
 */
class GetScore
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * not description
     *
     * {"type":"integer","minimum":0}
     */
    public function user_id(integer $user_id) : GetScore
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
}