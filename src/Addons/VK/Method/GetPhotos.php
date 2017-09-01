<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of photos that the current user has liked.; ;
 */
class GetPhotos
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Offset needed to return a specific subset of photos.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $_offset) : GetPhotos
    {
        $this->params['_offset'] = $_offset;
        return $this;
    }
    /**
     * Number of photos to return.
     *
     * {"type":"integer","minimum":0,"default":50}
     */
    public function _count(integer $_count) : GetPhotos
    {
        $this->params['_count'] = $_count;
        return $this;
    }
    /**
     * '1' — to return photo sizes in a [vk.com/dev/photo_sizes|special format].
     *
     * {"type":"boolean"}
     */
    public function _photo_sizes(boolean $_photo_sizes) : GetPhotos
    {
        $this->params['_photo_sizes'] = $_photo_sizes;
        return $this;
    }
}