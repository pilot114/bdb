<?php

namespace Bdb\Addons\VK\Domain;

use Bdb\Addons\VK\Method;
class Messages
{
    public function get() : Method\Get
    {
        return new Method\Get();
    }
    public function getDialogs() : Method\GetDialogs
    {
        return new Method\GetDialogs();
    }
    public function getById() : Method\GetById
    {
        return new Method\GetById();
    }
    public function search() : Method\Search
    {
        return new Method\Search();
    }
    public function getHistory() : Method\GetHistory
    {
        return new Method\GetHistory();
    }
    public function getHistoryAttachments() : Method\GetHistoryAttachments
    {
        return new Method\GetHistoryAttachments();
    }
    public function send() : Method\Send
    {
        return new Method\Send();
    }
    public function delete() : Method\Delete
    {
        return new Method\Delete();
    }
    public function deleteDialog() : Method\DeleteDialog
    {
        return new Method\DeleteDialog();
    }
    public function restore() : Method\Restore
    {
        return new Method\Restore();
    }
    public function markAsRead() : Method\MarkAsRead
    {
        return new Method\MarkAsRead();
    }
    public function markAsImportant() : Method\MarkAsImportant
    {
        return new Method\MarkAsImportant();
    }
    public function getLongPollServer() : Method\GetLongPollServer
    {
        return new Method\GetLongPollServer();
    }
    public function getLongPollHistory() : Method\GetLongPollHistory
    {
        return new Method\GetLongPollHistory();
    }
    public function getChat() : Method\GetChat
    {
        return new Method\GetChat();
    }
    public function createChat() : Method\CreateChat
    {
        return new Method\CreateChat();
    }
    public function editChat() : Method\EditChat
    {
        return new Method\EditChat();
    }
    public function getChatUsers() : Method\GetChatUsers
    {
        return new Method\GetChatUsers();
    }
    public function setActivity() : Method\SetActivity
    {
        return new Method\SetActivity();
    }
    public function searchDialogs() : Method\SearchDialogs
    {
        return new Method\SearchDialogs();
    }
    public function addChatUser() : Method\AddChatUser
    {
        return new Method\AddChatUser();
    }
    public function removeChatUser() : Method\RemoveChatUser
    {
        return new Method\RemoveChatUser();
    }
    public function getLastActivity() : Method\GetLastActivity
    {
        return new Method\GetLastActivity();
    }
    public function setChatPhoto() : Method\SetChatPhoto
    {
        return new Method\SetChatPhoto();
    }
    public function deleteChatPhoto() : Method\DeleteChatPhoto
    {
        return new Method\DeleteChatPhoto();
    }
    public function denyMessagesFromGroup() : Method\DenyMessagesFromGroup
    {
        return new Method\DenyMessagesFromGroup();
    }
    public function allowMessagesFromGroup() : Method\AllowMessagesFromGroup
    {
        return new Method\AllowMessagesFromGroup();
    }
    public function isMessagesFromGroupAllowed() : Method\IsMessagesFromGroupAllowed
    {
        return new Method\IsMessagesFromGroupAllowed();
    }
}