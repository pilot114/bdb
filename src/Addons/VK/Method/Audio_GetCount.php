<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns the total number of audio files on a user or community page.
 */
class Audio_GetCount extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('audio.getCount');
    }
    /**
     * ID of the user or community that owns the audio files. By default, current user ID.
     *
     * {"type":"integer"}
     */
    public function owner_id(integer $owner_id) : Audio_GetCount
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
}