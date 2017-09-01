<?php

namespace Bdb\Addons\VK\Method;

/**
 * Creates an empty photo album.
 */
class CreateAlbum
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Album title.
     *
     * {"type":"string","minLength":2}
     */
    public function title(string $title) : CreateAlbum
    {
        $this->params['title'] = $title;
        return $this;
    }
    /**
     * ID of the community in which the album will be created.
     *
     * {"type":"integer"}
     */
    public function _group_id(integer $_group_id) : CreateAlbum
    {
        $this->params['_group_id'] = $_group_id;
        return $this;
    }
    /**
     * Album description.
     *
     * {"type":"string"}
     */
    public function _description(string $_description) : CreateAlbum
    {
        $this->params['_description'] = $_description;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"array","items":{"type":"string"},"default":0}
     */
    public function _privacy_view(array $_privacy_view) : CreateAlbum
    {
        $this->params['_privacy_view'] = $_privacy_view;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"array","items":{"type":"string"},"default":0}
     */
    public function _privacy_comment(array $_privacy_comment) : CreateAlbum
    {
        $this->params['_privacy_comment'] = $_privacy_comment;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"boolean"}
     */
    public function _upload_by_admins_only(boolean $_upload_by_admins_only) : CreateAlbum
    {
        $this->params['_upload_by_admins_only'] = $_upload_by_admins_only;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"boolean"}
     */
    public function _comments_disabled(boolean $_comments_disabled) : CreateAlbum
    {
        $this->params['_comments_disabled'] = $_comments_disabled;
        return $this;
    }
}