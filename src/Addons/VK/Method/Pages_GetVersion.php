<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns the text of one of the previous versions of a wiki page.
 */
class Pages_GetVersion extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('pages.getVersion');
    }
    /**
     * 
     *
     * {"type":"integer"}
     */
    public function version_id(integer $version_id) : Pages_GetVersion
    {
        $this->params['version_id'] = $version_id;
        return $this;
    }
    /**
     * ID of the community that owns the wiki page.
     *
     * {"type":"integer"}
     */
    public function _group_id(integer $group_id) : Pages_GetVersion
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * 
     *
     * {"type":"integer"}
     */
    public function _user_id(integer $user_id) : Pages_GetVersion
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * '1' — to return the page as HTML
     *
     * {"type":"boolean"}
     */
    public function _need_html(boolean $need_html) : Pages_GetVersion
    {
        $this->params['need_html'] = $need_html;
        return $this;
    }
}