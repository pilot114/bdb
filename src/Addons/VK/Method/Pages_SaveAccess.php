<?php

namespace Bdb\Addons\VK\Method;

/**
 * Saves modified read and edit access settings for a wiki page.
 */
class Pages_SaveAccess extends \Bdb\Addons\VK\BaseMethod
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    public function __construct($client, $defaultQuery)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('pages.saveAccess');
    }
    /**
     * Wiki page ID.
     *
     * {"type":"integer"}
     */
    public function page_id(integer $page_id) : Pages_SaveAccess
    {
        $this->params['page_id'] = $page_id;
        return $this;
    }
    /**
     * ID of the community that owns the wiki page.
     *
     * {"type":"integer"}
     */
    public function _group_id(integer $group_id) : Pages_SaveAccess
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * 
     *
     * {"type":"integer"}
     */
    public function _user_id(integer $user_id) : Pages_SaveAccess
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * Who can view the wiki page:; '1' — only community members; '2' — all users can view the page; '0' — only community managers
     *
     * {"type":"integer","enum":[0,1,2],"enumNames":["managers","members","all"]}
     */
    public function _view(integer $view) : Pages_SaveAccess
    {
        $this->params['view'] = $view;
        return $this;
    }
    /**
     * Who can edit the wiki page:; '1' — only community members; '2' — all users can edit the page; '0' — only community managers
     *
     * {"type":"integer","enum":[0,1,2],"enumNames":["managers","members","all"]}
     */
    public function _edit(integer $edit) : Pages_SaveAccess
    {
        $this->params['edit'] = $edit;
        return $this;
    }
}