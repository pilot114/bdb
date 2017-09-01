<?php

namespace Bdb\Addons\VK\Method;

/**
 * not description
 */
class GetAmount
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
    public function user_id(integer $user_id) : GetAmount
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"array","items":{"type":"string"},"maxItems":100}
     */
    public function votes(array $votes) : GetAmount
    {
        $this->params['votes'] = $votes;
        return $this;
    }
}