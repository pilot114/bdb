<?php

namespace Bdb\Addons\VK\Method;

/**
 * Adds the current user's vote to the selected answer in the poll.
 */
class AddVote
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * ID of the user or community that owns the poll. Use a negative value to designate a community ID.
     *
     * {"type":"integer"}
     */
    public function _owner_id(integer $_owner_id) : AddVote
    {
        $this->params['_owner_id'] = $_owner_id;
        return $this;
    }
    /**
     * Poll ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function poll_id(integer $poll_id) : AddVote
    {
        $this->params['poll_id'] = $poll_id;
        return $this;
    }
    /**
     * Answer ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function answer_id(integer $answer_id) : AddVote
    {
        $this->params['answer_id'] = $answer_id;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"boolean"}
     */
    public function _is_board(boolean $_is_board) : AddVote
    {
        $this->params['_is_board'] = $_is_board;
        return $this;
    }
}