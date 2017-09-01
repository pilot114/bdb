<?php

namespace Bdb\Addons\VK\Method;

/**
 * Hides an item from the newsfeed.
 */
class IgnoreItem
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Item type. Possible values:; *'wall' – post on the wall;; *'tag' – tag on a photo;; *'profilephoto' – profile photo;; *'video' – video;; *'audio' – audio.
     *
     * {"type":"string","enum":["wall","tag","profilephoto","video","audio"],"enumNames":["post on the wall","tag on a photo","profile photo","video","audio"]}
     */
    public function type(string $type) : IgnoreItem
    {
        $this->params['type'] = $type;
        return $this;
    }
    /**
     * Item owner's identifier (user or community); "Note that community id must be negative. ; 'owner_id=1' – user ; 'owner_id=-1' – community "
     *
     * {"type":"integer"}
     */
    public function owner_id(integer $owner_id) : IgnoreItem
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Item identifier
     *
     * {"type":"integer","minimum":0}
     */
    public function item_id(integer $item_id) : IgnoreItem
    {
        $this->params['item_id'] = $item_id;
        return $this;
    }
}