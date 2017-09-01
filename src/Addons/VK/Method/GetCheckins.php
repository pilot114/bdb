<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of user check-ins at locations according to the set parameters.
 */
class GetCheckins
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Geographical latitude of the initial search point, in degrees (from '-90' to '90').
     *
     * {"type":"number","minimum":-90,"maximum":90}
     */
    public function _latitude(number $_latitude) : GetCheckins
    {
        $this->params['_latitude'] = $_latitude;
        return $this;
    }
    /**
     * Geographical longitude of the initial search point, in degrees (from '-180' to '180').
     *
     * {"type":"number","minimum":-180,"maximum":180}
     */
    public function _longitude(number $_longitude) : GetCheckins
    {
        $this->params['_longitude'] = $_longitude;
        return $this;
    }
    /**
     * Location ID of check-ins to return. (Ignored if 'latitude' and 'longitude' are specified.)
     *
     * {"type":"integer","minimum":0}
     */
    public function _place(integer $_place) : GetCheckins
    {
        $this->params['_place'] = $_place;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"integer","minimum":0}
     */
    public function _user_id(integer $_user_id) : GetCheckins
    {
        $this->params['_user_id'] = $_user_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of check-ins. (Ignored if 'timestamp' is not null.)
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $_offset) : GetCheckins
    {
        $this->params['_offset'] = $_offset;
        return $this;
    }
    /**
     * Number of check-ins to return. (Ignored if 'timestamp' is not null.)
     *
     * {"type":"integer","minimum":0,"default":20,"maximum":100}
     */
    public function _count(integer $_count) : GetCheckins
    {
        $this->params['_count'] = $_count;
        return $this;
    }
    /**
     * Specifies that only those check-ins created after the specified timestamp will be returned.
     *
     * {"type":"integer","minimum":0}
     */
    public function _timestamp(integer $_timestamp) : GetCheckins
    {
        $this->params['_timestamp'] = $_timestamp;
        return $this;
    }
    /**
     * '1' — to return only check-ins with set geographical coordinates. (Ignored if 'latitude' and 'longitude' are not set.)
     *
     * {"type":"boolean"}
     */
    public function _friends_only(boolean $_friends_only) : GetCheckins
    {
        $this->params['_friends_only'] = $_friends_only;
        return $this;
    }
    /**
     * '1' — to return location information with the check-ins. (Ignored if 'place' is not set.);
     *
     * {"type":"boolean"}
     */
    public function _need_places(boolean $_need_places) : GetCheckins
    {
        $this->params['_need_places'] = $_need_places;
        return $this;
    }
}