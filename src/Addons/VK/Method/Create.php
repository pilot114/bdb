<?php

namespace Bdb\Addons\VK\Method;

/**
 * Creates polls that can be attached to the users' or communities' posts.
 */
class Create
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * question text
     *
     * {"type":"string"}
     */
    public function _question(string $_question) : Create
    {
        $this->params['_question'] = $_question;
        return $this;
    }
    /**
     * '1' – anonymous poll, participants list is hidden;; '0' – public poll, participants list is available;; Default value is '0'.
     *
     * {"type":"boolean"}
     */
    public function _is_anonymous(boolean $_is_anonymous) : Create
    {
        $this->params['_is_anonymous'] = $_is_anonymous;
        return $this;
    }
    /**
     * If a poll will be added to a communty it is required to send a negative group identifier. Current user by default.
     *
     * {"type":"integer"}
     */
    public function _owner_id(integer $_owner_id) : Create
    {
        $this->params['_owner_id'] = $_owner_id;
        return $this;
    }
    /**
     * available answers list, for example:; " ["yes","no","maybe"]"; There can be from 1 to 10 answers.
     *
     * {"type":"string"}
     */
    public function _add_answers(string $_add_answers) : Create
    {
        $this->params['_add_answers'] = $_add_answers;
        return $this;
    }
}