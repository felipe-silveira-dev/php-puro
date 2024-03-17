<?php

return [
    'database' => [
        'database' => 'mysql',
        'host' => '127.0.0.1',
        'port' => '3306',
        'dbname' => 'myapp',
        'charset' => 'utf8',
    ],

    'services' => [
        'mail' => [
            'host' => 'smtp.mailtrap.io',
            'port' => '2525',
            'username' => 'your-username',
            'password' => 'your-password',
        ],
        'stripe' => [
            'secret' => 'your-secret',
            'token' => 'your-token',
        ],
    ],
];