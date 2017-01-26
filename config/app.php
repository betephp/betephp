<?php

return [

    'env' => ini('APP_ENV', 'prod'),

    'debug' => ini('APP_DEBUG', false),

    'locale' => 'zh',

    'key' => ini('APP_KEY', ''),

    'timezone' => 'Asia/Shanghai',

    'log' => [
        'date_suffix' => 'Ymd',
        'trace_level' => 10,
    ],

    'components' => [
        'Bete\Database\DatabaseComponent',
        'Bete\Validation\ValidationComponent',
        'Bete\Redis\RedisComponent',
        'Bete\Cookie\CookieComponent',
        'Bete\Session\SessionComponent',
        'Bete\Encrypt\EncryptComponent',
    ],
    
];
