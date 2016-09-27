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

    public function beforeAction($action){
        if($action->id =='index'){
            $this->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);
    }

    public function actionIndex(){
        if(Yii::$app->request->isAjax) {
            debug(Yii::$app->request->post());
            //debug($_POST);
            return 'test';
        }
        $this->view->title = 'Все Статьи';
        return $this->render('test');
    }
    public function actionShow(){
       // $this->layout = 'basic'; // устанавливаем отдельн шаблон basic для данного экшена
        $this->view->title = 'Одна статья';
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'ключевики...']);
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'описание страницы...']);
        return $this->render('show');
    }
}