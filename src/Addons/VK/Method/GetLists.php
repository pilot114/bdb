<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of newsfeeds followed by the current user.
 */
class GetLists
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * numeric list identifiers.
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function _list_ids(array $_list_ids) : GetLists
    {
        $this->params['_list_ids'] = $_list_ids;
        return $this;
    }
}