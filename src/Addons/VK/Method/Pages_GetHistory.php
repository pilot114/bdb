<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of all previous versions of a wiki page.
 */
class Pages_GetHistory extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('pages.getHistory');
    }
    /**
     * Wiki page ID.
     *
     * {"type":"integer"}
     */
    public function page_id(integer $page_id) : Pages_GetHistory
    {
        $this->params['page_id'] = $page_id;
        return $this;
    }
    /**
     * ID of the community that owns the wiki page.
     *
     * {"type":"integer"}
     */
    public function _group_id(integer $group_id) : Pages_GetHistory
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * 
     *
     * {"type":"integer"}
     */
    public function _user_id(integer $user_id) : Pages_GetHistory
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
}