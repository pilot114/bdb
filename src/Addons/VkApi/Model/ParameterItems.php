<?php

namespace Bdb\Addons\VkApi\Model;

class ParameterItems
{
    /**
     * @var string
     */
    protected $type;
    /**
     * @var float
     */
    protected $maximum;
    /**
     * @var float
     */
    protected $minimum;
    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType($type = null)
    {
        $this->type = $type;
        return $this;
    }
    /**
     * @return float
     */
    public function getMaximum()
    {
        return $this->maximum;
    }
    /**
     * @param float $maximum
     *
     * @return self
     */
    public function setMaximum($maximum = null)
    {
        $this->maximum = $maximum;
        return $this;
    }
    /**
     * @return float
     */
    public function getMinimum()
    {
        return $this->minimum;
    }
    /**
     * @param float $minimum
     *
     * @return self
     */
    public function setMinimum($minimum = null)
    {
        $this->minimum = $minimum;
        return $this;
    }
}