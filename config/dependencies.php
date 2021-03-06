<?php

/**
 * @var \Phalcon\Di\FactoryDefault $di
 * @var \Pharest\Application       $this
 * @var \Pharest\Config            $config
 */

/**
 * Database connection is created based in the parameters defined in the configuration file
 */
$di->setShared('db', function () use (&$config) {
    return new \Phalcon\Db\Adapter\Pdo\Mysql([
        'host'     => $config->database->host,
        'username' => $config->database->username,
        'password' => $config->database->password,
        'dbname'   => $config->database->dbname,
        'charset'  => $config->database->charset
    ]);
});

$di->setShared('redis', function () use (&$config) {
    $redis = new \Redis();

    $redis->connect($config->redis->cache->host);

    $redis->auth($config->redis->cache->auth);

    $redis->setOption(2, $config->redis->cache->prefix);

    return $redis;
});