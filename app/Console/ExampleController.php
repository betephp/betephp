<?php

namespace App\Console;

use Bete\Console\Controller;
use Bete\Console\Request;

class ExampleController extends Controller
{
    public function index(Request $request)
    {
        return "Hello, this is index action.\n";
    }

    public function actionDailyUpdate(Request $request)
    {
        print_r($request->param()); 
        print_r($request->option());
    }
}
