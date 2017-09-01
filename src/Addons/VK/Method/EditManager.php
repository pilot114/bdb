<?php

namespace Bdb\Addons\VK\Method;

/**
 * Allows to add, remove or edit the community manager.
 */
class EditManager
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
    public function group_id(integer $group_id) : EditManager
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * User ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function user_id(integer $user_id) : EditManager
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * Manager role. Possible values:; *'moderator';; *'editor';; *'administrator'.
     *
     * {"type":"string","enum":["moderator","editor","administrator"]}
     */
    public function _role(string $_role) : EditManager
    {
        $this->params['_role'] = $_role;
        return $this;
    }
    /**
     * '1' — to show the manager in Contacts block of the community.
     *
     * {"type":"boolean"}
     */
    public function _is_contact(boolean $_is_contact) : EditManager
    {
        $this->params['_is_contact'] = $_is_contact;
        return $this;
    }
    /**
     * Position to show in Contacts block.
     *
     * {"type":"string"}
     */
    public function _contact_position(string $_contact_position) : EditManager
    {
        $this->params['_contact_position'] = $_contact_position;
        return $this;
    }
    /**
     * Contact phone.
     *
     * {"type":"string"}
     */
    public function _contact_phone(string $_contact_phone) : EditManager
    {
        $this->params['_contact_phone'] = $_contact_phone;
        return $this;
    }
    /**
     * Contact e-mail.
     *
     * {"type":"string"}
     */
    public function _contact_email(string $_contact_email) : EditManager
    {
        $this->params['_contact_email'] = $_contact_email;
        return $this;
    }
}