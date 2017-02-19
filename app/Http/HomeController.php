<?php

namespace App\Http;

use Bete\Http\Request;
use App\Model\User;
use Bete\Database\DB;

class HomeController extends Controller
{
    public function actionIndex(Request $request)
    {
        return $this->render('index');
    }
}
