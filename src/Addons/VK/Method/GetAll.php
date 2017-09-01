<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of photos belonging to a user or community, in reverse chronological order.
 */
class GetAll
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * ID of a user or community that owns the photos.; Use a negative value to designate a community ID.
     *
     * {"type":"integer"}
     */
    public function _owner_id(integer $_owner_id) : GetAll
    {
        $this->params['_owner_id'] = $_owner_id;
        return $this;
    }
    /**
     * '1' — to return detailed information about photos
     *
     * {"type":"boolean"}
     */
    public function _extended(boolean $_extended) : GetAll
    {
        $this->params['_extended'] = $_extended;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of photos. By default, '0'.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $_offset) : GetAll
    {
        $this->params['_offset'] = $_offset;
        return $this;
    }
    /**
     * Number of photos to return.
     *
     * {"type":"integer","minimum":0,"default":20,"maximum":200}
     */
    public function _count(integer $_count) : GetAll
    {
        $this->params['_count'] = $_count;
        return $this;
    }
    /**
     * '1' – to return image sizes in [vk.com/dev/photo_sizes|special format].
     *
     * {"type":"boolean"}
     */
    public function _photo_sizes(boolean $_photo_sizes) : GetAll
    {
        $this->params['_photo_sizes'] = $_photo_sizes;
        return $this;
    }
    /**
     * '1' – to return photos only from standard albums; '0' – to return all photos including those in service albums, e.g., 'My wall photos' (default)
     *
     * {"type":"boolean"}
     */
    public function _no_service_albums(boolean $_no_service_albums) : GetAll
    {
        $this->params['_no_service_albums'] = $_no_service_albums;
        return $this;
    }
    /**
     * '1' – to show information about photos being hidden from the block above the wall.
     *
     * {"type":"boolean"}
     */
    public function _need_hidden(boolean $_need_hidden) : GetAll
    {
        $this->params['_need_hidden'] = $_need_hidden;
        return $this;
    }
    /**
     * '1' – not to return photos being hidden from the block above the wall. Works only with owner_id>0, no_service_albums is ignored.
     *
     * {"type":"boolean"}
     */
    public function _skip_hidden(boolean $_skip_hidden) : GetAll
    {
        $this->params['_skip_hidden'] = $_skip_hidden;
        return $this;
    }
}