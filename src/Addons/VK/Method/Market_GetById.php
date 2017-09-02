<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns information about market items by their ids.
 */
class Market_GetById extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('market.getById');
    }
    /**
     * Comma-separated ids list: {user id}_{item id}.; If an item belongs to a community -{community id} is used. ; " 'Videos' value example: ; '-4363_136089719,13245770_137352259'"
     *
     * {"type":"array","items":{"type":"string"},"maxItems":100}
     */
    public function item_ids(array $item_ids) : Market_GetById
    {
        $this->params['item_ids'] = $item_ids;
        return $this;
    }
    /**
     * '1' – to return additional fields: 'likes, can_comment, car_repost, photos'. By default: '0'.
     *
     * {"type":"boolean"}
     */
    public function _extended(boolean $extended) : Market_GetById
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}