<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of countries.
 */
class GetCountries
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return true;
    }
    /**
     * '1' — to return a full list of all countries; '0' — to return a list of countries near the current user's country (default).;
     *
     * {"type":"boolean"}
     */
    public function _need_all(boolean $_need_all) : GetCountries
    {
        $this->params['_need_all'] = $_need_all;
        return $this;
    }
    /**
     * Country codes in [vk.com/dev/country_codes|ISO 3166-1 alpha-2] standard.
     *
     * {"type":"string"}
     */
    public function _code(string $_code) : GetCountries
    {
        $this->params['_code'] = $_code;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of countries.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $_offset) : GetCountries
    {
        $this->params['_offset'] = $_offset;
        return $this;
    }
    /**
     * Number of countries to return.
     *
     * {"type":"integer","minimum":0,"default":100,"maximum":1000}
     */
    public function _count(integer $_count) : GetCountries
    {
        $this->params['_count'] = $_count;
        return $this;
    }
}