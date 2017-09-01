<?php

namespace Bdb\Addons\VK\Method;

/**
 * Indexes current user location and returns nearby users.
 */
class GetNearby
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * geographic latitude of the place a user is located, in degrees (from -90 to 90)
     *
     * {"type":"number","minimum":-90,"maximum":90}
     */
    public function latitude(number $latitude) : GetNearby
    {
        $this->params['latitude'] = $latitude;
        return $this;
    }
    /**
     * geographic longitude of the place a user is located, in degrees (from -180 to 180)
     *
     * {"type":"number","minimum":-180,"maximum":180}
     */
    public function longitude(number $longitude) : GetNearby
    {
        $this->params['longitude'] = $longitude;
        return $this;
    }
    /**
     * current location accuracy in meters
     *
     * {"type":"integer","minimum":0}
     */
    public function _accuracy(integer $_accuracy) : GetNearby
    {
        $this->params['_accuracy'] = $_accuracy;
        return $this;
    }
    /**
     * time when a user disappears from location search results, in seconds
     *
     * {"type":"integer","minimum":0,"default":7200}
     */
    public function _timeout(integer $_timeout) : GetNearby
    {
        $this->params['_timeout'] = $_timeout;
        return $this;
    }
    /**
     * search zone radius type (1 to 4); :* 1 – 300 m;; :* 2 – 2400 m;; :* 3 – 18 km;; :* 4 – 150 km.
     *
     * {"type":"integer","minimum":0,"default":1,"enum":[0,1,2,3,4],"enumNames":["any","300 m","2400 m","18 km","150 km."]}
     */
    public function _radius(integer $_radius) : GetNearby
    {
        $this->params['_radius'] = $_radius;
        return $this;
    }
    /**
     * list of additional fields to return.; Available values: sex, bdate, city, country, photo_50, photo_100, photo_200_orig, photo_200, photo_400_orig, photo_max, photo_max_orig, online, online_mobile, domain, has_mobile, contacts, connections, site, education, universities, schools, can_post, can_see_all_posts, can_see_audio, can_write_private_message, status, last_seen, common_count, relation, relatives, counters, screen_name, maiden_name, timezone, occupation
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $_fields) : GetNearby
    {
        $this->params['_fields'] = $_fields;
        return $this;
    }
    /**
     * Case for declension of user name and surname: ; nom –nominative (default) ; gen – genitive ; dat – dative ; acc – accusative ; ins – instrumental ; abl – prepositional
     *
     * {"type":"string","enum":["nom","gen","dat","acc","ins","abl"],"enumNames":["nominative","genitive","dative","accusative","instrumental","prepositional"]}
     */
    public function _name_case(string $_name_case) : GetNearby
    {
        $this->params['_name_case'] = $_name_case;
        return $this;
    }
}