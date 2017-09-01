<?php

namespace Bdb\Addons\VK\Method;

/**
 * Pins a topic (fixes its place) to the top of a community's discussion board.
 */
class FixTopic
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
    public function group_id(integer $group_id) : FixTopic
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Topic ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function topic_id(integer $topic_id) : FixTopic
    {
        $this->params['topic_id'] = $topic_id;
        return $this;
    }
}