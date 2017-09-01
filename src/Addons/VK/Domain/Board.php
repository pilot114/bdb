<?php

namespace Bdb\Addons\VK\Domain;

use Bdb\Addons\VK\Method;
class Board
{
    public function getTopics() : Method\GetTopics
    {
        return new Method\GetTopics();
    }
    public function getComments() : Method\GetComments
    {
        return new Method\GetComments();
    }
    public function addTopic() : Method\AddTopic
    {
        return new Method\AddTopic();
    }
    public function createComment() : Method\CreateComment
    {
        return new Method\CreateComment();
    }
    public function deleteTopic() : Method\DeleteTopic
    {
        return new Method\DeleteTopic();
    }
    public function editTopic() : Method\EditTopic
    {
        return new Method\EditTopic();
    }
    public function editComment() : Method\EditComment
    {
        return new Method\EditComment();
    }
    public function restoreComment() : Method\RestoreComment
    {
        return new Method\RestoreComment();
    }
    public function deleteComment() : Method\DeleteComment
    {
        return new Method\DeleteComment();
    }
    public function openTopic() : Method\OpenTopic
    {
        return new Method\OpenTopic();
    }
    public function closeTopic() : Method\CloseTopic
    {
        return new Method\CloseTopic();
    }
    public function fixTopic() : Method\FixTopic
    {
        return new Method\FixTopic();
    }
    public function unfixTopic() : Method\UnfixTopic
    {
        return new Method\UnfixTopic();
    }
}