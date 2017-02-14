<?php

return [

    'env' => ini('APP_ENV', 'prod'),

    'debug' => ini('APP_DEBUG', false),

    'locale' => 'zh',

    'timezone' => 'Asia/Shanghai',

    'log' => [
        'date_suffix' => 'Ymd',
        'trace_level' => 10,
    ],

    'components' => [
        'Bete\Validation\ValidationComponent',
        'Bete\Database\DatabaseComponent',
        'Bete\Redis\RedisComponent',
        'Bete\Cookie\CookieComponent',
        'Bete\Session\SessionComponent',
    ],
    
];
