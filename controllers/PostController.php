<?php

namespace app\controllers;
use app\models\BoardCat;
use Yii;
use app\models\TestForm;

class PostController extends AppController
{
    public $layout = 'main';  // шаблон basic для PostController (Index, Show ...)

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

        $model = new TestForm();
        if($model->load(Yii::$app->request->post()) ){
            if($model->save() ){
                Yii::$app->session->setFlash('success', 'Данные приняты');
                return $this->refresh();
            }else{
                Yii::$app->session->setFlash('error', 'Сообщение об ошибке');
            }
        }


        $this->view->title = 'Все Статьи';
        return $this->render('test', compact('model'));
    }
    public function actionShow(){
        $this->view->title = 'Одна статья';
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'ключевики...']);
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'описание страницы...']);

        //$cat = BoardCat::find()->all(); //отложенная загрузка

        $cat = BoardCat::find('child_category')->all();     //метод ->with (ключ связи) добавляет "ЖАДНУЮ" загрузку
        //(кот. уменьшает кол во запросов к базе
        //(с 41 до 6 запр в нашем примере))
        return $this->render('show', compact('cat'));
    }
}