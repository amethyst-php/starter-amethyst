<?php

return [
    'router' => [
        'prefix' => 'api',
    ],
    'http' => [
        'admin' => [
            'router' => [
                'middleware' => ['auth:api', 'admin'],
            ],
        ],
        'user' => [
            'router' => [
                'middleware' => ['auth:api'],
            ],
        ],
    ],
];
