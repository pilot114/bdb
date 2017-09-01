<?php

namespace Bdb\Addons\VK\Domain;

use Bdb\Addons\VK\Method;
class Auth
{
    public function checkPhone() : Method\CheckPhone
    {
        return new Method\CheckPhone();
    }
    public function signup() : Method\Signup
    {
        return new Method\Signup();
    }
    public function confirm() : Method\Confirm
    {
        return new Method\Confirm();
    }
    public function restore() : Method\Restore
    {
        return new Method\Restore();
    }
}