<?php

namespace App\Web\Example;

use Bete\Web\Action;
use Bete\Web\Request;
use App\Model\User;

class Database extends Action
{

    public $renderType = self::TYPE_HTML;

    public $layout = 'main';

    public function middlewares()
    {
        return [];
    }

    public function run(Request $request)
    {
        if ($request->isPost()) {
            $user = new User();
            $user->username = 'abc123';
            $user->password = sha1('123123');
            $user->create_time = time();
            $res = $user->save();
        }

        return $this->render('example/database');
    }

}
