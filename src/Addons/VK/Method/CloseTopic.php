<?php

namespace Bdb\Addons\VK\Method;

/**
 * Closes a topic on a community's discussion board so that comments cannot be posted.
 */
class CloseTopic
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
    public function group_id(integer $group_id) : CloseTopic
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Topic ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function topic_id(integer $topic_id) : CloseTopic
    {
        $this->params['topic_id'] = $topic_id;
        return $this;
    }
}