<?php

namespace Bdb\Addons\VK\Method;

/**
 * Reports (submits a complaint about) a video.
 */
class Video_Report extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('video.report');
    }
    /**
     * ID of the user or community that owns the video.
     *
     * {"type":"integer"}
     */
    public function owner_id(integer $owner_id) : Video_Report
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Video ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function video_id(integer $video_id) : Video_Report
    {
        $this->params['video_id'] = $video_id;
        return $this;
    }
    /**
     * Reason for the complaint:; '0' – spam; '1' – child pornography; '2' – extremism; '3' – violence; '4' – drug propaganda; '5' – adult material; '6' – insult; abuse
     *
     * {"type":"integer","minimum":0,"enum":[0,1,2,3,4,5,6],"enumNames":["spam","child pornography","extremism","violence","drug propaganda","adult material","insult abuse"]}
     */
    public function _reason(integer $reason) : Video_Report
    {
        $this->params['reason'] = $reason;
        return $this;
    }
    /**
     * Comment describing the complaint.
     *
     * {"type":"string"}
     */
    public function _comment(string $comment) : Video_Report
    {
        $this->params['comment'] = $comment;
        return $this;
    }
    /**
     * (If the video was found in search results.) Search query string.
     *
     * {"type":"string"}
     */
    public function _search_query(string $search_query) : Video_Report
    {
        $this->params['search_query'] = $search_query;
        return $this;
    }
}