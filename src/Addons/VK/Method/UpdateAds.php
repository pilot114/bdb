<?php

namespace Bdb\Addons\VK\Method;

/**
 * Edits ads.
 */
class UpdateAds
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
    public function account_id(integer $account_id) : UpdateAds
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * Serialized JSON array of objects that describe changes in ads. Description of 'ad_edit_specification' objects see below.
     *
     * {"type":"string"}
     */
    public function data(string $data) : UpdateAds
    {
        $this->params['data'] = $data;
        return $this;
    }
}