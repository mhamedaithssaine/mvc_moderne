<?php
return [
    'db' => [
        'host' => getenv('DB_HOST'),
        'port' => getenv('DB_PORT'),
        'name' => getenv('DB_NAME'),
        'user' => getenv('DB_USERNAME'),
        'pass' => getenv('DB_PASSWORD'),
    ],
];