<?php

namespace Bdb\Addons\VK\Method;

/**
 * With this method you can join the group or public page, and also confirm your participation in an event.
 */
class Join
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * ID or screen name of the community.
     *
     * {"type":"integer","minimum":0}
     */
    public function _group_id(integer $_group_id) : Join
    {
        $this->params['_group_id'] = $_group_id;
        return $this;
    }
    /**
     * Optional parameter which is taken into account when 'gid' belongs to the event:; '1' — Perhaps I will attend; '0' — I will be there for sure (default); ;
     *
     * {"type":"string"}
     */
    public function _not_sure(string $_not_sure) : Join
    {
        $this->params['_not_sure'] = $_not_sure;
        return $this;
    }
}