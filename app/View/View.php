<?php

namespace App\View;

use Bete\View\View as BaseView;

class View extends BaseView
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
