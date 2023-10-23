<?php

return [
    'oracle' => [
        'driver'         => 'oracle',
        'tns'            => env('DB_TNS', ''),
        'host'           => env('DB_HOST', '127.0.0.1'),
        'port'           => env('DB_PORT', '1521'),
        'database'       => env('DB_DATABASE', 'database'),
        'service_name'   => env('DB_SERVICE', 'service'),
        'username'       => env('DB_USERNAME', 'username'),
        'password'       => env('DB_PASSWORD', 'password'),
        'charset'        => env('DB_CHARSET', ''),
        'prefix'         => env('DB_PREFIX', ''),
        'prefix_schema'  => env('DB_SCHEMA_PREFIX', ''),
        // 'edition'        => env('DB_EDITION', 'ora$base'),
        // 'server_version' => env('DB_SERVER_VERSION', '11g'),
    ],
];
