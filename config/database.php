<?php

return [

    'fetch' => PDO::FETCH_OBJ,

    'default' => 'default',

    'connections' => [

        'default' => [
            'driver' => 'mysql',
            'host' => ini('DB_HOST', 'localhost'),
            'port' => ini('DB_PORT', '3306'),
            'database' => ini('DB_DATABASE', 'test'),
            'username' => ini('DB_USERNAME', 'root'),
            'password' => ini('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',

            // 'write' => [
            //     ['host' => '', 'port' => ''],
            //     ['host' => '', 'port' => ''],
            // ],

            // 'read' => [
            //     ['host' => '', 'port' => ''],
            //     ['host' => '', 'port' => ''],
            // ],
        ],

    ],

];
