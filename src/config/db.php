<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => getenv('DB_DRIVER') . ':host='.getenv('DB_HOST').';dbname=' . getenv('DB_NAME'),
    'username' => getenv('DB_USER'),
    'password' => getenv('DB_PASS'),
    'charset' => 'utf8',
];
