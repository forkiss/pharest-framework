<?php

namespace App\Middleware;


class Kernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    public $middleware = [
        \App\Middleware\AuthMiddleware::class
    ];

}