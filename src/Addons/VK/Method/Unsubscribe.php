<?php

namespace Bdb\Addons\VK\Method;

/**
 * Unsubscribes the current user from specified newsfeeds.
 */
class Unsubscribe
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Type of object from which to unsubscribe:; 'note' — note; 'photo' — photo; 'post' — post on user wall or community wall; 'topic' — topic; 'video' — video
     *
     * {"type":"string","enum":["note","photo","post","topic","video"]}
     */
    public function type(string $type) : Unsubscribe
    {
        $this->params['type'] = $type;
        return $this;
    }
    /**
     * Object owner ID.
     *
     * {"type":"integer"}
     */
    public function _owner_id(integer $_owner_id) : Unsubscribe
    {
        $this->params['_owner_id'] = $_owner_id;
        return $this;
    }
    /**
     * Object ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function item_id(integer $item_id) : Unsubscribe
    {
        $this->params['item_id'] = $item_id;
        return $this;
    }
}