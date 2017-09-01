<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns stats for a wall post.
 */
class GetPostReach
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * post owner community id. Specify with "-" sign.
     *
     * {"type":"integer"}
     */
    public function owner_id(integer $owner_id) : GetPostReach
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * wall post id. Note that stats are available only for '300' last (newest) posts on a community wall.
     *
     * {"type":"integer","minimum":0}
     */
    public function post_id(integer $post_id) : GetPostReach
    {
        $this->params['post_id'] = $post_id;
        return $this;
    }
}