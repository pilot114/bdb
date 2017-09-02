<?php

namespace Bdb\Addons\VK\Method;

/**
 * Edits a post on a user wall or community wall.
 */
class Wall_Edit extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('wall.edit');
    }
    /**
     * User ID or community ID. Use a negative value to designate a community ID.
     *
     * {"type":"integer"}
     */
    public function _owner_id(integer $owner_id) : Wall_Edit
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Post ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function post_id(integer $post_id) : Wall_Edit
    {
        $this->params['post_id'] = $post_id;
        return $this;
    }
    /**
     * (Applies only when editing a scheduled post.); '1' — post will be available to friends only; '0' — post will be available to all users (default)
     *
     * {"type":"boolean"}
     */
    public function _friends_only(boolean $friends_only) : Wall_Edit
    {
        $this->params['friends_only'] = $friends_only;
        return $this;
    }
    /**
     * (Required if 'attachments' is not set.) Text of the post.
     *
     * {"type":"string"}
     */
    public function _message(string $message) : Wall_Edit
    {
        $this->params['message'] = $message;
        return $this;
    }
    /**
     * (Required if 'message' is not set.) List of objects attached to the post, in the following format:; "<owner_id>_<media_id>,<owner_id>_<media_id>"; '' — Type of media attachment:; 'photo' — photo; 'video' — video; 'audio' — audio; 'doc' — document; '<owner_id>' — ID of the media application owner.; '<media_id>' — Media application ID. ; ; Example:; "photo100172_166443618,photo66748_265827614"; May contain a link to an external page to include in the post. Example:; "photo66748_265827614,http://habrahabr.ru"; "NOTE: If more than one link is being attached, an error is thrown."
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _attachments(array $attachments) : Wall_Edit
    {
        $this->params['attachments'] = $attachments;
        return $this;
    }
    /**
     * (Applies only to a scheduled post.) List of services or websites where status will be updated, if the user has so requested. Sample values: 'twitter', 'facebook'.
     *
     * {"type":"string"}
     */
    public function _services(string $services) : Wall_Edit
    {
        $this->params['services'] = $services;
        return $this;
    }
    /**
     * (Applies only to a post that was created "as community" on a community wall.); '1' — to add the signature of the user who created the post
     *
     * {"type":"boolean"}
     */
    public function _signed(boolean $signed) : Wall_Edit
    {
        $this->params['signed'] = $signed;
        return $this;
    }
    /**
     * (Applies only to a scheduled post.) Publication date (in Unix time). If used, posting will be delayed until the set time.
     *
     * {"type":"integer","minimum":0}
     */
    public function _publish_date(integer $publish_date) : Wall_Edit
    {
        $this->params['publish_date'] = $publish_date;
        return $this;
    }
    /**
     * Geographical latitude of the check-in, in degrees (from -90 to 90).
     *
     * {"type":"float","minimum":-90,"maximum":90}
     */
    public function _lat(float $lat) : Wall_Edit
    {
        $this->params['lat'] = $lat;
        return $this;
    }
    /**
     * Geographical longitude of the check-in, in degrees (from -180 to 180).
     *
     * {"type":"float","minimum":-180,"maximum":180}
     */
    public function _long(float $long) : Wall_Edit
    {
        $this->params['long'] = $long;
        return $this;
    }
    /**
     * ID of the location where the user was tagged.
     *
     * {"type":"integer","minimum":0}
     */
    public function _place_id(integer $place_id) : Wall_Edit
    {
        $this->params['place_id'] = $place_id;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"boolean"}
     */
    public function _mark_as_ads(boolean $mark_as_ads) : Wall_Edit
    {
        $this->params['mark_as_ads'] = $mark_as_ads;
        return $this;
    }
}