<?php

namespace App\Middleware;

use Bete\Foundation\Middleware;
use App\Exception\Exception;

class CheckLogin extends Middleware
{
    public function beforeAction()
    {
        return true;
    }

    public function afterAction($result)
    {
        return $result;
    }
}
