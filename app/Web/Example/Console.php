<?php

namespace App\Web\Example;

use Bete\Web\Action;
use Bete\Web\Request;

class Console extends Action
{

    public $renderType = self::TYPE_HTML;

    public $layout = 'main';

    public function middlewares()
    {
        return [];
    }

    public function run(Request $request)
    {
        return $this->render('example/console');
    }

}
