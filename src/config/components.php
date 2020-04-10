<?php
/**
 * @author    Dmytro Karpovych
 * @copyright 2020 NRE
 */
return [
    'db' => require(__DIR__ . '/db.php'),
    'i18n' => [
        'translations' => [
            '*' => ['class' => 'yii\i18n\PhpMessageSource'],
        ],
    ],
    'cache' => getenv('REDIS_CACHE_HOST') ? [
        'class' => 'yii\redis\Cache',
        'redis' => [
            'hostname' => getenv('REDIS_CACHE_HOST'),
            'port' => 6379,
            'database' => getenv('REDIS_CACHE_DB') ? getenv('REDIS_CACHE_DB') : 0,
        ],
    ] : [
        'class' => 'yii\caching\FileCache',
    ],
    'mailer' => [
        'class' => 'yii\swiftmailer\Mailer',
        'useFileTransport' => YII_MAIL_USE_FILE_TRANSPORT,
        'transport' => [
            'class' => 'Swift_SmtpTransport',
            'host' => getenv('MAIL_HOST'),
            'username' => getenv('MAIL_USERNAME'),
            'password' => getenv('MAIL_PASSWORD'),
            'port' => '465',
            'encryption' => 'ssl',
        ],
    ],
    'urlManager' => [
        'enablePrettyUrl' => true,
        'showScriptName' => false,
    ],
];
