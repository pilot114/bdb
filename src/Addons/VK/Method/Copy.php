<?php

namespace Bdb\Addons\VK\Method;

/**
 * Allows to copy a photo to the "Saved photos" album
 */
class Copy
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * photo's owner ID
     *
     * {"type":"integer"}
     */
    public function owner_id(integer $owner_id) : Copy
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * photo ID
     *
     * {"type":"integer","minimum":0}
     */
    public function photo_id(integer $photo_id) : Copy
    {
        $this->params['photo_id'] = $photo_id;
        return $this;
    }
    /**
     * for private photos
     *
     * {"type":"string"}
     */
    public function _access_key(string $_access_key) : Copy
    {
        $this->params['_access_key'] = $_access_key;
        return $this;
    }
}