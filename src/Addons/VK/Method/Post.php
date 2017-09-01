<?php

namespace Bdb\Addons\VK\Method;

/**
 * Adds a new post on a user wall or community wall. Can also be used to publish suggested or scheduled posts.
 */
class Post
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * User ID or community ID. Use a negative value to designate a community ID.
     *
     * {"type":"integer"}
     */
    public function _owner_id(integer $_owner_id) : Post
    {
        $this->params['_owner_id'] = $_owner_id;
        return $this;
    }
    /**
     * '1' — post will be available to friends only; '0' — post will be available to all users (default)
     *
     * {"type":"boolean"}
     */
    public function _friends_only(boolean $_friends_only) : Post
    {
        $this->params['_friends_only'] = $_friends_only;
        return $this;
    }
    /**
     * For a community:; '1' — post will be published by the community; '0' — post will be published by the user (default)
     *
     * {"type":"boolean"}
     */
    public function _from_group(boolean $_from_group) : Post
    {
        $this->params['_from_group'] = $_from_group;
        return $this;
    }
    /**
     * (Required if 'attachments' is not set.) Text of the post.
     *
     * {"type":"string"}
     */
    public function _message(string $_message) : Post
    {
        $this->params['_message'] = $_message;
        return $this;
    }
    /**
     * (Required if 'message' is not set.) List of objects attached to the post, in the following format:; "<owner_id>_<media_id>,<owner_id>_<media_id>"; '' — Type of media attachment:; 'photo' — photo; 'video' — video; 'audio' — audio; 'doc' — document; 'page' — wiki-page; 'note' — note; 'poll' — poll; 'album' — photo album; '<owner_id>' — ID of the media application owner. ; '<media_id>' — Media application ID.; ; Example:; "photo100172_166443618,photo66748_265827614"; May contain a link to an external page to include in the post. Example:; "photo66748_265827614,http://habrahabr.ru"; "NOTE: If more than one link is being attached, an error will be thrown."
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _attachments(array $_attachments) : Post
    {
        $this->params['_attachments'] = $_attachments;
        return $this;
    }
    /**
     * List of services or websites the update will be exported to, if the user has so requested. Sample values: 'twitter', 'facebook'.
     *
     * {"type":"string"}
     */
    public function _services(string $_services) : Post
    {
        $this->params['_services'] = $_services;
        return $this;
    }
    /**
     * Only for posts in communities with 'from_group' set to '1':; '1' — post will be signed with the name of the posting user; '0' — post will not be signed (default)
     *
     * {"type":"boolean"}
     */
    public function _signed(boolean $_signed) : Post
    {
        $this->params['_signed'] = $_signed;
        return $this;
    }
    /**
     * Publication date (in Unix time). If used, posting will be delayed until the set time.
     *
     * {"type":"integer","minimum":0}
     */
    public function _publish_date(integer $_publish_date) : Post
    {
        $this->params['_publish_date'] = $_publish_date;
        return $this;
    }
    /**
     * Geographical latitude of a check-in, in degrees (from -90 to 90).
     *
     * {"type":"number","minimum":-90,"maximum":90}
     */
    public function _lat(number $_lat) : Post
    {
        $this->params['_lat'] = $_lat;
        return $this;
    }
    /**
     * Geographical longitude of a check-in, in degrees (from -180 to 180).
     *
     * {"type":"number","minimum":-180,"maximum":180}
     */
    public function _long(number $_long) : Post
    {
        $this->params['_long'] = $_long;
        return $this;
    }
    /**
     * ID of the location where the user was tagged.
     *
     * {"type":"integer","minimum":0}
     */
    public function _place_id(integer $_place_id) : Post
    {
        $this->params['_place_id'] = $_place_id;
        return $this;
    }
    /**
     * Post ID. Used for publishing of scheduled and suggested posts.
     *
     * {"type":"integer","minimum":0}
     */
    public function _post_id(integer $_post_id) : Post
    {
        $this->params['_post_id'] = $_post_id;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"string"}
     */
    public function _guid(string $_guid) : Post
    {
        $this->params['_guid'] = $_guid;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"boolean","default":0}
     */
    public function _mark_as_ads(boolean $_mark_as_ads) : Post
    {
        $this->params['_mark_as_ads'] = $_mark_as_ads;
        return $this;
    }
}