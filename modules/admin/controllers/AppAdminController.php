<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 18.10.2016
 * Time: 21:57
 */

namespace app\modules\admin\controllers;
use yii\web\Controller;
use yii\filters\AccessControl;


class AppAdminController extends Controller {

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['login', 'logout', 'signup'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['login', 'signup'],
                        'roles' => ['?'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['logout'],
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }
    // ...


}