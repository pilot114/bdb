<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns categories list for communities catalog
 */
class GetCatalogInfo
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * 1 – to return communities count and three communities for preview.; By default: 0.
     *
     * {"type":"boolean"}
     */
    public function _extended(boolean $_extended) : GetCatalogInfo
    {
        $this->params['_extended'] = $_extended;
        return $this;
    }
    /**
     * 1 – to return subcategories info.; By default: 0.
     *
     * {"type":"boolean"}
     */
    public function _subcategories(boolean $_subcategories) : GetCatalogInfo
    {
        $this->params['_subcategories'] = $_subcategories;
        return $this;
    }
}