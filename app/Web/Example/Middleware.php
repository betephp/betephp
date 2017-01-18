<?php

namespace App\Web\Example;

use Bete\Web\Action;
use Bete\Web\Request;

class Middleware extends Action
{

    public $renderType = self::TYPE_HTML;

    public $layout = 'main';

    public function middlewares()
    {
        return [
            'App\Middleware\CheckLogin',
        ];
    }

    public function run(Request $request)
    {
        return $this->render('example/middleware');
    }

}
