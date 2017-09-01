<?php

namespace Bdb\Addons\VK\Method;

/**
 * Checks a user in at the specified location.
 */
class Checkin
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Location ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function _place_id(integer $_place_id) : Checkin
    {
        $this->params['_place_id'] = $_place_id;
        return $this;
    }
    /**
     * Text of the comment on the check-in (255 characters maximum; line breaks not supported).
     *
     * {"type":"string","maxLength":255}
     */
    public function _text(string $_text) : Checkin
    {
        $this->params['_text'] = $_text;
        return $this;
    }
    /**
     * Geographical latitude of the check-in, in degrees (from '-90' to '90').
     *
     * {"type":"number","minimum":-90,"maximum":90}
     */
    public function _latitude(number $_latitude) : Checkin
    {
        $this->params['_latitude'] = $_latitude;
        return $this;
    }
    /**
     * Geographical longitude of the check-in, in degrees (from '-180' to '180').
     *
     * {"type":"number","minimum":-180,"maximum":180}
     */
    public function _longitude(number $_longitude) : Checkin
    {
        $this->params['_longitude'] = $_longitude;
        return $this;
    }
    /**
     * '1' — Check-in will be available only for friends.; '0' — Check-in will be available for all users (default).
     *
     * {"type":"boolean"}
     */
    public function _friends_only(boolean $_friends_only) : Checkin
    {
        $this->params['_friends_only'] = $_friends_only;
        return $this;
    }
    /**
     * List of services or websites (e.g., 'twitter', 'facebook') to which the check-in will be exported, if the user has set up the respective option.
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _services(array $_services) : Checkin
    {
        $this->params['_services'] = $_services;
        return $this;
    }
}