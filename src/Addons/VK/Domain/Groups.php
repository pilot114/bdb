<?php

namespace Bdb\Addons\VK\Domain;

use Bdb\Addons\VK\Method;
class Groups
{
    public function isMember() : Method\IsMember
    {
        return new Method\IsMember();
    }
    public function getById() : Method\GetById
    {
        return new Method\GetById();
    }
    public function get() : Method\Get
    {
        return new Method\Get();
    }
    public function getMembers() : Method\GetMembers
    {
        return new Method\GetMembers();
    }
    public function join() : Method\Join
    {
        return new Method\Join();
    }
    public function leave() : Method\Leave
    {
        return new Method\Leave();
    }
    public function search() : Method\Search
    {
        return new Method\Search();
    }
    public function getCatalog() : Method\GetCatalog
    {
        return new Method\GetCatalog();
    }
    public function getCatalogInfo() : Method\GetCatalogInfo
    {
        return new Method\GetCatalogInfo();
    }
    public function getInvites() : Method\GetInvites
    {
        return new Method\GetInvites();
    }
    public function getInvitedUsers() : Method\GetInvitedUsers
    {
        return new Method\GetInvitedUsers();
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
    public function create() : Method\Create
    {
        return new Method\Create();
    }
    public function edit() : Method\Edit
    {
        return new Method\Edit();
    }
    public function editPlace() : Method\EditPlace
    {
        return new Method\EditPlace();
    }
    public function getSettings() : Method\GetSettings
    {
        return new Method\GetSettings();
    }
    public function getRequests() : Method\GetRequests
    {
        return new Method\GetRequests();
    }
    public function editManager() : Method\EditManager
    {
        return new Method\EditManager();
    }
    public function invite() : Method\Invite
    {
        return new Method\Invite();
    }
    public function addLink() : Method\AddLink
    {
        return new Method\AddLink();
    }
    public function deleteLink() : Method\DeleteLink
    {
        return new Method\DeleteLink();
    }
    public function editLink() : Method\EditLink
    {
        return new Method\EditLink();
    }
    public function reorderLink() : Method\ReorderLink
    {
        return new Method\ReorderLink();
    }
    public function removeUser() : Method\RemoveUser
    {
        return new Method\RemoveUser();
    }
    public function approveRequest() : Method\ApproveRequest
    {
        return new Method\ApproveRequest();
    }
    public function getCallbackConfirmationCode() : Method\GetCallbackConfirmationCode
    {
        return new Method\GetCallbackConfirmationCode();
    }
    public function getCallbackServerSettings() : Method\GetCallbackServerSettings
    {
        return new Method\GetCallbackServerSettings();
    }
    public function getCallbackSettings() : Method\GetCallbackSettings
    {
        return new Method\GetCallbackSettings();
    }
    public function setCallbackServer() : Method\SetCallbackServer
    {
        return new Method\SetCallbackServer();
    }
    public function setCallbackServerSettings() : Method\SetCallbackServerSettings
    {
        return new Method\SetCallbackServerSettings();
    }
    public function setCallbackSettings() : Method\SetCallbackSettings
    {
        return new Method\SetCallbackSettings();
    }
}