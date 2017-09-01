<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns community's collections list.
 */
class GetAlbums
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * ID of an items owner community.
     *
     * {"type":"integer"}
     */
    public function owner_id(integer $owner_id) : GetAlbums
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of results.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $_offset) : GetAlbums
    {
        $this->params['_offset'] = $_offset;
        return $this;
    }
    /**
     * Number of items to return.
     *
     * {"type":"integer","minimum":0,"default":50,"maximum":100}
     */
    public function _count(integer $_count) : GetAlbums
    {
        $this->params['_count'] = $_count;
        return $this;
    }
}