<?php

namespace Bdb\Addons\VK\Method;

/**
 * Creates an empty audio album.
 */
class Audio_AddAlbum extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('audio.addAlbum');
    }
    /**
     * Community ID (if the album will be created in a community).
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : Audio_AddAlbum
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Album title.
     *
     * {"type":"string"}
     */
    public function title(string $title) : Audio_AddAlbum
    {
        $this->params['title'] = $title;
        return $this;
    }
}