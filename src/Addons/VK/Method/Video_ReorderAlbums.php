<?php

namespace Bdb\Addons\VK\Method;

/**
 * Reorders the album in the list of user video albums.
 */
class Video_ReorderAlbums extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('video.reorderAlbums');
    }
    /**
     * ID of the user or community that owns the albums..
     *
     * {"type":"integer"}
     */
    public function _owner_id(integer $owner_id) : Video_ReorderAlbums
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Album ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function album_id(integer $album_id) : Video_ReorderAlbums
    {
        $this->params['album_id'] = $album_id;
        return $this;
    }
    /**
     * ID of the album before which the album in question shall be placed.
     *
     * {"type":"integer","minimum":0}
     */
    public function _before(integer $before) : Video_ReorderAlbums
    {
        $this->params['before'] = $before;
        return $this;
    }
    /**
     * ID of the album after which the album in question shall be placed.
     *
     * {"type":"integer","minimum":0}
     */
    public function _after(integer $after) : Video_ReorderAlbums
    {
        $this->params['after'] = $after;
        return $this;
    }
}