<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns media files from the dialog or group chat.
 */
class Messages_GetHistoryAttachments extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('messages.getHistoryAttachments');
    }
    /**
     * Peer ID.; ; "; For group chat:; '2000000000 + chat ID' ; ; For community:; '-community ID'"
     *
     * {"type":"integer"}
     */
    public function peer_id(integer $peer_id) : Messages_GetHistoryAttachments
    {
        $this->params['peer_id'] = $peer_id;
        return $this;
    }
    /**
     * Type of media files to return:; *'photo';; *'video';; *'audio';; *'doc';; *'link'.;;*'market'.;;*'wall'.;;*'share'
     *
     * {"type":"string","enum":["photo","video","doc","audio","link","market","wall","share"],"default":0}
     */
    public function _media_type(string $media_type) : Messages_GetHistoryAttachments
    {
        $this->params['media_type'] = $media_type;
        return $this;
    }
    /**
     * Message ID to start return results from.
     *
     * {"type":"string"}
     */
    public function _start_from(string $start_from) : Messages_GetHistoryAttachments
    {
        $this->params['start_from'] = $start_from;
        return $this;
    }
    /**
     * Number of objects to return.
     *
     * {"type":"integer","minimum":0,"maximum":200,"default":30}
     */
    public function _count(integer $count) : Messages_GetHistoryAttachments
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * '1' — to return photo sizes in a
     *
     * {"type":"boolean"}
     */
    public function _photo_sizes(boolean $photo_sizes) : Messages_GetHistoryAttachments
    {
        $this->params['photo_sizes'] = $photo_sizes;
        return $this;
    }
    /**
     * Additional profile [vk.com/dev/fields|fields] to return. 
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : Messages_GetHistoryAttachments
    {
        $this->params['fields'] = $fields;
        return $this;
    }
}