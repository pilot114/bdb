<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of faculties (i.e., university departments).;
 */
class GetFaculties
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return true;
    }
    /**
     * University ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function university_id(integer $university_id) : GetFaculties
    {
        $this->params['university_id'] = $university_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of faculties.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $_offset) : GetFaculties
    {
        $this->params['_offset'] = $_offset;
        return $this;
    }
    /**
     * Number of faculties to return.
     *
     * {"type":"integer","minimum":0,"default":100,"maximum":10000}
     */
    public function _count(integer $_count) : GetFaculties
    {
        $this->params['_count'] = $_count;
        return $this;
    }
}