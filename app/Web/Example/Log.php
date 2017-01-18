<?php

namespace App\Web\Example;

use Bete\Web\Action;
use Bete\Web\Request;

class Log extends Action
{

    public $renderType = self::TYPE_HTML;

    public $layout = 'main';

    public function middlewares()
    {
        return [];
    }

    public function run(Request $request)
    {
        app()->log->info('logIt');
        app()->log->data('some_thing_happen');
        return $this->render('example/log');
    }

}
