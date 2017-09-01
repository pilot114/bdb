<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of wiki pages in a group.
 */
class GetTitles
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * ID of the community that owns the wiki page.
     *
     * {"type":"integer"}
     */
    public function _group_id(integer $_group_id) : GetTitles
    {
        $this->params['_group_id'] = $_group_id;
        return $this;
    }
}