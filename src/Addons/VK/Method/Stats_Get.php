<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns statistics of a community or an application.
 */
class Stats_Get extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('stats.get');
    }
    /**
     * Community ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function _group_id(integer $group_id) : Stats_Get
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Application ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function _app_id(integer $app_id) : Stats_Get
    {
        $this->params['app_id'] = $app_id;
        return $this;
    }
    /**
     * Latest datestamp (in Unix time) of statistics to return.
     *
     * {"type":"string"}
     */
    public function _date_from(string $date_from) : Stats_Get
    {
        $this->params['date_from'] = $date_from;
        return $this;
    }
    /**
     * End datestamp (in Unix time) of statistics to return.
     *
     * {"type":"string"}
     */
    public function _date_to(string $date_to) : Stats_Get
    {
        $this->params['date_to'] = $date_to;
        return $this;
    }
}