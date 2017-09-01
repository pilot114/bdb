<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of videos with tags that have not been viewed.
 */
class GetNewTags
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Offset needed to return a specific subset of videos.
     *
     * {"type":"integer"}
     */
    public function _offset(integer $_offset) : GetNewTags
    {
        $this->params['_offset'] = $_offset;
        return $this;
    }
    /**
     * Number of videos to return.
     *
     * {"type":"integer","minimum":0,"maximum":100,"default":20}
     */
    public function _count(integer $_count) : GetNewTags
    {
        $this->params['_count'] = $_count;
        return $this;
    }
}