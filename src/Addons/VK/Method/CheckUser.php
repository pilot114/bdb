<?php

namespace Bdb\Addons\VK\Method;

/**
 * Checks if the user can start the lead.
 */
class CheckUser
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
    public function lead_id(integer $lead_id) : CheckUser
    {
        $this->params['lead_id'] = $lead_id;
        return $this;
    }
    /**
     * Value to be return in 'result' field when test mode is used.
     *
     * {"type":"integer","minimum":0}
     */
    public function _test_result(integer $_test_result) : CheckUser
    {
        $this->params['_test_result'] = $_test_result;
        return $this;
    }
    /**
     * User age.
     *
     * {"type":"integer","minimum":0}
     */
    public function _age(integer $_age) : CheckUser
    {
        $this->params['_age'] = $_age;
        return $this;
    }
    /**
     * User country code.
     *
     * {"type":"string"}
     */
    public function _country(string $_country) : CheckUser
    {
        $this->params['_country'] = $_country;
        return $this;
    }
}