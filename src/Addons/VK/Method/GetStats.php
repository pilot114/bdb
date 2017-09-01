<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns lead stats data.
 */
class GetStats
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Lead ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function lead_id(integer $lead_id) : GetStats
    {
        $this->params['lead_id'] = $lead_id;
        return $this;
    }
    /**
     * Secret key obtained from the lead testing interface.
     *
     * {"type":"string"}
     */
    public function _secret(string $_secret) : GetStats
    {
        $this->params['_secret'] = $_secret;
        return $this;
    }
    /**
     * Day to start stats from (YYYY_MM_DD, e.g.2011-09-17).
     *
     * {"type":"string"}
     */
    public function _date_start(string $_date_start) : GetStats
    {
        $this->params['_date_start'] = $_date_start;
        return $this;
    }
    /**
     * Day to finish stats (YYYY_MM_DD, e.g.2011-09-17).
     *
     * {"type":"string"}
     */
    public function _date_end(string $_date_end) : GetStats
    {
        $this->params['_date_end'] = $_date_end;
        return $this;
    }
}