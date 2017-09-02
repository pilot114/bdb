<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of invitations to join communities and events.; ;
 */
class Groups_GetInvites extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('groups.getInvites');
    }
    /**
     * Offset needed to return a specific subset of invitations.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : Groups_GetInvites
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of invitations to return.
     *
     * {"type":"int","minimum":0,"default":20}
     */
    public function _count(int $count) : Groups_GetInvites
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * '1' — to return additional [vk.com/dev/fields_groups|fields] for communities..
     *
     * {"type":"boolean"}
     */
    public function _extended(boolean $extended) : Groups_GetInvites
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}