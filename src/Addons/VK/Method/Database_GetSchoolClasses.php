<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of school classes specified for the country.
 */
class Database_GetSchoolClasses extends \Bdb\Addons\VK\BaseMethod
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return true;
    }
    public function __construct($client, $defaultQuery)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('database.getSchoolClasses');
    }
    /**
     * Country ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _country_id(int $country_id) : Database_GetSchoolClasses
    {
        $this->params['country_id'] = $country_id;
        return $this;
    }
}