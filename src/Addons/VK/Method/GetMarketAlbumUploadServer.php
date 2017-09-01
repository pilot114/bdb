<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns the server address for market album photo upload.
 */
class GetMarketAlbumUploadServer
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Community ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function group_id(integer $group_id) : GetMarketAlbumUploadServer
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}