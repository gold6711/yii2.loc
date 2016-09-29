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

    //    $cats = Category::find()->all();
    //    $cats = Category::find()->orderBy(['id' => SORT_DESC])->all();
    //    $cats = Category::find()->asArray()->all();// обращение к массиву (экономит(паиять кол во запросов), в этом случ
                                                   // обращаемся НЕ $cat->title; a - $cat['title'];
    //    $cats = Category::find()->asArray()->where('parent=691')->all();
    //    $cats = Category::find()->asArray()->where(['parent'=> 691])->all();
    //    $cats = Category::find()->asArray()->where(['like', 'title', 'pp'])->all();//все где в поле title встречаются две P подряд
    //    $cats = Category::find()->asArray()->where(['<=', 'id', 695])->all();// где поле id меньше или равно 695
    //    $cats = Category::find()->asArray()->where('parent=691')->limit(1)->all(); //или использовать ->one() (limit лучше указывать, избежать избыточности запроса)
    //    $cats = Category::find()->asArray()->where('parent=691')->count(); //просто подсчитать, есть и ряд других методов
    //    $cats = Category::findOne(['parent' => 691]); // не работает для вывода asArray(), limit() не работает
    //    $cats = Category::findAll(['parent' => 691]); //параметр ['parent' => 691] ОБЯЗАТЕЛЕН, limit() не работает
    //    $query = "SELECT * FROM categories WHERE title LIKE '%pp%'"; // для сложн запросов (не укладыв в имеющиеся методы)
                                                                       // данный конкретн метод НЕ безопасен (SQL инъекции) запрос прих от пользователя
    //    $cats = Category::findBySql($query)->all();

        $query = "SELECT * FROM categories WHERE title LIKE :search";    // безопаснее указать параметр напр. search
        $cats = Category::findBySql($query, [':search' => '%pp%'])->all(); // пример безопасного указания "параметра" в запросе


        return $this->render('show', compact('cats'));
    }
}