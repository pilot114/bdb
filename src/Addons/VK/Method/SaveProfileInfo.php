<?php

namespace Bdb\Addons\VK\Method;

/**
 * Edits current profile info.
 */
class SaveProfileInfo
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * User first name.
     *
     * {"type":"string"}
     */
    public function _first_name(string $_first_name) : SaveProfileInfo
    {
        $this->params['_first_name'] = $_first_name;
        return $this;
    }
    /**
     * User last name.
     *
     * {"type":"string"}
     */
    public function _last_name(string $_last_name) : SaveProfileInfo
    {
        $this->params['_last_name'] = $_last_name;
        return $this;
    }
    /**
     * User maiden name (female only)
     *
     * {"type":"string"}
     */
    public function _maiden_name(string $_maiden_name) : SaveProfileInfo
    {
        $this->params['_maiden_name'] = $_maiden_name;
        return $this;
    }
    /**
     * User screen name.
     *
     * {"type":"string"}
     */
    public function _screen_name(string $_screen_name) : SaveProfileInfo
    {
        $this->params['_screen_name'] = $_screen_name;
        return $this;
    }
    /**
     * ID of the name change request to be canceled. If this parameter is sent, all the others are ignored.
     *
     * {"type":"integer","minimum":0}
     */
    public function _cancel_request_id(integer $_cancel_request_id) : SaveProfileInfo
    {
        $this->params['_cancel_request_id'] = $_cancel_request_id;
        return $this;
    }
    /**
     * User sex. Possible values: ; * '1' – female;; * '2' – male.
     *
     * {"type":"integer","minimum":0,"enum":[0,1,2],"enumNames":["undefined","female","male"]}
     */
    public function _sex(integer $_sex) : SaveProfileInfo
    {
        $this->params['_sex'] = $_sex;
        return $this;
    }
    /**
     * User relationship status. Possible values: ; * '1' – single;; * '2' – in a relationship;; * '3' – engaged;; * '4' – married;; * '5' – it's complicated;; * '6' – actively searching;; * '7' – in love;; * '0' – not specified.
     *
     * {"type":"integer","minimum":0,"enum":[1,2,3,4,5,6,7,0],"enumNames":["single","relationship","engaged","married","complicated","actively searching","in love","not specified"]}
     */
    public function _relation(integer $_relation) : SaveProfileInfo
    {
        $this->params['_relation'] = $_relation;
        return $this;
    }
    /**
     * ID of the relationship partner.
     *
     * {"type":"integer","minimum":0}
     */
    public function _relation_partner_id(integer $_relation_partner_id) : SaveProfileInfo
    {
        $this->params['_relation_partner_id'] = $_relation_partner_id;
        return $this;
    }
    /**
     * User birth date, format: DD.MM.YYYY.
     *
     * {"type":"string"}
     */
    public function _bdate(string $_bdate) : SaveProfileInfo
    {
        $this->params['_bdate'] = $_bdate;
        return $this;
    }
    /**
     * Birth date visibility. Returned values: ; * '1' – show birth date;; * '2' – show only month and day;; * '0' – hide birth date.
     *
     * {"type":"integer","minimum":0,"enum":[1,2,0],"enumNames":["show","hide year","hide"]}
     */
    public function _bdate_visibility(integer $_bdate_visibility) : SaveProfileInfo
    {
        $this->params['_bdate_visibility'] = $_bdate_visibility;
        return $this;
    }
    /**
     * User home town.
     *
     * {"type":"string"}
     */
    public function _home_town(string $_home_town) : SaveProfileInfo
    {
        $this->params['_home_town'] = $_home_town;
        return $this;
    }
    /**
     * User country.
     *
     * {"type":"integer","minimum":0}
     */
    public function _country_id(integer $_country_id) : SaveProfileInfo
    {
        $this->params['_country_id'] = $_country_id;
        return $this;
    }
    /**
     * User city.
     *
     * {"type":"integer","minimum":0}
     */
    public function _city_id(integer $_city_id) : SaveProfileInfo
    {
        $this->params['_city_id'] = $_city_id;
        return $this;
    }
    /**
     * Status text.
     *
     * {"type":"string"}
     */
    public function _status(string $_status) : SaveProfileInfo
    {
        $this->params['_status'] = $_status;
        return $this;
    }
}