<?php

namespace Bdb\Addons\VK\Method;

/**
 * not description
 */
class DeleteList
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
    public function list_id(integer $list_id) : DeleteList
    {
        $this->params['list_id'] = $list_id;
        return $this;
    }
}