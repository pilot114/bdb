<?php

namespace Bdb\Addons\VK\Method;

/**
 * Ads a new item to the market.
 */
class Market_Add extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('market.add');
    }
    /**
     * ID of an item owner community.
     *
     * {"type":"integer"}
     */
    public function owner_id(integer $owner_id) : Market_Add
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Item name.
     *
     * {"type":"string","minLength":4,"maxLength":100}
     */
    public function name(string $name) : Market_Add
    {
        $this->params['name'] = $name;
        return $this;
    }
    /**
     * Item description.
     *
     * {"type":"string","minLength":10}
     */
    public function description(string $description) : Market_Add
    {
        $this->params['description'] = $description;
        return $this;
    }
    /**
     * Item category ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function category_id(integer $category_id) : Market_Add
    {
        $this->params['category_id'] = $category_id;
        return $this;
    }
    /**
     * Item price.
     *
     * {"type":"float","minimum":0}
     */
    public function price(float $price) : Market_Add
    {
        $this->params['price'] = $price;
        return $this;
    }
    /**
     * Item status ('1' — deleted, '0' — not deleted).
     *
     * {"type":"boolean"}
     */
    public function _deleted(boolean $deleted) : Market_Add
    {
        $this->params['deleted'] = $deleted;
        return $this;
    }
    /**
     * Cover photo ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function main_photo_id(integer $main_photo_id) : Market_Add
    {
        $this->params['main_photo_id'] = $main_photo_id;
        return $this;
    }
    /**
     * IDs of additional photos.
     *
     * {"type":"array","items":{"type":"integer","minimum":0},"maxItems":4}
     */
    public function _photo_ids(array $photo_ids) : Market_Add
    {
        $this->params['photo_ids'] = $photo_ids;
        return $this;
    }
}