<?php

return [

    'driver' => ini('SESSION_DRIVER', 'file'), //file, database, redis

    'lifetime' => 7200, // 存活时间

    'file' => [
        'path' => runtime_path('session'),
    ],

    'database' => [
        'connection' => 'default',
        'table' => 'session',
    ], 

    'redis' => [
        'connection' => 'default',
        'prefix' => 'session:',
    ],

];
