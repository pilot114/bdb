<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a set of auto-suggestions for various targeting parameters.
 */
class GetSuggestions
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Section, suggestions are retrieved in. Available values:; *countries — request of a list of countries. If q is not set or blank, a short list of countries is shown. Otherwise, a full list of countries is shown.; *regions — requested list of regions. 'country' parameter is required.; *cities — requested list of cities. 'country' parameter is required.; *districts — requested list of districts. 'cities' parameter is required.; *stations — requested list of subway stations. 'cities' parameter is required.; *streets — requested list of streets. 'cities' parameter is required.; *schools — requested list of educational organizations. 'cities' parameter is required.; *interests — requested list of interests.; *positions — requested list of positions (professions).; *group_types — requested list of group types.; *religions — requested list of religious commitments.; *browsers — requested list of browsers and mobile devices.;
     *
     * {"type":"string","enum":["countries","regions","cities","districts","stations","streets","schools","interests","positions","group_types","religions","browsers"]}
     */
    public function section(string $section) : GetSuggestions
    {
        $this->params['section'] = $section;
        return $this;
    }
    /**
     * Objects IDs separated by commas. If the parameter is passed, 'q, country, cities' should not be passed.
     *
     * {"type":"string"}
     */
    public function _ids(string $_ids) : GetSuggestions
    {
        $this->params['_ids'] = $_ids;
        return $this;
    }
    /**
     * Filter-line of the request (for countries, regions, cities, streets, schools, interests, positions).
     *
     * {"type":"string"}
     */
    public function _q(string $_q) : GetSuggestions
    {
        $this->params['_q'] = $_q;
        return $this;
    }
    /**
     * ID of the country objects are searched in.
     *
     * {"type":"integer"}
     */
    public function _country(integer $_country) : GetSuggestions
    {
        $this->params['_country'] = $_country;
        return $this;
    }
    /**
     * IDs of cities where objects are searched in, separated with a comma.
     *
     * {"type":"string"}
     */
    public function _cities(string $_cities) : GetSuggestions
    {
        $this->params['_cities'] = $_cities;
        return $this;
    }
    /**
     * Language of the returned string values. Supported languages:; *ru — Russian;; *ua — Ukrainian;; *en — English.;
     *
     * {"type":"string","enum":["ru","ua","en"],"enumNames":["russian","ukrainian","english"]}
     */
    public function _lang(string $_lang) : GetSuggestions
    {
        $this->params['_lang'] = $_lang;
        return $this;
    }
}