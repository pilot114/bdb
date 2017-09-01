<?php

namespace Bdb\Addons\VK\Method;

/**
 * Changes a user password after access is successfully restored with the [vk.com/dev/auth.restore|auth.restore] method.
 */
class ChangePassword
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Session id received after the [vk.com/dev/auth.restore|auth.restore] method is executed.; (If the password is changed right after the access was restored)
     *
     * {"type":"string"}
     */
    public function _restore_sid(string $_restore_sid) : ChangePassword
    {
        $this->params['_restore_sid'] = $_restore_sid;
        return $this;
    }
    /**
     * Hash received after a successful OAuth authorization with a code got by SMS.; (If the password is changed right after the access was restored)
     *
     * {"type":"string"}
     */
    public function _change_password_hash(string $_change_password_hash) : ChangePassword
    {
        $this->params['_change_password_hash'] = $_change_password_hash;
        return $this;
    }
    /**
     * Current user password.
     *
     * {"type":"string"}
     */
    public function _old_password(string $_old_password) : ChangePassword
    {
        $this->params['_old_password'] = $_old_password;
        return $this;
    }
    /**
     * New password that will be set as a current
     *
     * {"type":"string","minLength":6}
     */
    public function new_password(string $new_password) : ChangePassword
    {
        $this->params['new_password'] = $new_password;
        return $this;
    }
}