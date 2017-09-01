<?php

namespace Bdb\Addons\VK\Domain;

use Bdb\Addons\VK\Method;
class Account
{
    public function getCounters() : Method\GetCounters
    {
        return new Method\GetCounters();
    }
    public function setNameInMenu() : Method\SetNameInMenu
    {
        return new Method\SetNameInMenu();
    }
    public function setOnline() : Method\SetOnline
    {
        return new Method\SetOnline();
    }
    public function setOffline() : Method\SetOffline
    {
        return new Method\SetOffline();
    }
    public function lookupContacts() : Method\LookupContacts
    {
        return new Method\LookupContacts();
    }
    public function registerDevice() : Method\RegisterDevice
    {
        return new Method\RegisterDevice();
    }
    public function unregisterDevice() : Method\UnregisterDevice
    {
        return new Method\UnregisterDevice();
    }
    public function setSilenceMode() : Method\SetSilenceMode
    {
        return new Method\SetSilenceMode();
    }
    public function getPushSettings() : Method\GetPushSettings
    {
        return new Method\GetPushSettings();
    }
    public function setPushSettings() : Method\SetPushSettings
    {
        return new Method\SetPushSettings();
    }
    public function getAppPermissions() : Method\GetAppPermissions
    {
        return new Method\GetAppPermissions();
    }
    public function getActiveOffers() : Method\GetActiveOffers
    {
        return new Method\GetActiveOffers();
    }
    public function banUser() : Method\BanUser
    {
        return new Method\BanUser();
    }
    public function unbanUser() : Method\UnbanUser
    {
        return new Method\UnbanUser();
    }
    public function getBanned() : Method\GetBanned
    {
        return new Method\GetBanned();
    }
    public function getInfo() : Method\GetInfo
    {
        return new Method\GetInfo();
    }
    public function setInfo() : Method\SetInfo
    {
        return new Method\SetInfo();
    }
    public function changePassword() : Method\ChangePassword
    {
        return new Method\ChangePassword();
    }
    public function getProfileInfo() : Method\GetProfileInfo
    {
        return new Method\GetProfileInfo();
    }
    public function saveProfileInfo() : Method\SaveProfileInfo
    {
        return new Method\SaveProfileInfo();
    }
}