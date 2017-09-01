<?php

namespace Bdb\Addons\VK\Method;

/**
 * Unpins a pinned topic from the top of a community's discussion board.
 */
class UnfixTopic
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * ID of the community that owns the discussion board.
     *
     * {"type":"integer","minimum":0}
     */
    public function group_id(integer $group_id) : UnfixTopic
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Topic ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function topic_id(integer $topic_id) : UnfixTopic
    {
        $this->params['topic_id'] = $topic_id;
        return $this;
    }
}