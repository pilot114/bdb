<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a server address (required for upload) and video data.
 */
class Video_Save extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('video.save');
    }
    /**
     * Name of the video.
     *
     * {"type":"string"}
     */
    public function _name(string $name) : Video_Save
    {
        $this->params['name'] = $name;
        return $this;
    }
    /**
     * Description of the video.
     *
     * {"type":"string"}
     */
    public function _description(string $description) : Video_Save
    {
        $this->params['description'] = $description;
        return $this;
    }
    /**
     * '1' — to designate the video as private (send it via a private message); the video will not appear on the user's video list and will not be available by ID for other users; '0' — not to designate the video as private
     *
     * {"type":"boolean"}
     */
    public function _is_private(boolean $is_private) : Video_Save
    {
        $this->params['is_private'] = $is_private;
        return $this;
    }
    /**
     * '1' — to post the saved video on a user's wall; '0' — not to post the saved video on a user's wall
     *
     * {"type":"boolean"}
     */
    public function _wallpost(boolean $wallpost) : Video_Save
    {
        $this->params['wallpost'] = $wallpost;
        return $this;
    }
    /**
     * URL for embedding the video from an external website.
     *
     * {"type":"string"}
     */
    public function _link(string $link) : Video_Save
    {
        $this->params['link'] = $link;
        return $this;
    }
    /**
     * ID of the community in which the video will be saved. By default, the current user's page.
     *
     * {"type":"integer","minimum":0}
     */
    public function _group_id(integer $group_id) : Video_Save
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * ID of the album to which the saved video will be added.
     *
     * {"type":"integer","minimum":0}
     */
    public function _album_id(integer $album_id) : Video_Save
    {
        $this->params['album_id'] = $album_id;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _privacy_view(array $privacy_view) : Video_Save
    {
        $this->params['privacy_view'] = $privacy_view;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _privacy_comment(array $privacy_comment) : Video_Save
    {
        $this->params['privacy_comment'] = $privacy_comment;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"boolean"}
     */
    public function _no_comments(boolean $no_comments) : Video_Save
    {
        $this->params['no_comments'] = $no_comments;
        return $this;
    }
    /**
     * '1' — to repeat the playback of the video; '0' — to play the video once;
     *
     * {"type":"boolean"}
     */
    public function _repeat(boolean $repeat) : Video_Save
    {
        $this->params['repeat'] = $repeat;
        return $this;
    }
}