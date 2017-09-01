<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns list of chairs on a specified faculty.
 */
class GetChairs
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return true;
    }
    /**
     * id of the faculty to get chairs from
     *
     * {"type":"integer","minimum":0}
     */
    public function faculty_id(integer $faculty_id) : GetChairs
    {
        $this->params['faculty_id'] = $faculty_id;
        return $this;
    }
    /**
     * offset required to get a certain subset of chairs
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $_offset) : GetChairs
    {
        $this->params['_offset'] = $_offset;
        return $this;
    }
    /**
     * amount of chairs to get
     *
     * {"type":"integer","minimum":0,"default":100,"maximum":10000}
     */
    public function _count(integer $_count) : GetChairs
    {
        $this->params['_count'] = $_count;
        return $this;
    }
}