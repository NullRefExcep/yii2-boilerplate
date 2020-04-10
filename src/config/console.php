<?php

$params = require(__DIR__ . '/params.php');
$modules = require(__DIR__ . '/modules.php');
$components = require(__DIR__ . '/components.php');
$bootstrap = require(__DIR__ . '/bootstrap.php');

return [
    'id' => getenv('APP_ID') ? getenv('APP_ID') . '-cli' : 'app-cli',
    'name' => getenv('APP_NAME') ? getenv('APP_NAME') . '-CLI' : 'ApplicationCLI',
    'language' => getenv('APP_LANGUAGE'),
    'basePath' => dirname(__DIR__),
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'runtimePath' => dirname(dirname(__DIR__)) . '/runtime',
    'bootstrap' => array_merge($bootstrap, []),
    'modules' => $modules,
    'params' => $params,
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
        '@webroot' => dirname(dirname(__DIR__)) . '/web',
    ],
    'components' => array_merge($components, [

    ]),
];
