<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a separate catalog section
 */
class GetCatalogSection
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return true;
    }
    /**
     * 'id' value returned with a block by the '' method.
     *
     * {"type":"string"}
     */
    public function section_id(string $section_id) : GetCatalogSection
    {
        $this->params['section_id'] = $section_id;
        return $this;
    }
    /**
     * 'next' value returned with a block by the '' method.
     *
     * {"type":"string"}
     */
    public function from(string $from) : GetCatalogSection
    {
        $this->params['from'] = $from;
        return $this;
    }
    /**
     * number of blocks to return.
     *
     * {"type":"integer","minimum":0,"default":10,"maximum":16}
     */
    public function _count(integer $_count) : GetCatalogSection
    {
        $this->params['_count'] = $_count;
        return $this;
    }
    /**
     * 1 – return additional infor about users and communities in profiles and groups fields.
     *
     * {"type":"boolean"}
     */
    public function _extended(boolean $_extended) : GetCatalogSection
    {
        $this->params['_extended'] = $_extended;
        return $this;
    }
}