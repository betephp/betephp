<?php

namespace App\Web\Home;

use Bete\Web\Action;
use Bete\Web\Request;
use App\Model\User;

class Index extends Action
{

    public $renderType = self::TYPE_HTML;

    public $layout = 'main';

    public function middlewares()
    {
        return [];
    }

    public function run(Request $request)
    {
        return $this->render('home/index');
    }

}
