<?php

namespace Bdb\Addons\VK\Method;

/**
 * Saves the text of a wiki page.
 */
class Pages_Save extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('pages.save');
    }
    /**
     * Text of the wiki page in wiki-format.
     *
     * {"type":"string"}
     */
    public function _text(string $text) : Pages_Save
    {
        $this->params['text'] = $text;
        return $this;
    }
    /**
     * Wiki page ID. The 'title' parameter can be passed instead of 'pid'.
     *
     * {"type":"integer"}
     */
    public function _page_id(integer $page_id) : Pages_Save
    {
        $this->params['page_id'] = $page_id;
        return $this;
    }
    /**
     * ID of the community that owns the wiki page.
     *
     * {"type":"integer"}
     */
    public function _group_id(integer $group_id) : Pages_Save
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * 
     *
     * {"type":"integer"}
     */
    public function _user_id(integer $user_id) : Pages_Save
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * Wiki page title.
     *
     * {"type":"string"}
     */
    public function _title(string $title) : Pages_Save
    {
        $this->params['title'] = $title;
        return $this;
    }
}