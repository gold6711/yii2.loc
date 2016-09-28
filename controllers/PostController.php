<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 26.09.2016
 * Time: 0:51
 */

namespace app\controllers;
use app\models\Category;
use Yii;
use app\models\TestForm;

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
        $model = new TestForm();
        if($model->load(Yii::$app->request->post()) ){
//            debug($model);
//            die;
            if($model->validate() ){
                Yii::$app->session->setFlash('success', 'Данные приняты');
                return $this->refresh(); // перезапросить текущую страницу (избежать запроса на повтрную отправку данных)
            }else{
                Yii::$app->session->setFlash('error', 'Сообщение об ошибке');
            }
        }


        $this->view->title = 'Все Статьи';
        return $this->render('test', compact('model'));
    }
    public function actionShow(){
       // $this->layout = 'basic'; // устанавливаем отдельн шаблон basic для данного экшена
        $this->view->title = 'Одна статья';
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'ключевики...']);
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'описание страницы...']);

        $cats = Category::find()->all();

        return $this->render('show', compact('cats'));
    }
}