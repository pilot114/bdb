<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of faculties (i.e., university departments).;
 */
class Database_GetFaculties extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('database.getFaculties');
    }
    /**
     * University ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function university_id(integer $university_id) : Database_GetFaculties
    {
        $this->params['university_id'] = $university_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of faculties.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $offset) : Database_GetFaculties
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of faculties to return.
     *
     * {"type":"integer","minimum":0,"default":100,"maximum":10000}
     */
    public function _count(integer $count) : Database_GetFaculties
    {
        $this->params['count'] = $count;
        return $this;
    }
}