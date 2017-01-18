<?php

return [

    'default' => 'default',

    'connections' => [

        'default' => [
            'host' => ini('REDIS_HOST', 'localhost'),
            'port' => ini('REDIS_PORT', 6379),
            'password' => false,
            'database' => 0,
            'timeout' => 0,
            'prefix' => 'betephp:',
        ],
        
    ],

];
