<?php

namespace Bdb\Addons\VkApi\Model;

class Error
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var int
     */
    protected $code;
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
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * @param int $code
     *
     * @return self
     */
    public function setCode($code = null)
    {
        $this->code = $code;
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