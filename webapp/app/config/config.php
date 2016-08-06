<?php
    defined('APP_PATH') || define('APP_PATH', realpath('.'));
    return new \Phalcon\Config([
        'database' => [
            'adapter' => 'Mysql',
            'host' => 'localhost',
            'username' => 'root',
            'password' => '123456$',
            'dbname' => 'hivietnam',
            'charset' => 'utf8',
        ],
        'application' => [
            'coreDir' => APP_PATH . '/app/core/',
            'modulesDir' => APP_PATH . '/app/modules/',
            'modelsDir' => APP_PATH . '/app/core/models/',
            'libraryDir' => APP_PATH . '/app/library/',
            'cacheDir' => APP_PATH . '/app/cache/',
            'baseUri' => '/',
        ],
        'modules' => [
            "auth",
            "index",
            "article"
        ]
    ]);
