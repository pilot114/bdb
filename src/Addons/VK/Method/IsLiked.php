<?php

namespace Bdb\Addons\VK\Method;

/**
 * Checks for the object in the 'Likes' list of the specified user.
 */
class IsLiked
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * User ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function _user_id(integer $_user_id) : IsLiked
    {
        $this->params['_user_id'] = $_user_id;
        return $this;
    }
    /**
     * Object type:; 'post' — post on user or community wall; 'comment' — comment on a wall post; 'photo' — photo; 'audio' — audio; 'video' — video; 'note' — note; 'photo_comment' — comment on the photo; 'video_comment' — comment on the video; 'topic_comment' — comment in the discussion
     *
     * {"type":"string","enum":["post","comment","photo","audio","video","note","photo_comment","video_comment","topic_comment"]}
     */
    public function type(string $type) : IsLiked
    {
        $this->params['type'] = $type;
        return $this;
    }
    /**
     * ID of the user or community that owns the object.
     *
     * {"type":"integer"}
     */
    public function _owner_id(integer $_owner_id) : IsLiked
    {
        $this->params['_owner_id'] = $_owner_id;
        return $this;
    }
    /**
     * Object ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function item_id(integer $item_id) : IsLiked
    {
        $this->params['item_id'] = $item_id;
        return $this;
    }
}