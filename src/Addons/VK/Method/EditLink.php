<?php

namespace Bdb\Addons\VK\Method;

/**
 * Allows to edit a link in the community.
 */
class EditLink
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
    public function group_id(integer $group_id) : EditLink
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Link ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function link_id(integer $link_id) : EditLink
    {
        $this->params['link_id'] = $link_id;
        return $this;
    }
    /**
     * New description text for the link.
     *
     * {"type":"string"}
     */
    public function _text(string $_text) : EditLink
    {
        $this->params['_text'] = $_text;
        return $this;
    }
}