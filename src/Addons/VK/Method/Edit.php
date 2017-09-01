<?php

namespace Bdb\Addons\VK\Method;

/**
 * Edits an item.
 */
class Edit
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
    public function owner_id(integer $owner_id) : Edit
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Item ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function item_id(integer $item_id) : Edit
    {
        $this->params['item_id'] = $item_id;
        return $this;
    }
    /**
     * Item name.
     *
     * {"type":"string","minLength":4,"maxLength":100}
     */
    public function name(string $name) : Edit
    {
        $this->params['name'] = $name;
        return $this;
    }
    /**
     * Item description.
     *
     * {"type":"string","minLength":10}
     */
    public function description(string $description) : Edit
    {
        $this->params['description'] = $description;
        return $this;
    }
    /**
     * Item category ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function category_id(integer $category_id) : Edit
    {
        $this->params['category_id'] = $category_id;
        return $this;
    }
    /**
     * Item price.
     *
     * {"type":"number","minimum":0}
     */
    public function price(number $price) : Edit
    {
        $this->params['price'] = $price;
        return $this;
    }
    /**
     * Item status ('1' — deleted, '0' — not deleted).
     *
     * {"type":"boolean"}
     */
    public function _deleted(boolean $_deleted) : Edit
    {
        $this->params['_deleted'] = $_deleted;
        return $this;
    }
    /**
     * Cover photo ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function main_photo_id(integer $main_photo_id) : Edit
    {
        $this->params['main_photo_id'] = $main_photo_id;
        return $this;
    }
    /**
     * IDs of additional photos.
     *
     * {"type":"array","items":{"type":"integer","minimum":0},"maxItems":4}
     */
    public function _photo_ids(array $_photo_ids) : Edit
    {
        $this->params['_photo_ids'] = $_photo_ids;
        return $this;
    }
}