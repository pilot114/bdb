<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of advertising agency's clients.
 */
class Ads_GetClients extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('ads.getClients');
    }
    /**
     * Advertising account ID.
     *
     * {"type":"integer"}
     */
    public function account_id(integer $account_id) : Ads_GetClients
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
}