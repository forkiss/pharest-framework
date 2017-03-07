<?php

/** @var \Phalcon\Mvc\Micro\Collection $router */

// set the handler
$router->setHandler(\App\Controller\Example\IndexController::class, true);

// add url and handler function name
$router->get('/test', 'show');