<?php

namespace Bdb\Addons\VK\Method;

/**
 * Creates and edits user newsfeed lists
 */
class SaveList
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * numeric list identifier (if not sent, will be set automatically).
     *
     * {"type":"integer","minimum":0}
     */
    public function _list_id(integer $_list_id) : SaveList
    {
        $this->params['_list_id'] = $_list_id;
        return $this;
    }
    /**
     * list name.
     *
     * {"type":"string"}
     */
    public function title(string $title) : SaveList
    {
        $this->params['title'] = $title;
        return $this;
    }
    /**
     * users and communities identifiers to be added to the list. Community identifiers must be negative numbers.
     *
     * {"type":"array","items":{"type":"integer"}}
     */
    public function _source_ids(array $_source_ids) : SaveList
    {
        $this->params['_source_ids'] = $_source_ids;
        return $this;
    }
    /**
     * reposts display on and off ('1' is for off).
     *
     * {"type":"boolean"}
     */
    public function _no_reposts(boolean $_no_reposts) : SaveList
    {
        $this->params['_no_reposts'] = $_no_reposts;
        return $this;
    }
}