<?php

namespace App\Console;

use Bete\Console\Request;

class ExampleController extends Controller
{
    public function index(Request $request)
    {
        print_r($request->param());
        print_r($request->option());
        return "Hello, Example:DailyUpdate.\n";
    }
}
