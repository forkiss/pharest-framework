<?php

return [
    'app'         => [
        'debug'        => true,
        'finder'       => [
            'fail_header' => 'HTTP/1.1 404 Not Found'
        ],
        'route'        => [
            'path'    => '/app/routers/',
            'version' => true,
        ],
        'dependencies' => [
            'path' => '/app/config/dependencies.php'
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
        'modelsDir' => 'app/Models/',
    ]
];
