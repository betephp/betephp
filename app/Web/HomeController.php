<?php

namespace App\Web;

use Bete\Web\Request;

class HomeController extends Controller
{
    public $layout = 'main';

    public function actionIndex(Request $request)
    {
        return $this->render('index', []);
    }
}
