<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 26.09.2016
 * Time: 0:51
 */

namespace app\controllers;
use Yii;

class PostController extends AppController
{
    public $layout = 'basic';  // устанавливаем шаблон basic для PostController (Index, Show ...)

    public function actionIndex(){
        if(Yii::$app->request->isAjax) {
            debug($_GET);
            return 'test';
        }
        return $this->render('test');
    }
    public function actionShow(){
       // $this->layout = 'basic'; // устанавливаем отдельн шаблон basic для данного экшена
        return $this->render('show');
    }
}