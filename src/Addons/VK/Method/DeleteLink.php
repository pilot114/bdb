<?php

namespace Bdb\Addons\VK\Method;

/**
 * Allows to delete a link from the community.
 */
class DeleteLink
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Community ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function group_id(integer $group_id) : DeleteLink
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Link ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function link_id(integer $link_id) : DeleteLink
    {
        $this->params['link_id'] = $link_id;
        return $this;
    }
}