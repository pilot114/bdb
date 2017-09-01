<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of school classes specified for the country.
 */
class GetSchoolClasses
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return true;
    }
    /**
     * Country ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function _country_id(integer $_country_id) : GetSchoolClasses
    {
        $this->params['_country_id'] = $_country_id;
        return $this;
    }
}