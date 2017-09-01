<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns media files from the dialog or group chat.
 */
class GetHistoryAttachments
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Peer ID.; ; "; For group chat:; '2000000000 + chat ID' ; ; For community:; '-community ID'"
     *
     * {"type":"integer"}
     */
    public function peer_id(integer $peer_id) : GetHistoryAttachments
    {
        $this->params['peer_id'] = $peer_id;
        return $this;
    }
    /**
     * Type of media files to return:; *'photo';; *'video';; *'audio';; *'doc';; *'link'.;;*'market'.;;*'wall'.;;*'share'
     *
     * {"type":"string","enum":["photo","video","doc","audio","link","market","wall","share"],"default":0}
     */
    public function _media_type(string $_media_type) : GetHistoryAttachments
    {
        $this->params['_media_type'] = $_media_type;
        return $this;
    }
    /**
     * Message ID to start return results from.
     *
     * {"type":"string"}
     */
    public function _start_from(string $_start_from) : GetHistoryAttachments
    {
        $this->params['_start_from'] = $_start_from;
        return $this;
    }
    /**
     * Number of objects to return.
     *
     * {"type":"integer","minimum":0,"maximum":200,"default":30}
     */
    public function _count(integer $_count) : GetHistoryAttachments
    {
        $this->params['_count'] = $_count;
        return $this;
    }
    /**
     * '1' — to return photo sizes in a
     *
     * {"type":"boolean"}
     */
    public function _photo_sizes(boolean $_photo_sizes) : GetHistoryAttachments
    {
        $this->params['_photo_sizes'] = $_photo_sizes;
        return $this;
    }
    /**
     * Additional profile [vk.com/dev/fields|fields] to return. 
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $_fields) : GetHistoryAttachments
    {
        $this->params['_fields'] = $_fields;
        return $this;
    }
}