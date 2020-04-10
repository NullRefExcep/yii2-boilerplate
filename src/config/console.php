<?php

$params = require(__DIR__ . '/params.php');
$modules = require(__DIR__ . '/modules.php');
$components = require(__DIR__ . '/components.php');
$bootstrap = require(__DIR__ . '/bootstrap.php');

return [
    'id' => 'console-app',
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
