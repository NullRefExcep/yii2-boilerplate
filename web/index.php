<?php

require(__DIR__ . '/../vendor/autoload.php');

Dotenv::load(__DIR__ . '/..');
Dotenv::required(['DB_HOST', 'DB_NAME', 'DB_USER', 'DB_PASS', 'YII_DEBUG', 'YII_MAIL_USE_FILE_TRANSPORT']);

defined('YII_DEBUG') or define('YII_DEBUG', getenv('YII_DEBUG') != 'false');
defined('YII_CLI') or define('YII_CLI', false);
defined('YII_ENV') or define('YII_ENV', getenv('YII_ENV'));
defined('YII_MAIL_USE_FILE_TRANSPORT') or define('YII_MAIL_USE_FILE_TRANSPORT', getenv('YII_MAIL_USE_FILE_TRANSPORT') == 'true');

require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

$config = require(__DIR__ . '/../src/config/web.php');
(new \yii\web\Application($config))->run();
