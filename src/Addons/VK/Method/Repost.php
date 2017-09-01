<?php

namespace Bdb\Addons\VK\Method;

/**
 * Reposts (copies) an object to a user wall or community wall.
 */
class Repost
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * ID of the object to be reposted on the wall. Example:; "wall66748_3675"
     *
     * {"type":"string"}
     */
    public function object(string $object) : Repost
    {
        $this->params['object'] = $object;
        return $this;
    }
    /**
     * Comment to be added along with the reposted object.
     *
     * {"type":"string"}
     */
    public function _message(string $_message) : Repost
    {
        $this->params['_message'] = $_message;
        return $this;
    }
    /**
     * Target community ID when reposting to a community.
     *
     * {"type":"integer","minimum":0}
     */
    public function _group_id(integer $_group_id) : Repost
    {
        $this->params['_group_id'] = $_group_id;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"boolean","default":0}
     */
    public function _mark_as_ads(boolean $_mark_as_ads) : Repost
    {
        $this->params['_mark_as_ads'] = $_mark_as_ads;
        return $this;
    }
}