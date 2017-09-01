<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns the server address for document upload onto a user's or community's wall.
 */
class GetWallUploadServer
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Community ID (if the document will be uploaded to the community).
     *
     * {"type":"integer","minimum":0}
     */
    public function _group_id(integer $_group_id) : GetWallUploadServer
    {
        $this->params['_group_id'] = $_group_id;
        return $this;
    }
}