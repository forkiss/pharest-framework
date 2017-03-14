<?php

return [
    'application' => [
        'debug'        => true,
        'dependencies' => [
            'path' => 'config/dependencies.php'
        ],
        'route'        => [
            'version' => true,
            'path'    => 'routers/'
        ],
        'validate'     => [
            'enable'         => true,
            'cancel_on_fail' => false,
            'methods'        => ['POST', 'PUT']
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
    ]
];
