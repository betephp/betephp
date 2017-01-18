<?php

namespace App\Middleware;

use Bete\Foundation\Middleware;
use App\Exception\Exception;

class CheckLogin extends Middleware
{
    public function beforeAction($action)
    {
        if (app()->request->get('isLogin') !== null) {
            if (app()->request->get('isLogin') != 1) {
                app()->response->redirect('/');
            }

            echo "<div style='background: #5cb85c; color: #FFF;'>CheckLogin中间件通过</div><br>";
        }
    }

    public function afterAction($action, $result)
    {
        return $result;
    }
}
