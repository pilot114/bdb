<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns the total number of audio files on a user or community page.
 */
class GetCount
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * ID of the user or community that owns the audio files. By default, current user ID.
     *
     * {"type":"integer"}
     */
    public function owner_id(integer $owner_id) : GetCount
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
}