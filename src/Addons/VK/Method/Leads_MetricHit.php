<?php

namespace Bdb\Addons\VK\Method;

/**
 * Counts the metric event.
 */
class Leads_MetricHit extends \Bdb\Addons\VK\BaseMethod
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return true;
    }
    public function __construct($client, $defaultQuery)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('leads.metricHit');
    }
    /**
     * Metric data obtained in the lead interface.
     *
     * {"type":"string"}
     */
    public function data(string $data) : Leads_MetricHit
    {
        $this->params['data'] = $data;
        return $this;
    }
}