<?php

namespace App\Web;

use Bete\Web\Request;

class ExampleController extends Controller
{
    public $layout = 'main';

    public $middlewares = [
        'CheckLogin' => '* - login,register',
    ];

    public function actionConsole(Request $request)
    {
        return $this->render('example/middleware');
    }

    public function actionDatabase(Request $request)
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

    public function actionMiddleware(Request $request)
    {
        return $this->render('example/middleware');
    }

    public function actionRoute(Request $request)
    {
        return $this->render('example/route');
    }

    public function actionValidation(Request $request)
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

    public function actionWeb(Request $request)
    {
        $data = [
            'get' => $request->get(),
            'post' => $request->post(),
        ];
        return $this->render('example/web', $data);
    }

}
