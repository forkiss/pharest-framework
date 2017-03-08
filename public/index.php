<?php

define('BASE_PATH', dirname(__DIR__));
define('APP_ROOT', BASE_PATH . '/app/');

/**
 * include composer autoloader
 */
require_once BASE_PATH . '/vendor/autoload.php';

$handle = new Pharest\Application(APP_ROOT . '/config/config.php');

$handle->run();