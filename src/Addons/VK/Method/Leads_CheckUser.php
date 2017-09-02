<?php

namespace Bdb\Addons\VK\Method;

/**
 * Checks if the user can start the lead.
 */
class Leads_CheckUser extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('leads.checkUser');
    }
    /**
     * Lead ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function lead_id(integer $lead_id) : Leads_CheckUser
    {
        $this->params['lead_id'] = $lead_id;
        return $this;
    }
    /**
     * Value to be return in 'result' field when test mode is used.
     *
     * {"type":"integer","minimum":0}
     */
    public function _test_result(integer $test_result) : Leads_CheckUser
    {
        $this->params['test_result'] = $test_result;
        return $this;
    }
    /**
     * User age.
     *
     * {"type":"integer","minimum":0}
     */
    public function _age(integer $age) : Leads_CheckUser
    {
        $this->params['age'] = $age;
        return $this;
    }
    /**
     * User country code.
     *
     * {"type":"string"}
     */
    public function _country(string $country) : Leads_CheckUser
    {
        $this->params['country'] = $country;
        return $this;
    }
}