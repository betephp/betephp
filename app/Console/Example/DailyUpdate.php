<?php

namespace App\Console\Example;

use Bete\Console\Action;
use Bete\Console\Request;

class DailyUpdate extends Action
{
    public function run(Request $request)
    {
        print_r($request->param());
        print_r($request->option());
        return "Hello, Example:DailyUpdate.\n";
    }
}
