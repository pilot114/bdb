<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of active ads (offers) which executed by the user will bring him/her respective number of votes to his balance in the application.
 */
class GetActiveOffers
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Number of results to return.
     *
     * {"type":"integer","minimum":0,"default":100,"maximum":100}
     */
    public function _count(integer $_count) : GetActiveOffers
    {
        $this->params['_count'] = $_count;
        return $this;
    }
}