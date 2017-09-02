<?php

namespace Bdb\Addons\VK\Method;

/**
 * Checks a user in at the specified location.
 */
class Places_Checkin extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('places.checkin');
    }
    /**
     * Location ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function _place_id(integer $place_id) : Places_Checkin
    {
        $this->params['place_id'] = $place_id;
        return $this;
    }
    /**
     * Text of the comment on the check-in (255 characters maximum; line breaks not supported).
     *
     * {"type":"string","maxLength":255}
     */
    public function _text(string $text) : Places_Checkin
    {
        $this->params['text'] = $text;
        return $this;
    }
    /**
     * Geographical latitude of the check-in, in degrees (from '-90' to '90').
     *
     * {"type":"float","minimum":-90,"maximum":90}
     */
    public function _latitude(float $latitude) : Places_Checkin
    {
        $this->params['latitude'] = $latitude;
        return $this;
    }
    /**
     * Geographical longitude of the check-in, in degrees (from '-180' to '180').
     *
     * {"type":"float","minimum":-180,"maximum":180}
     */
    public function _longitude(float $longitude) : Places_Checkin
    {
        $this->params['longitude'] = $longitude;
        return $this;
    }
    /**
     * '1' — Check-in will be available only for friends.; '0' — Check-in will be available for all users (default).
     *
     * {"type":"boolean"}
     */
    public function _friends_only(boolean $friends_only) : Places_Checkin
    {
        $this->params['friends_only'] = $friends_only;
        return $this;
    }
    /**
     * List of services or websites (e.g., 'twitter', 'facebook') to which the check-in will be exported, if the user has set up the respective option.
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _services(array $services) : Places_Checkin
    {
        $this->params['services'] = $services;
        return $this;
    }
}