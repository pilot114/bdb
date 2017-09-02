<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of photos belonging to a user or community, in reverse chronological order.
 */
class Photos_GetAll extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('photos.getAll');
    }
    /**
     * ID of a user or community that owns the photos.; Use a negative value to designate a community ID.
     *
     * {"type":"integer"}
     */
    public function _owner_id(integer $owner_id) : Photos_GetAll
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * '1' — to return detailed information about photos
     *
     * {"type":"boolean"}
     */
    public function _extended(boolean $extended) : Photos_GetAll
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of photos. By default, '0'.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $offset) : Photos_GetAll
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of photos to return.
     *
     * {"type":"integer","minimum":0,"default":20,"maximum":200}
     */
    public function _count(integer $count) : Photos_GetAll
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * '1' – to return image sizes in [vk.com/dev/photo_sizes|special format].
     *
     * {"type":"boolean"}
     */
    public function _photo_sizes(boolean $photo_sizes) : Photos_GetAll
    {
        $this->params['photo_sizes'] = $photo_sizes;
        return $this;
    }
    /**
     * '1' – to return photos only from standard albums; '0' – to return all photos including those in service albums, e.g., 'My wall photos' (default)
     *
     * {"type":"boolean"}
     */
    public function _no_service_albums(boolean $no_service_albums) : Photos_GetAll
    {
        $this->params['no_service_albums'] = $no_service_albums;
        return $this;
    }
    /**
     * '1' – to show information about photos being hidden from the block above the wall.
     *
     * {"type":"boolean"}
     */
    public function _need_hidden(boolean $need_hidden) : Photos_GetAll
    {
        $this->params['need_hidden'] = $need_hidden;
        return $this;
    }
    /**
     * '1' – not to return photos being hidden from the block above the wall. Works only with owner_id>0, no_service_albums is ignored.
     *
     * {"type":"boolean"}
     */
    public function _skip_hidden(boolean $skip_hidden) : Photos_GetAll
    {
        $this->params['skip_hidden'] = $skip_hidden;
        return $this;
    }
}