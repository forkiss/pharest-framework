<?php

namespace App\Middleware;

class AuthMiddleware implements \Phalcon\Mvc\Micro\MiddlewareInterface
{

    /**
     * Calls the middleware
     *
     * @param \Phalcon\Mvc\Micro $app
     * @return bool
     */
    public function call(\Phalcon\Mvc\Micro $app)
    {
        return true;
    }
}