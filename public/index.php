<?php

/**
 * include composer autoloader
 */
require_once dirname(__DIR__) . '/vendor/autoload.php';

$handle = new Pharest\Application(dirname(__DIR__) . '/app/config/config.php');

$handle->run();