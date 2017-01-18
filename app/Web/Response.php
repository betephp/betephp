<?php

namespace App\Web;

use Bete\Web\Response As BaseResponse;
use Bete\Web\View;

class Response extends BaseResponse
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
