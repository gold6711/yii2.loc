<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language' => 'ru-Ru',
    'defaultRoute' => 'category/index',
    'modules' => [
        'admin' => [
            'class' => 'app\modules\admin\Module',
            'layout' => 'admin',
            //'defaultRoute' => 'default/index',
        ],
        'user' => [
            'class' => 'app\modules\user\Module',

        ],
        'yii2images' => [
            'class' => 'rico\yii2images\Module',
            //be sure, that permissions ok
            //if you cant avoid permission errors you have to create "images" folder in web root manually and set 777 permissions
            'imagesStorePath' => 'upload/store', //path to origin images
            'imagesCachePath' => 'upload/cache', //path to resized copies
            'graphicsLibrary' => 'GD', //but really its better to use 'Imagick'
            'placeHolderPath' => '@webroot/upload/store/no-image.png', // get placeholder when image not exists, string will be processed by Yii::getAlias
        ],
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'Euk_iMoCUXXRFhVYOnRhv07DDXrxMQWm',
            'baseUrl' => '',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\modules\user\models\User',
            'enableAutoLogin' => true,
            //'loginUrl' => ['site/login'],
        ],
        'authManager' => [
            'class' => 'app\components\AuthManager',
            'defaultRoles' => ['admin', 'BRAND', 'TALENT', 'guest'], // Здесь нет роли "guest", т.к. эта роль виртуальная
                                                            // и не присутствует в модели UserExt
        ],
        'authClientCollection' => [
            'class'   => 'yii\authclient\Collection',
            'clients' => [
                'vkontakte' => [
                    'class'        => 'yii\authclient\clients\VKontakte',
                    'clientId'     => '5949824',
                    'clientSecret' => 'a244fsNpZbJVKvxsLvTU',
                ],
                'google'    => [
                    'class'        => 'yii\authclient\clients\Google',
                    'clientId'     => '770797571927-2qq5sa998bf6ge6lqrsibnbeglr0k7d4.apps.googleusercontent.com',
                    'clientSecret' => 'cMPzkSiZBQ831sgEqNVN4hct',
                ],
//                'twitter' => [
//                    'class' => 'yii\authclient\clients\Twitter',
//                    'clientId' => '123',
//                    'clientSecret' => '321',
//                ],
                'facebook'  => [
                    'class'        => 'yii\authclient\clients\Facebook',
                    'clientId'     => '1749702392026709',
                    'clientSecret' => '90417719b84c6c7b6688d995b970f847',
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false, //для реальной отправки письма выставить в false
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.gmail.com',
                'username' => 'stefanj955@gmail.com',
                'password' => 'kolopoid',
                'port' => '465',
                'encryption' => 'ssl',
            ],
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '/' => 'board-cat/index',
                'board/<id:\d+>/page/<page:\d+>' => 'board/view',
                'board/<id:\d+>' => 'board/view',
                'board-cat/<id:\d+>/page/<page:\d+>' => 'board-cat/view',
                'board-cat/<id:\d+>' => 'board-cat/view',
                'category/<id:\d+>/page/<page:\d+>' => 'category/view',
                'category/<id:\d+>' => 'category/view',
                'product/<id:\d+>' => 'product/view',
                'search' => 'category/search',
                'site/login' => 'user/default/login',
            ],
        ],

    ],
    'controllerMap' => [
        'elfinder' => [
            'class' => 'mihaildev\elfinder\PathController',
            'access' => ['@'],
            'root' => [
                'baseUrl' => '/web',
                'path' => 'upload/global',
                'name' => 'Global'
            ],
        ]
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
