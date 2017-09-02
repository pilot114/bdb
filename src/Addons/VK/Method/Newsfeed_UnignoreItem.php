<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a hidden item to the newsfeed.
 */
class Newsfeed_UnignoreItem extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('newsfeed.unignoreItem');
    }
    /**
     * Item type. Possible values:; *'wall' – post on the wall;; *'tag' – tag on a photo;; *'profilephoto' – profile photo;; *'video' – video;; *'audio' – audio.
     *
     * {"type":"string","enum":["wall","tag","profilephoto","video","audio"]}
     */
    public function type(string $type) : Newsfeed_UnignoreItem
    {
        $this->params['type'] = $type;
        return $this;
    }
    /**
     * Item owner's identifier (user or community); "Note that community id must be negative. ; 'owner_id=1' – user ; 'owner_id=-1' – community "
     *
     * {"type":"integer"}
     */
    public function owner_id(integer $owner_id) : Newsfeed_UnignoreItem
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Item identifier
     *
     * {"type":"integer","minimum":0}
     */
    public function item_id(integer $item_id) : Newsfeed_UnignoreItem
    {
        $this->params['item_id'] = $item_id;
        return $this;
    }
}