<?php

namespace Bdb\Addons\VK\Method;

/**
 * Counts the metric event.
 */
class MetricHit
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return true;
    }
    /**
     * Metric data obtained in the lead interface.
     *
     * {"type":"string"}
     */
    public function data(string $data) : MetricHit
    {
        $this->params['data'] = $data;
        return $this;
    }
}