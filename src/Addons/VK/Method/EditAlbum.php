<?php

namespace Bdb\Addons\VK\Method;

/**
 * Edits a collection of items
 */
class EditAlbum
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * ID of an collection owner community.
     *
     * {"type":"integer"}
     */
    public function owner_id(integer $owner_id) : EditAlbum
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Collection ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function album_id(integer $album_id) : EditAlbum
    {
        $this->params['album_id'] = $album_id;
        return $this;
    }
    /**
     * Collection title.
     *
     * {"type":"string","maxLength":128}
     */
    public function title(string $title) : EditAlbum
    {
        $this->params['title'] = $title;
        return $this;
    }
    /**
     * Cover photo id
     *
     * {"type":"integer","minimum":0}
     */
    public function _photo_id(integer $_photo_id) : EditAlbum
    {
        $this->params['_photo_id'] = $_photo_id;
        return $this;
    }
    /**
     * Set as main ('1' – set, '0' – no).
     *
     * {"type":"boolean"}
     */
    public function _main_album(boolean $_main_album) : EditAlbum
    {
        $this->params['_main_album'] = $_main_album;
        return $this;
    }
}