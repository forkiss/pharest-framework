<?php

namespace App\Middleware;

class AuthMiddleware implements \Pharest\Middleware\Immediately
{

    /**
     * Calls the middleware
     *
     * @param \Phalcon\Mvc\Micro $app
     * @return bool
     */
    public function call(\Phalcon\Mvc\Micro &$app)
    {
        return true;
    }

}