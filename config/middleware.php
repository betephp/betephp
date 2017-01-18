<?php

return [
    'App\Middleware\Internal' => 'site/*',
    'Bete\Middleware\CheckToken' => 'name/*',
    'App\Middleware\UserAuth' => [
        'appointment/list,info',
    ],
    'App\Middleware\CheckCsrf' => 'index2/index',
];
