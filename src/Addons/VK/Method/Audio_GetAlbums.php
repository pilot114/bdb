<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of audio albums of a user or community.
 */
class Audio_GetAlbums extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('audio.getAlbums');
    }
    /**
     * ID of the user or community that owns the audio file.
     *
     * {"type":"integer"}
     */
    public function _owner_id(integer $owner_id) : Audio_GetAlbums
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of albums.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $offset) : Audio_GetAlbums
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of albums to return.
     *
     * {"type":"integer","minimum":0,"default":50,"maximum":100}
     */
    public function _count(integer $count) : Audio_GetAlbums
    {
        $this->params['count'] = $count;
        return $this;
    }
}