<?php

namespace Bdb\Addons\VK\Method;

/**
 * Creates ads.
 */
class CreateAds
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Advertising account ID.
     *
     * {"type":"integer"}
     */
    public function account_id(integer $account_id) : CreateAds
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * Serialized JSON array of objects that describe created ads. Description of 'ad_specification' objects see below.
     *
     * {"type":"string"}
     */
    public function data(string $data) : CreateAds
    {
        $this->params['data'] = $data;
        return $this;
    }
}