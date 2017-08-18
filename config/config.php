<?php

return [
    'app'         => [
        'debug'        => true,
        'environment'  => 'test',
        'timezone'     => 'Asia/Shanghai',
        'log'          => '/storage/',
        'finder'       => [
            'fail_header' => 'HTTP/1.1 404 Not Found'
        ],
        'route'        => [
            'path'    => '/routers/',
            'version' => true,
        ],
        'dependencies' => [
            'path' => '/config/dependencies.php'
        ],
        'validate'     => [
            'multi'   => false,
            'methods' => [
                'GET'  => false,
                'POST' => true,
                'PUT'  => true
            ],
            'filter'  => [
                'GET'  => false,
                'POST' => true,
                'PUT'  => true
            ]
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
