<?php

namespace Bdb\Addons\VK\Method;

/**
 * Allows to reorder links in the community.
 */
class Groups_ReorderLink extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('groups.reorderLink');
    }
    /**
     * Community ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function group_id(integer $group_id) : Groups_ReorderLink
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Link ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function link_id(integer $link_id) : Groups_ReorderLink
    {
        $this->params['link_id'] = $link_id;
        return $this;
    }
    /**
     * ID of the link after which to place the link with 'link_id'.
     *
     * {"type":"integer","minimum":0}
     */
    public function _after(integer $after) : Groups_ReorderLink
    {
        $this->params['after'] = $after;
        return $this;
    }
}