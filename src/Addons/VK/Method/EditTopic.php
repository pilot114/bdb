<?php

namespace Bdb\Addons\VK\Method;

/**
 * Edits the title of a topic on a community's discussion board.
 */
class EditTopic
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
    public function group_id(integer $group_id) : EditTopic
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Topic ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function topic_id(integer $topic_id) : EditTopic
    {
        $this->params['topic_id'] = $topic_id;
        return $this;
    }
    /**
     * New title of the topic.
     *
     * {"type":"string"}
     */
    public function title(string $title) : EditTopic
    {
        $this->params['title'] = $title;
        return $this;
    }
}