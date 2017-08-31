<?php

namespace Bdb\Addons\VkApi\Model;

class Method
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var bool
     */
    protected $open;
    /**
     * @var Parameter[]
     */
    protected $parameters;
    /**
     * @var JsonReference[]
     */
    protected $responses;
    /**
     * @var Error[]
     */
    protected $errors;
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
    /**
     * @return bool
     */
    public function getOpen()
    {
        return $this->open;
    }
    /**
     * @param bool $open
     *
     * @return self
     */
    public function setOpen($open = null)
    {
        $this->open = $open;
        return $this;
    }
    /**
     * @return Parameter[]
     */
    public function getParameters()
    {
        return $this->parameters;
    }
    /**
     * @param Parameter[] $parameters
     *
     * @return self
     */
    public function setParameters(array $parameters = null)
    {
        $this->parameters = $parameters;
        return $this;
    }
    /**
     * @return JsonReference[]
     */
    public function getResponses()
    {
        return $this->responses;
    }
    /**
     * @param JsonReference[] $responses
     *
     * @return self
     */
    public function setResponses($responses = null)
    {
        $this->responses = $responses;
        return $this;
    }
    /**
     * @return Error[]
     */
    public function getErrors()
    {
        return $this->errors;
    }
    /**
     * @param Error[] $errors
     *
     * @return self
     */
    public function setErrors(array $errors = null)
    {
        $this->errors = $errors;
        return $this;
    }
}