<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of wall posts that the current user has liked.;
 */
class Fave_GetPosts extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('fave.getPosts');
    }
    /**
     * Offset needed to return a specific subset of posts.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $offset) : Fave_GetPosts
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of posts to return.
     *
     * {"type":"integer","minimum":0,"default":50}
     */
    public function _count(integer $count) : Fave_GetPosts
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * '1' — to return additional 'wall', 'profiles', and 'groups' fields.; ; By default: '0'.
     *
     * {"type":"boolean"}
     */
    public function _extended(boolean $extended) : Fave_GetPosts
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}