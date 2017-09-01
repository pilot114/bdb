<?php

namespace Bdb\Addons\VK\Method;

/**
 * Allow to set notifications settings for group.
 */
class SetCallbackSettings
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Community ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function group_id(integer $group_id) : SetCallbackSettings
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * New messages notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"boolean"}
     */
    public function _message_new(boolean $_message_new) : SetCallbackSettings
    {
        $this->params['_message_new'] = $_message_new;
        return $this;
    }
    /**
     * Allowed messages notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"boolean"}
     */
    public function _message_allow(boolean $_message_allow) : SetCallbackSettings
    {
        $this->params['_message_allow'] = $_message_allow;
        return $this;
    }
    /**
     * Denied messages notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"boolean"}
     */
    public function _message_deny(boolean $_message_deny) : SetCallbackSettings
    {
        $this->params['_message_deny'] = $_message_deny;
        return $this;
    }
    /**
     * New photos notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"boolean"}
     */
    public function _photo_new(boolean $_photo_new) : SetCallbackSettings
    {
        $this->params['_photo_new'] = $_photo_new;
        return $this;
    }
    /**
     * New audios notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"boolean"}
     */
    public function _audio_new(boolean $_audio_new) : SetCallbackSettings
    {
        $this->params['_audio_new'] = $_audio_new;
        return $this;
    }
    /**
     * New videos notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"boolean"}
     */
    public function _video_new(boolean $_video_new) : SetCallbackSettings
    {
        $this->params['_video_new'] = $_video_new;
        return $this;
    }
    /**
     * New wall replies notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"boolean"}
     */
    public function _wall_reply_new(boolean $_wall_reply_new) : SetCallbackSettings
    {
        $this->params['_wall_reply_new'] = $_wall_reply_new;
        return $this;
    }
    /**
     * Wall replies edited notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"boolean"}
     */
    public function _wall_reply_edit(boolean $_wall_reply_edit) : SetCallbackSettings
    {
        $this->params['_wall_reply_edit'] = $_wall_reply_edit;
        return $this;
    }
    /**
     * New wall posts notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"boolean"}
     */
    public function _wall_post_new(boolean $_wall_post_new) : SetCallbackSettings
    {
        $this->params['_wall_post_new'] = $_wall_post_new;
        return $this;
    }
    /**
     * New board posts notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"boolean"}
     */
    public function _board_post_new(boolean $_board_post_new) : SetCallbackSettings
    {
        $this->params['_board_post_new'] = $_board_post_new;
        return $this;
    }
    /**
     * Board posts edited notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"boolean"}
     */
    public function _board_post_edit(boolean $_board_post_edit) : SetCallbackSettings
    {
        $this->params['_board_post_edit'] = $_board_post_edit;
        return $this;
    }
    /**
     * Board posts restored notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"boolean"}
     */
    public function _board_post_restore(boolean $_board_post_restore) : SetCallbackSettings
    {
        $this->params['_board_post_restore'] = $_board_post_restore;
        return $this;
    }
    /**
     * Board posts deleted notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"boolean"}
     */
    public function _board_post_delete(boolean $_board_post_delete) : SetCallbackSettings
    {
        $this->params['_board_post_delete'] = $_board_post_delete;
        return $this;
    }
    /**
     * New comment to photo notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"boolean"}
     */
    public function _photo_comment_new(boolean $_photo_comment_new) : SetCallbackSettings
    {
        $this->params['_photo_comment_new'] = $_photo_comment_new;
        return $this;
    }
    /**
     * New comment to video notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"boolean"}
     */
    public function _video_comment_new(boolean $_video_comment_new) : SetCallbackSettings
    {
        $this->params['_video_comment_new'] = $_video_comment_new;
        return $this;
    }
    /**
     * New comment to market item notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"boolean"}
     */
    public function _market_comment_new(boolean $_market_comment_new) : SetCallbackSettings
    {
        $this->params['_market_comment_new'] = $_market_comment_new;
        return $this;
    }
    /**
     * Joined community notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"boolean"}
     */
    public function _group_join(boolean $_group_join) : SetCallbackSettings
    {
        $this->params['_group_join'] = $_group_join;
        return $this;
    }
    /**
     * Left community notifications ('0' — disabled, '1' — enabled).
     *
     * {"type":"boolean"}
     */
    public function _group_leave(boolean $_group_leave) : SetCallbackSettings
    {
        $this->params['_group_leave'] = $_group_leave;
        return $this;
    }
}