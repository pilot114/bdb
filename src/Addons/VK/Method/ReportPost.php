<?php

namespace Bdb\Addons\VK\Method;

/**
 * Reports (submits a complaint about) a post on a user wall or community wall.;
 */
class ReportPost
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * ID of the user or community that owns the wall.
     *
     * {"type":"integer"}
     */
    public function owner_id(integer $owner_id) : ReportPost
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Post ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function post_id(integer $post_id) : ReportPost
    {
        $this->params['post_id'] = $post_id;
        return $this;
    }
    /**
     * Reason for the complaint:; '0' – spam; '1' – child pornography; '2' – extremism; '3' – violence; '4' – drug propaganda; '5' – adult material; '6' – insult; abuse
     *
     * {"type":"integer","minimum":0,"enum":[0,1,2,3,4,5,6],"enumNames":["spam","child pornography","extremism","violence","drug propaganda","adult material","insult abuse"]}
     */
    public function _reason(integer $_reason) : ReportPost
    {
        $this->params['_reason'] = $_reason;
        return $this;
    }
}