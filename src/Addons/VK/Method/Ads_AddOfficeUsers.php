<?php

namespace Bdb\Addons\VK\Method;

/**
 * Adds managers and/or supervisors to advertising account.
 */
class Ads_AddOfficeUsers extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('ads.addOfficeUsers');
    }
    /**
     * Advertising account ID.
     *
     * {"type":"int"}
     */
    public function account_id(int $account_id) : Ads_AddOfficeUsers
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * Serialized JSON array of objects that describe added managers. Description of 'user_specification' objects see below.
     *
     * {"type":"string"}
     */
    public function data(string $data) : Ads_AddOfficeUsers
    {
        $this->params['data'] = $data;
        return $this;
    }
}