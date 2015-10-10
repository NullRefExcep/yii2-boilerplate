<?php

$params = require(__DIR__ . '/params.php');
$modules = require(__DIR__ . '/modules.php');

Yii::setAlias('@webroot', dirname(dirname(__DIR__)) . '/web');

return [
    'id' => 'console-app',
    'basePath' => dirname(__DIR__),
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'runtimePath' => dirname(dirname(__DIR__)) . '/runtime',
    'bootstrap' => ['log', 'core'],
    'modules' => $modules,
    'params' => $params,
    'components' => [
        'db' => require(__DIR__ . '/db.php'),
    ]
];
