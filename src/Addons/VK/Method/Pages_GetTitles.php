<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of wiki pages in a group.
 */
class Pages_GetTitles extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('pages.getTitles');
    }
    /**
     * ID of the community that owns the wiki page.
     *
     * {"type":"integer"}
     */
    public function _group_id(integer $group_id) : Pages_GetTitles
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}