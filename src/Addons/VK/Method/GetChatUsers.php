<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of IDs of users participating in a chat.
 */
class GetChatUsers
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Chat ID.
     *
     * {"type":"integer"}
     */
    public function _chat_id(integer $_chat_id) : GetChatUsers
    {
        $this->params['_chat_id'] = $_chat_id;
        return $this;
    }
    /**
     * Chat IDs.
     *
     * {"type":"array","items":{"type":"integer"}}
     */
    public function _chat_ids(array $_chat_ids) : GetChatUsers
    {
        $this->params['_chat_ids'] = $_chat_ids;
        return $this;
    }
    /**
     * Profile fields to return.;
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $_fields) : GetChatUsers
    {
        $this->params['_fields'] = $_fields;
        return $this;
    }
    /**
     * Case for declension of user name and surname:; 'nom' — nominative (default); 'gen' — genitive; 'dat' — dative; 'acc' — accusative; 'ins' — instrumental; 'abl' — prepositional
     *
     * {"type":"string","enum":["nom","gen","dat","acc","ins","abl"],"enumNames":["nominative","genitive","dative","accusative","instrumental","prepositional"]}
     */
    public function _name_case(string $_name_case) : GetChatUsers
    {
        $this->params['_name_case'] = $_name_case;
        return $this;
    }
}