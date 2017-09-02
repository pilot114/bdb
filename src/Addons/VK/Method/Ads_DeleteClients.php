<?php

namespace Bdb\Addons\VK\Method;

/**
 * Archives clients of an advertising agency.
 */
class Ads_DeleteClients extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('ads.deleteClients');
    }
    /**
     * Advertising account ID.
     *
     * {"type":"integer"}
     */
    public function account_id(integer $account_id) : Ads_DeleteClients
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * Serialized JSON array with IDs of deleted clients.
     *
     * {"type":"string"}
     */
    public function ids(string $ids) : Ads_DeleteClients
    {
        $this->params['ids'] = $ids;
        return $this;
    }
}