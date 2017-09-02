<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of IDs of users participating in a chat.
 */
class Messages_GetChatUsers extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('messages.getChatUsers');
    }
    /**
     * Chat ID.
     *
     * {"type":"int"}
     */
    public function _chat_id(int $chat_id) : Messages_GetChatUsers
    {
        $this->params['chat_id'] = $chat_id;
        return $this;
    }
    /**
     * Chat IDs.
     *
     * {"type":"array","items":{"type":"integer"}}
     */
    public function _chat_ids(array $chat_ids) : Messages_GetChatUsers
    {
        $this->params['chat_ids'] = $chat_ids;
        return $this;
    }
    /**
     * Profile fields to return.;
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : Messages_GetChatUsers
    {
        $this->params['fields'] = $fields;
        return $this;
    }
    /**
     * Case for declension of user name and surname:; 'nom' — nominative (default); 'gen' — genitive; 'dat' — dative; 'acc' — accusative; 'ins' — instrumental; 'abl' — prepositional
     *
     * {"type":"string","enum":["nom","gen","dat","acc","ins","abl"],"enumNames":["nominative","genitive","dative","accusative","instrumental","prepositional"]}
     */
    public function _name_case(string $name_case) : Messages_GetChatUsers
    {
        $this->params['name_case'] = $name_case;
        return $this;
    }
}