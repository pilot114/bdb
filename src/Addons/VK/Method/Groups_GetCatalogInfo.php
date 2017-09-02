<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns categories list for communities catalog
 */
class Groups_GetCatalogInfo extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('groups.getCatalogInfo');
    }
    /**
     * 1 – to return communities count and three communities for preview.; By default: 0.
     *
     * {"type":"boolean"}
     */
    public function _extended(boolean $extended) : Groups_GetCatalogInfo
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * 1 – to return subcategories info.; By default: 0.
     *
     * {"type":"boolean"}
     */
    public function _subcategories(boolean $subcategories) : Groups_GetCatalogInfo
    {
        $this->params['subcategories'] = $subcategories;
        return $this;
    }
}