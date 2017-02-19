<?php

namespace App\Http;

use Bete\Http\Controller as BaseController;

class Controller extends BaseController
{
    public function json($data, $code = 0, $message = 'OK')
    {
        $result = [
            'code' => $code,
            'message' => $message,
            'data' => $data,
        ];

        return json_encode($result);
    }
}
