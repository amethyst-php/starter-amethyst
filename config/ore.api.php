<?php

return [
    'router' => [
        'prefix' => 'api/v1/ore',
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
