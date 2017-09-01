<?php

namespace Bdb\Addons\VK\Domain;

use Bdb\Addons\VK\Method;
class Secure
{
    public function getAppBalance() : Method\GetAppBalance
    {
        return new Method\GetAppBalance();
    }
    public function getTransactionsHistory() : Method\GetTransactionsHistory
    {
        return new Method\GetTransactionsHistory();
    }
    public function getSMSHistory() : Method\GetSMSHistory
    {
        return new Method\GetSMSHistory();
    }
    public function sendSMSNotification() : Method\SendSMSNotification
    {
        return new Method\SendSMSNotification();
    }
    public function sendNotification() : Method\SendNotification
    {
        return new Method\SendNotification();
    }
    public function setCounter() : Method\SetCounter
    {
        return new Method\SetCounter();
    }
    public function setUserLevel() : Method\SetUserLevel
    {
        return new Method\SetUserLevel();
    }
    public function getUserLevel() : Method\GetUserLevel
    {
        return new Method\GetUserLevel();
    }
    public function addAppEvent() : Method\AddAppEvent
    {
        return new Method\AddAppEvent();
    }
    public function checkToken() : Method\CheckToken
    {
        return new Method\CheckToken();
    }
}