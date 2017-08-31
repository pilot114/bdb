<?php

namespace Bdb\Addons\VkApi\Model;

class Parameter
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var ParameterItems
     */
    protected $items;
    /**
     * @var int
     */
    protected $maxItems;
    /**
     * @var int
     */
    protected $minItems;
    /**
     * @var float
     */
    protected $maximum;
    /**
     * @var float
     */
    protected $minimum;
    /**
     * @var mixed[]
     */
    protected $enum;
    /**
     * @var mixed
     */
    protected $default;
    /**
     * @var bool
     */
    protected $required;
    /**
     * @var int
     */
    protected $maxLength;
    /**
     * @var int
     */
    protected $minLength;
    /**
     * @var string
     */
    protected $description;
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name = null)
    {
        $this->name = $name;
        return $this;
    }
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
     * @return ParameterItems
     */
    public function getItems()
    {
        return $this->items;
    }
    /**
     * @param ParameterItems $items
     *
     * @return self
     */
    public function setItems(ParameterItems $items = null)
    {
        $this->items = $items;
        return $this;
    }
    /**
     * @return int
     */
    public function getMaxItems()
    {
        return $this->maxItems;
    }
    /**
     * @param int $maxItems
     *
     * @return self
     */
    public function setMaxItems($maxItems = null)
    {
        $this->maxItems = $maxItems;
        return $this;
    }
    /**
     * @return int
     */
    public function getMinItems()
    {
        return $this->minItems;
    }
    /**
     * @param int $minItems
     *
     * @return self
     */
    public function setMinItems($minItems = null)
    {
        $this->minItems = $minItems;
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
    /**
     * @return mixed[]
     */
    public function getEnum()
    {
        return $this->enum;
    }
    /**
     * @param mixed[] $enum
     *
     * @return self
     */
    public function setEnum(array $enum = null)
    {
        $this->enum = $enum;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getDefault()
    {
        return $this->default;
    }
    /**
     * @param mixed $default
     *
     * @return self
     */
    public function setDefault($default = null)
    {
        $this->default = $default;
        return $this;
    }
    /**
     * @return bool
     */
    public function getRequired()
    {
        return $this->required;
    }
    /**
     * @param bool $required
     *
     * @return self
     */
    public function setRequired($required = null)
    {
        $this->required = $required;
        return $this;
    }
    /**
     * @return int
     */
    public function getMaxLength()
    {
        return $this->maxLength;
    }
    /**
     * @param int $maxLength
     *
     * @return self
     */
    public function setMaxLength($maxLength = null)
    {
        $this->maxLength = $maxLength;
        return $this;
    }
    /**
     * @return int
     */
    public function getMinLength()
    {
        return $this->minLength;
    }
    /**
     * @param int $minLength
     *
     * @return self
     */
    public function setMinLength($minLength = null)
    {
        $this->minLength = $minLength;
        return $this;
    }
    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription($description = null)
    {
        $this->description = $description;
        return $this;
    }
}