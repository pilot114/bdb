<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of invitations to join communities and events.; ;
 */
class GetInvites
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Offset needed to return a specific subset of invitations.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $_offset) : GetInvites
    {
        $this->params['_offset'] = $_offset;
        return $this;
    }
    /**
     * Number of invitations to return.
     *
     * {"type":"integer","minimum":0,"default":20}
     */
    public function _count(integer $_count) : GetInvites
    {
        $this->params['_count'] = $_count;
        return $this;
    }
    /**
     * '1' — to return additional [vk.com/dev/fields_groups|fields] for communities..
     *
     * {"type":"boolean"}
     */
    public function _extended(boolean $_extended) : GetInvites
    {
        $this->params['_extended'] = $_extended;
        return $this;
    }
}