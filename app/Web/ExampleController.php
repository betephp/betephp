<?php

namespace App\Web;

use Bete\Web\Request;

class ExampleController extends Controller
{
    public $layout = 'main';

    public $middlewares = [
        'CheckLogin' => 'middleware,list - list',
    ];

    public function actionIndex()
    {
        return 'index';
    }

    public function actionConsole(Request $request)
    {
        return $this->render('middleware');
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

        return $this->render('database');
    }

    public function actionMiddleware(Request $request)
    {
        return $this->render('middleware');
    }

    public function actionRoute(Request $request)
    {
        return $this->render('route');
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

        return $this->render('validation');
    }

    public function actionWeb(Request $request)
    {
        $data = [
            'get' => $request->get(),
            'post' => $request->post(),
        ];
        
        return $this->render('web', $data);
    }

    public function actionSession(Request $request)
    {
        if ($request->post('username')) {
            app()->session->set('username', $request->post('username'));
            app()->response->redirect('/example/cookieSession');
        }
        if ($request->post('message')) {
            app()->session->setFlash('message', $request->post('message'));
            app()->response->redirect('/example/cookieSession');
        }
        if ($request->post('source')) {
            app()->cookie->set('source', 'google');
            app()->response->redirect('/example/cookieSession');
        }
        return $this->render('session');
    }

    public function actionLog(Request $request)
    {
        app()->log->info('logIt');
        
        app()->log->data('some_thing_happen');

        return $this->render('log');
    }
}
