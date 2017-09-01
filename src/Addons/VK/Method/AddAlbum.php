<?php

namespace Bdb\Addons\VK\Method;

/**
 * Creates new collection of items
 */
class AddAlbum
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * ID of an item owner community.
     *
     * {"type":"integer"}
     */
    public function owner_id(integer $owner_id) : AddAlbum
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Collection title.
     *
     * {"type":"string","maxLength":128}
     */
    public function title(string $title) : AddAlbum
    {
        $this->params['title'] = $title;
        return $this;
    }
    /**
     * Cover photo ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function _photo_id(integer $_photo_id) : AddAlbum
    {
        $this->params['_photo_id'] = $_photo_id;
        return $this;
    }
    /**
     * Set as main ('1' – set, '0' – no).
     *
     * {"type":"boolean"}
     */
    public function _main_album(boolean $_main_album) : AddAlbum
    {
        $this->params['_main_album'] = $_main_album;
        return $this;
    }
}