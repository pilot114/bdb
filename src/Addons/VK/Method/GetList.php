<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of IDs of users who added the specified object to their 'Likes' list.
 */
class GetList
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return true;
    }
    /**
     * ; Object type:; 'post' — post on user or community wall; 'comment' — comment on a wall post; 'photo' — photo; 'audio' — audio; 'video' — video; 'note' — note; 'photo_comment' — comment on the photo; 'video_comment' — comment on the video; 'topic_comment' — comment in the discussion; 'sitepage' — page of the site where the [vk.com/dev/Like|Like widget] is installed
     *
     * {"type":"string","enum":["post","comment","photo","audio","video","note","photo_comment","video_comment","topic_comment","sitepage"]}
     */
    public function type(string $type) : GetList
    {
        $this->params['type'] = $type;
        return $this;
    }
    /**
     * ID of the user, community, or application that owns the object. If the 'type' parameter is set as 'sitepage', the application ID is passed as 'owner_id'. Use negative value for a community id. If the 'type' parameter is not set, the 'owner_id' is assumed to be either the current user or the same application ID as if the 'type' parameter was set to 'sitepage'.; ;
     *
     * {"type":"integer"}
     */
    public function _owner_id(integer $_owner_id) : GetList
    {
        $this->params['_owner_id'] = $_owner_id;
        return $this;
    }
    /**
     * Object ID. If 'type' is set as 'sitepage', 'item_id' can include the 'page_id' parameter value used during initialization of the [vk.com/dev/Like|Like widget].
     *
     * {"type":"integer"}
     */
    public function _item_id(integer $_item_id) : GetList
    {
        $this->params['_item_id'] = $_item_id;
        return $this;
    }
    /**
     * URL of the page where the [vk.com/dev/Like|Like widget] is installed. Used instead of the 'item_id' parameter.
     *
     * {"type":"string"}
     */
    public function _page_url(string $_page_url) : GetList
    {
        $this->params['_page_url'] = $_page_url;
        return $this;
    }
    /**
     * Filters to apply:; 'likes' — returns information about all users who liked the object (default); 'copies' — returns information only about users who told their friends about the object
     *
     * {"type":"string","default":"likes","enum":["likes","copies"]}
     */
    public function _filter(string $_filter) : GetList
    {
        $this->params['_filter'] = $_filter;
        return $this;
    }
    /**
     * Specifies which users are returned:; '1' — to return only the current user's friends; '0' — to return all users (default)
     *
     * {"type":"boolean"}
     */
    public function _friends_only(boolean $_friends_only) : GetList
    {
        $this->params['_friends_only'] = $_friends_only;
        return $this;
    }
    /**
     * Specifies whether extended information will be returned.; '1' — to return extended information about users and communities from the 'Likes' list; '0' — to return no additional information (default)
     *
     * {"type":"boolean"}
     */
    public function _extended(boolean $_extended) : GetList
    {
        $this->params['_extended'] = $_extended;
        return $this;
    }
    /**
     * Offset needed to select a specific subset of users.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $_offset) : GetList
    {
        $this->params['_offset'] = $_offset;
        return $this;
    }
    /**
     * Number of user IDs to return (maximum '1000').; Default is '100' if 'friends_only' is set to '0'; otherwise, the default is '10' if 'friends_only' is set to '1'.;
     *
     * {"type":"integer","minimum":0,"maximum":1000}
     */
    public function _count(integer $_count) : GetList
    {
        $this->params['_count'] = $_count;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"boolean"}
     */
    public function _skip_own(boolean $_skip_own) : GetList
    {
        $this->params['_skip_own'] = $_skip_own;
        return $this;
    }
}