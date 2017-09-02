<?php

namespace Bdb\Addons\VK\Method;

/**
 * Creates new collection of items
 */
class Market_AddAlbum extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('market.addAlbum');
    }
    /**
     * ID of an item owner community.
     *
     * {"type":"integer"}
     */
    public function owner_id(integer $owner_id) : Market_AddAlbum
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Collection title.
     *
     * {"type":"string","maxLength":128}
     */
    public function title(string $title) : Market_AddAlbum
    {
        $this->params['title'] = $title;
        return $this;
    }
    /**
     * Cover photo ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function _photo_id(integer $photo_id) : Market_AddAlbum
    {
        $this->params['photo_id'] = $photo_id;
        return $this;
    }
    /**
     * Set as main ('1' – set, '0' – no).
     *
     * {"type":"boolean"}
     */
    public function _main_album(boolean $main_album) : Market_AddAlbum
    {
        $this->params['main_album'] = $main_album;
        return $this;
    }
}