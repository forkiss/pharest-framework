<?php

define('APP_ROOT', dirname(__DIR__));

/**
 * include composer autoloader
 */
require_once dirname(__DIR__) . '/vendor/autoload.php';

$handle = new Pharest\Application();

$handle->run();