<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns information about photos by their IDs.
 */
class Photos_GetById extends \Bdb\Addons\VK\BaseMethod
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return true;
    }
    public function __construct($client, $defaultQuery)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('photos.getById');
    }
    /**
     * IDs separated with a comma, that are IDs of users who posted photos and IDs of photos themselves with an underscore character between such IDs. To get information about a photo in the group album, you shall specify group ID instead of user ID. Example:; "1_129207899,6492_135055734, ; -20629724_271945303"
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function photos(array $photos) : Photos_GetById
    {
        $this->params['photos'] = $photos;
        return $this;
    }
    /**
     * '1' — to return additional fields; '0' — (default)
     *
     * {"type":"boolean"}
     */
    public function _extended(boolean $extended) : Photos_GetById
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * '1' — to return photo sizes in a
     *
     * {"type":"boolean"}
     */
    public function _photo_sizes(boolean $photo_sizes) : Photos_GetById
    {
        $this->params['photo_sizes'] = $photo_sizes;
        return $this;
    }
}