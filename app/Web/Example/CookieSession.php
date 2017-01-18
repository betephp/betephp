<?php

namespace App\Web\Example;

use Bete\Web\Action;
use Bete\Web\Request;

class CookieSession extends Action
{

    public $renderType = self::TYPE_HTML;

    public $layout = 'main';

    public function middlewares()
    {
        return [];
    }

    public function run(Request $request)
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
        return $this->render('example/cookie_session');
    }

}
