<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns the text of one of the previous versions of a wiki page.
 */
class GetVersion
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * 
     *
     * {"type":"integer"}
     */
    public function version_id(integer $version_id) : GetVersion
    {
        $this->params['version_id'] = $version_id;
        return $this;
    }
    /**
     * ID of the community that owns the wiki page.
     *
     * {"type":"integer"}
     */
    public function _group_id(integer $_group_id) : GetVersion
    {
        $this->params['_group_id'] = $_group_id;
        return $this;
    }
    /**
     * 
     *
     * {"type":"integer"}
     */
    public function _user_id(integer $_user_id) : GetVersion
    {
        $this->params['_user_id'] = $_user_id;
        return $this;
    }
    /**
     * '1' — to return the page as HTML
     *
     * {"type":"boolean"}
     */
    public function _need_html(boolean $_need_html) : GetVersion
    {
        $this->params['_need_html'] = $_need_html;
        return $this;
    }
}