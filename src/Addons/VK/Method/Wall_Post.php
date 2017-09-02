<?php

namespace Bdb\Addons\VK\Method;

/**
 * Adds a new post on a user wall or community wall. Can also be used to publish suggested or scheduled posts.
 */
class Wall_Post extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('wall.post');
    }
    /**
     * User ID or community ID. Use a negative value to designate a community ID.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : Wall_Post
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * '1' — post will be available to friends only; '0' — post will be available to all users (default)
     *
     * {"type":"boolean"}
     */
    public function _friends_only(boolean $friends_only) : Wall_Post
    {
        $this->params['friends_only'] = $friends_only;
        return $this;
    }
    /**
     * For a community:; '1' — post will be published by the community; '0' — post will be published by the user (default)
     *
     * {"type":"boolean"}
     */
    public function _from_group(boolean $from_group) : Wall_Post
    {
        $this->params['from_group'] = $from_group;
        return $this;
    }
    /**
     * (Required if 'attachments' is not set.) Text of the post.
     *
     * {"type":"string"}
     */
    public function _message(string $message) : Wall_Post
    {
        $this->params['message'] = $message;
        return $this;
    }
    /**
     * (Required if 'message' is not set.) List of objects attached to the post, in the following format:; "<owner_id>_<media_id>,<owner_id>_<media_id>"; '' — Type of media attachment:; 'photo' — photo; 'video' — video; 'audio' — audio; 'doc' — document; 'page' — wiki-page; 'note' — note; 'poll' — poll; 'album' — photo album; '<owner_id>' — ID of the media application owner. ; '<media_id>' — Media application ID.; ; Example:; "photo100172_166443618,photo66748_265827614"; May contain a link to an external page to include in the post. Example:; "photo66748_265827614,http://habrahabr.ru"; "NOTE: If more than one link is being attached, an error will be thrown."
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _attachments(array $attachments) : Wall_Post
    {
        $this->params['attachments'] = $attachments;
        return $this;
    }
    /**
     * List of services or websites the update will be exported to, if the user has so requested. Sample values: 'twitter', 'facebook'.
     *
     * {"type":"string"}
     */
    public function _services(string $services) : Wall_Post
    {
        $this->params['services'] = $services;
        return $this;
    }
    /**
     * Only for posts in communities with 'from_group' set to '1':; '1' — post will be signed with the name of the posting user; '0' — post will not be signed (default)
     *
     * {"type":"boolean"}
     */
    public function _signed(boolean $signed) : Wall_Post
    {
        $this->params['signed'] = $signed;
        return $this;
    }
    /**
     * Publication date (in Unix time). If used, posting will be delayed until the set time.
     *
     * {"type":"int","minimum":0}
     */
    public function _publish_date(int $publish_date) : Wall_Post
    {
        $this->params['publish_date'] = $publish_date;
        return $this;
    }
    /**
     * Geographical latitude of a check-in, in degrees (from -90 to 90).
     *
     * {"type":"float","minimum":-90,"maximum":90}
     */
    public function _lat(float $lat) : Wall_Post
    {
        $this->params['lat'] = $lat;
        return $this;
    }
    /**
     * Geographical longitude of a check-in, in degrees (from -180 to 180).
     *
     * {"type":"float","minimum":-180,"maximum":180}
     */
    public function _long(float $long) : Wall_Post
    {
        $this->params['long'] = $long;
        return $this;
    }
    /**
     * ID of the location where the user was tagged.
     *
     * {"type":"int","minimum":0}
     */
    public function _place_id(int $place_id) : Wall_Post
    {
        $this->params['place_id'] = $place_id;
        return $this;
    }
    /**
     * Post ID. Used for publishing of scheduled and suggested posts.
     *
     * {"type":"int","minimum":0}
     */
    public function _post_id(int $post_id) : Wall_Post
    {
        $this->params['post_id'] = $post_id;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"string"}
     */
    public function _guid(string $guid) : Wall_Post
    {
        $this->params['guid'] = $guid;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"boolean","default":0}
     */
    public function _mark_as_ads(boolean $mark_as_ads) : Wall_Post
    {
        $this->params['mark_as_ads'] = $mark_as_ads;
        return $this;
    }
}