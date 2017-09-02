<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns information about current state of a counter — number of remaining runs of methods and time to the next counter nulling in seconds.
 */
class Ads_GetFloodStats extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('ads.getFloodStats');
    }
    /**
     * Advertising account ID.
     *
     * {"type":"integer"}
     */
    public function account_id(integer $account_id) : Ads_GetFloodStats
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
}