<?php

namespace Bdb\Addons\VK\Method;

/**
 * Creates new session for the user passing the offer.
 */
class Start
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return true;
    }
    /**
     * Lead ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function lead_id(integer $lead_id) : Start
    {
        $this->params['lead_id'] = $lead_id;
        return $this;
    }
    /**
     * Secret key from the lead testing interface.
     *
     * {"type":"string"}
     */
    public function secret(string $secret) : Start
    {
        $this->params['secret'] = $secret;
        return $this;
    }
}