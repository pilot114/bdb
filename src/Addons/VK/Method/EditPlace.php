<?php

namespace Bdb\Addons\VK\Method;

/**
 * Edits the place in community.
 */
class EditPlace
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Community ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function group_id(integer $group_id) : EditPlace
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Place title.
     *
     * {"type":"string"}
     */
    public function _title(string $_title) : EditPlace
    {
        $this->params['_title'] = $_title;
        return $this;
    }
    /**
     * Place address.
     *
     * {"type":"string"}
     */
    public function _address(string $_address) : EditPlace
    {
        $this->params['_address'] = $_address;
        return $this;
    }
    /**
     * Country ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function _country_id(integer $_country_id) : EditPlace
    {
        $this->params['_country_id'] = $_country_id;
        return $this;
    }
    /**
     * City ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function _city_id(integer $_city_id) : EditPlace
    {
        $this->params['_city_id'] = $_city_id;
        return $this;
    }
    /**
     * Geographical latitude.
     *
     * {"type":"number","minimum":-90,"maximum":90}
     */
    public function _latitude(number $_latitude) : EditPlace
    {
        $this->params['_latitude'] = $_latitude;
        return $this;
    }
    /**
     * Geographical longitude.
     *
     * {"type":"number","minimum":-180,"maximum":180}
     */
    public function _longitude(number $_longitude) : EditPlace
    {
        $this->params['_longitude'] = $_longitude;
        return $this;
    }
}