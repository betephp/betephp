<?php

namespace App\Web\Example;

use Bete\Web\Action;
use Bete\Web\Request;

class Validation extends Action
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
            $data = $request->post();
            $rules = [
                'title' => 'required|string|between:5,50|name:标题',
                'content' => 'required|string|between:10,1000|name:内容',
                'name' => 'required|chinese|between:2,20|name:姓名',
                'mobile' => 'required|mobile|name:手机号码',
                'email' => 'required|email|name:邮箱地址',
            ];

            app()->validator->validate($data, $rules);

            app()->session->setFlash('message', '验证成功');

            app()->response->redirect('/example/validation');
        }

        return $this->render('example/validation');
    }

}
