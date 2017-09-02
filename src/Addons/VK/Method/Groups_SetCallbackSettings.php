<?php

namespace Bdb\Addons\VK\Method;

/**
 * Allow to set notifications settings for group.
 */
class Groups_SetCallbackSettings extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('groups.setCallbackSettings');
    }
    /**
     * Community ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function group_id(integer $group_id) : Groups_SetCallbackSettings
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * New messages notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"boolean"}
     */
    public function _message_new(boolean $message_new) : Groups_SetCallbackSettings
    {
        $this->params['message_new'] = $message_new;
        return $this;
    }
    /**
     * Allowed messages notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"boolean"}
     */
    public function _message_allow(boolean $message_allow) : Groups_SetCallbackSettings
    {
        $this->params['message_allow'] = $message_allow;
        return $this;
    }
    /**
     * Denied messages notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"boolean"}
     */
    public function _message_deny(boolean $message_deny) : Groups_SetCallbackSettings
    {
        $this->params['message_deny'] = $message_deny;
        return $this;
    }
    /**
     * New photos notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"boolean"}
     */
    public function _photo_new(boolean $photo_new) : Groups_SetCallbackSettings
    {
        $this->params['photo_new'] = $photo_new;
        return $this;
    }
    /**
     * New audios notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"boolean"}
     */
    public function _audio_new(boolean $audio_new) : Groups_SetCallbackSettings
    {
        $this->params['audio_new'] = $audio_new;
        return $this;
    }
    /**
     * New videos notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"boolean"}
     */
    public function _video_new(boolean $video_new) : Groups_SetCallbackSettings
    {
        $this->params['video_new'] = $video_new;
        return $this;
    }
    /**
     * New wall replies notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"boolean"}
     */
    public function _wall_reply_new(boolean $wall_reply_new) : Groups_SetCallbackSettings
    {
        $this->params['wall_reply_new'] = $wall_reply_new;
        return $this;
    }
    /**
     * Wall replies edited notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"boolean"}
     */
    public function _wall_reply_edit(boolean $wall_reply_edit) : Groups_SetCallbackSettings
    {
        $this->params['wall_reply_edit'] = $wall_reply_edit;
        return $this;
    }
    /**
     * New wall posts notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"boolean"}
     */
    public function _wall_post_new(boolean $wall_post_new) : Groups_SetCallbackSettings
    {
        $this->params['wall_post_new'] = $wall_post_new;
        return $this;
    }
    /**
     * New board posts notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"boolean"}
     */
    public function _board_post_new(boolean $board_post_new) : Groups_SetCallbackSettings
    {
        $this->params['board_post_new'] = $board_post_new;
        return $this;
    }
    /**
     * Board posts edited notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"boolean"}
     */
    public function _board_post_edit(boolean $board_post_edit) : Groups_SetCallbackSettings
    {
        $this->params['board_post_edit'] = $board_post_edit;
        return $this;
    }
    /**
     * Board posts restored notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"boolean"}
     */
    public function _board_post_restore(boolean $board_post_restore) : Groups_SetCallbackSettings
    {
        $this->params['board_post_restore'] = $board_post_restore;
        return $this;
    }
    /**
     * Board posts deleted notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"boolean"}
     */
    public function _board_post_delete(boolean $board_post_delete) : Groups_SetCallbackSettings
    {
        $this->params['board_post_delete'] = $board_post_delete;
        return $this;
    }
    /**
     * New comment to photo notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"boolean"}
     */
    public function _photo_comment_new(boolean $photo_comment_new) : Groups_SetCallbackSettings
    {
        $this->params['photo_comment_new'] = $photo_comment_new;
        return $this;
    }
    /**
     * New comment to video notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"boolean"}
     */
    public function _video_comment_new(boolean $video_comment_new) : Groups_SetCallbackSettings
    {
        $this->params['video_comment_new'] = $video_comment_new;
        return $this;
    }
    /**
     * New comment to market item notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"boolean"}
     */
    public function _market_comment_new(boolean $market_comment_new) : Groups_SetCallbackSettings
    {
        $this->params['market_comment_new'] = $market_comment_new;
        return $this;
    }
    /**
     * Joined community notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"boolean"}
     */
    public function _group_join(boolean $group_join) : Groups_SetCallbackSettings
    {
        $this->params['group_join'] = $group_join;
        return $this;
    }
    /**
     * Left community notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"boolean"}
     */
    public function _group_leave(boolean $group_leave) : Groups_SetCallbackSettings
    {
        $this->params['group_leave'] = $group_leave;
        return $this;
    }
}