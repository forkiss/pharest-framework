<?php

/**
 * @var \Pharest\Application $this
 * @var \Pharest\Config      $config
 */

/**
 * Shared configuration service
 */
$this->di->setShared('config', function () use (&$config) {
    $config->datetime = date('Y-m-d H:i:s');

    return $config;
});

/**
 * Database connection is created based in the parameters defined in the configuration file
 */
$this->di->setShared('db', function () use (&$config) {
    return new \Phalcon\Db\Adapter\Pdo\Mysql([
        'host'     => $config->database->host,
        'username' => $config->database->username,
        'password' => $config->database->password,
        'dbname'   => $config->database->dbname,
        'charset'  => $config->database->charset
    ]);
});

$this->di->setShared('redis', function () use (&$config) {
    $redis = new \Redis();

    $redis->connect($config->redis->cache->host);

    $redis->auth($config->redis->cache->auth);

    $redis->setOption(2, $config->redis->cache->prefix);

    return $redis;
});