<?php
return [
    'login' => [
        'type' => 2,
    ],
    'logout' => [
        'type' => 2,
    ],
    'error' => [
        'type' => 2,
    ],
    'sign-up' => [
        'type' => 2,
    ],
    'index' => [
        'type' => 2,
    ],
    'view' => [
        'type' => 2,
    ],
    'update' => [
        'type' => 2,
    ],
    'delete' => [
        'type' => 2,
    ],
    'ad-view' => [
        'type' => 2,
    ],
    'permAdminPanel' => [
        'type' => 2,
        'description' => 'Admin panel',
    ],
    'guest' => [
        'type' => 1,
        'ruleName' => 'userGroup',
        'description' => 'Гость',
        'children' => [
            'login',
            'logout',
            'error',
            'sign-up',
            'index',
            'view',
        ],
    ],
    'BRAND' => [
        'type' => 1,
        'ruleName' => 'userGroup',
        'description' => 'Brand',
        'children' => [
            'update',
            'guest',
        ],
    ],
    'TALENT' => [
        'type' => 1,
        'ruleName' => 'userGroup',
        'description' => 'TALENT',
        'children' => [
            'update',
            'guest',
        ],
    ],
    'admin' => [
        'type' => 1,
        'ruleName' => 'userGroup',
        'description' => 'Admin',
        'children' => [
            'delete',
            'TALENT',
            'BRAND',
            'ad-view',
            'permAdminPanel',
        ],
    ],
];
