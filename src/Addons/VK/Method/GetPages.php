<?php

namespace Bdb\Addons\VK\Method;

/**
 * Gets a list of application/site pages where the [vk.com/dev/Comments|Comments widget] or [vk.com/dev/Like|Like widget] is installed.
 */
class GetPages
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return true;
    }
    /**
     * not description
     *
     * {"type":"integer"}
     */
    public function _widget_api_id(integer $_widget_api_id) : GetPages
    {
        $this->params['_widget_api_id'] = $_widget_api_id;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"string","default":0}
     */
    public function _order(string $_order) : GetPages
    {
        $this->params['_order'] = $_order;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"string","default":0}
     */
    public function _period(string $_period) : GetPages
    {
        $this->params['_period'] = $_period;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"integer","minimum":10,"default":10,"maximum":200}
     */
    public function _count(integer $_count) : GetPages
    {
        $this->params['_count'] = $_count;
        return $this;
    }
}