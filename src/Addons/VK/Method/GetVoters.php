<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of IDs of users who selected specific answers in the poll.
 */
class GetVoters
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
    public function _owner_id(integer $_owner_id) : GetVoters
    {
        $this->params['_owner_id'] = $_owner_id;
        return $this;
    }
    /**
     * Poll ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function poll_id(integer $poll_id) : GetVoters
    {
        $this->params['poll_id'] = $poll_id;
        return $this;
    }
    /**
     * Answer IDs.
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function answer_ids(array $answer_ids) : GetVoters
    {
        $this->params['answer_ids'] = $answer_ids;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"boolean"}
     */
    public function _is_board(boolean $_is_board) : GetVoters
    {
        $this->params['_is_board'] = $_is_board;
        return $this;
    }
    /**
     * '1' — to return only current user's friends; '0' — to return all users (default);
     *
     * {"type":"boolean"}
     */
    public function _friends_only(boolean $_friends_only) : GetVoters
    {
        $this->params['_friends_only'] = $_friends_only;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of voters.; '0' — (default)
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $_offset) : GetVoters
    {
        $this->params['_offset'] = $_offset;
        return $this;
    }
    /**
     * Number of user IDs to return (if the 'friends_only' parameter is not set, maximum '1000'; otherwise '10').; '100' — (default)
     *
     * {"type":"integer","minimum":0,"default":100}
     */
    public function _count(integer $_count) : GetVoters
    {
        $this->params['_count'] = $_count;
        return $this;
    }
    /**
     * Profile fields to return. Sample values: 'nickname', 'screen_name', 'sex', 'bdate (birthdate)', 'city', 'country', 'timezone', 'photo', 'photo_medium', 'photo_big', 'has_mobile', 'rate', 'contacts', 'education', 'online', 'counters'.;
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $_fields) : GetVoters
    {
        $this->params['_fields'] = $_fields;
        return $this;
    }
    /**
     * Case for declension of user name and surname: ; 'nom' — nominative (default) ; 'gen' — genitive ; 'dat' — dative ; 'acc' — accusative ; 'ins' — instrumental ; 'abl' — prepositional
     *
     * {"type":"string","enum":["nom","gen","dat","acc","ins","abl"],"enumNames":["nominative","genitive","dative","accusative","instrumental","prepositional"]}
     */
    public function _name_case(string $_name_case) : GetVoters
    {
        $this->params['_name_case'] = $_name_case;
        return $this;
    }
}