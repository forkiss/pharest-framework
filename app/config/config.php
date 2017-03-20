<?php

define('APP_ROOT', dirname(__DIR__));

return [
    'app'         => [
        'debug'        => true,
        'finder'       => [
            'fail_header' => 'HTTP/1.1 404 Not Found'
        ],
        'dependencies' => [
            'path' => '/config/dependencies.php'
        ],
        'route'        => [
            'version' => true,
            'path'    => APP_ROOT . '/routers/'
        ],
        'validate'     => [
            'multi'   => false,
            'methods' => ['POST', 'PUT']
        ]
    ],
    'database'    => [
        'adapter'  => 'Mysql',
        'host'     => '127.0.0.1',
        'username' => 'root',
        'password' => '',
        'dbname'   => 'database',
        'charset'  => 'utf8'
    ],
    'redis'       => [
        'cache'   => [
            'host'       => '127.0.0.1',
            'auth'       => null,
            'prefix'     => 'prefix:',
            'lifetime'   => 7200,
            'persistent' => false
        ],
        'session' => [
            'host' => '127.0.0.1',
            'auth' => null
        ]
    ],
    // for develop tools
    'application' => [
        'modelsDir' => APP_ROOT . '/Models/',
    ]
];
