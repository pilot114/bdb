<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of user check-ins at locations according to the set parameters.
 */
class Places_GetCheckins extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('places.getCheckins');
    }
    /**
     * Geographical latitude of the initial search point, in degrees (from '-90' to '90').
     *
     * {"type":"float","minimum":-90,"maximum":90}
     */
    public function _latitude(float $latitude) : Places_GetCheckins
    {
        $this->params['latitude'] = $latitude;
        return $this;
    }
    /**
     * Geographical longitude of the initial search point, in degrees (from '-180' to '180').
     *
     * {"type":"float","minimum":-180,"maximum":180}
     */
    public function _longitude(float $longitude) : Places_GetCheckins
    {
        $this->params['longitude'] = $longitude;
        return $this;
    }
    /**
     * Location ID of check-ins to return. (Ignored if 'latitude' and 'longitude' are specified.)
     *
     * {"type":"integer","minimum":0}
     */
    public function _place(integer $place) : Places_GetCheckins
    {
        $this->params['place'] = $place;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"integer","minimum":0}
     */
    public function _user_id(integer $user_id) : Places_GetCheckins
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of check-ins. (Ignored if 'timestamp' is not null.)
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $offset) : Places_GetCheckins
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of check-ins to return. (Ignored if 'timestamp' is not null.)
     *
     * {"type":"integer","minimum":0,"default":20,"maximum":100}
     */
    public function _count(integer $count) : Places_GetCheckins
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Specifies that only those check-ins created after the specified timestamp will be returned.
     *
     * {"type":"integer","minimum":0}
     */
    public function _timestamp(integer $timestamp) : Places_GetCheckins
    {
        $this->params['timestamp'] = $timestamp;
        return $this;
    }
    /**
     * '1' — to return only check-ins with set geographical coordinates. (Ignored if 'latitude' and 'longitude' are not set.)
     *
     * {"type":"boolean"}
     */
    public function _friends_only(boolean $friends_only) : Places_GetCheckins
    {
        $this->params['friends_only'] = $friends_only;
        return $this;
    }
    /**
     * '1' — to return location information with the check-ins. (Ignored if 'place' is not set.);
     *
     * {"type":"boolean"}
     */
    public function _need_places(boolean $need_places) : Places_GetCheckins
    {
        $this->params['need_places'] = $need_places;
        return $this;
    }
}