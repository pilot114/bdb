<?php

namespace Bdb\Addons\VK\Method;

/**
 * Saves modified read and edit access settings for a wiki page.
 */
class SaveAccess
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Wiki page ID.
     *
     * {"type":"integer"}
     */
    public function page_id(integer $page_id) : SaveAccess
    {
        $this->params['page_id'] = $page_id;
        return $this;
    }
    /**
     * ID of the community that owns the wiki page.
     *
     * {"type":"integer"}
     */
    public function _group_id(integer $_group_id) : SaveAccess
    {
        $this->params['_group_id'] = $_group_id;
        return $this;
    }
    /**
     * 
     *
     * {"type":"integer"}
     */
    public function _user_id(integer $_user_id) : SaveAccess
    {
        $this->params['_user_id'] = $_user_id;
        return $this;
    }
    /**
     * Who can view the wiki page:; '1' — only community members; '2' — all users can view the page; '0' — only community managers
     *
     * {"type":"integer","enum":[0,1,2],"enumNames":["managers","members","all"]}
     */
    public function _view(integer $_view) : SaveAccess
    {
        $this->params['_view'] = $_view;
        return $this;
    }
    /**
     * Who can edit the wiki page:; '1' — only community members; '2' — all users can edit the page; '0' — only community managers
     *
     * {"type":"integer","enum":[0,1,2],"enumNames":["managers","members","all"]}
     */
    public function _edit(integer $_edit) : SaveAccess
    {
        $this->params['_edit'] = $_edit;
        return $this;
    }
}