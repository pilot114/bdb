<?php

namespace Bdb\Addons\VkApi\Model;

class VkApi
{
    /**
     * @var Error[]
     */
    protected $errors;
    /**
     * @var Method[]
     */
    protected $methods;
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
    /**
     * @return Method[]
     */
    public function getMethods()
    {
        return $this->methods;
    }
    /**
     * @param Method[] $methods
     *
     * @return self
     */
    public function setMethods(array $methods = null)
    {
        $this->methods = $methods;
        return $this;
    }
}