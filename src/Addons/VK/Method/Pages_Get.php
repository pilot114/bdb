<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns information about a wiki page.
 */
class Pages_Get extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('pages.get');
    }
    /**
     * Page owner ID.
     *
     * {"type":"integer"}
     */
    public function _owner_id(integer $owner_id) : Pages_Get
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Wiki page ID.
     *
     * {"type":"integer"}
     */
    public function _page_id(integer $page_id) : Pages_Get
    {
        $this->params['page_id'] = $page_id;
        return $this;
    }
    /**
     * '1' — to return information about a global wiki page
     *
     * {"type":"boolean"}
     */
    public function _global(boolean $global) : Pages_Get
    {
        $this->params['global'] = $global;
        return $this;
    }
    /**
     * '1' — resulting wiki page is a preview for the attached link
     *
     * {"type":"boolean"}
     */
    public function _site_preview(boolean $site_preview) : Pages_Get
    {
        $this->params['site_preview'] = $site_preview;
        return $this;
    }
    /**
     * Wiki page title.
     *
     * {"type":"string"}
     */
    public function _title(string $title) : Pages_Get
    {
        $this->params['title'] = $title;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"boolean"}
     */
    public function _need_source(boolean $need_source) : Pages_Get
    {
        $this->params['need_source'] = $need_source;
        return $this;
    }
    /**
     * '1' — to return the page as HTML;
     *
     * {"type":"boolean"}
     */
    public function _need_html(boolean $need_html) : Pages_Get
    {
        $this->params['need_html'] = $need_html;
        return $this;
    }
}