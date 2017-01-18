<?php

namespace App\Web\Example;

use Bete\Web\Action;
use Bete\Web\Request;

class Web extends Action
{

    public $renderType = self::TYPE_HTML;

    public $layout = 'main';

    public function middlewares()
    {
        return [];
    }

    public function run(Request $request)
    {
        $data = [
            'get' => $request->get(),
            'post' => $request->post(),
        ];
        return $this->render('example/web', $data);
    }

}
