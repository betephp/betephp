<?php

namespace App\Http;

use Bete\Http\Request;
use App\Model\User;
use Bete\Database\DB;

class HomeController extends Controller
{
    public function actionIndex(Request $request)
    {
        echo "<pre>";

        $result = User::all();

        foreach ($result as $item) {
            echo $item->username . "<br>";
        }

        print_r($result);

        exit;

        return $this->render('index');
    }
}
