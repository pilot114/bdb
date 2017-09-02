<?php

namespace Bdb\Addons\VK\Method;

/**
 * Creates clients of an advertising agency.
 */
class Ads_CreateClients extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('ads.createClients');
    }
    /**
     * Advertising account ID.
     *
     * {"type":"integer"}
     */
    public function account_id(integer $account_id) : Ads_CreateClients
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * Serialized JSON array of objects that describe created campaigns. Description of 'client_specification' objects see below.
     *
     * {"type":"string"}
     */
    public function data(string $data) : Ads_CreateClients
    {
        $this->params['data'] = $data;
        return $this;
    }
}