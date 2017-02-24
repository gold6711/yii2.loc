<?php
namespace app\controllers;

use app\models\BoardCat;
use app\models\Board;
use Yii;

class BoardController extends AppController
{
    public function actionView()
    {
        $id = Yii::$app->request->get('id');
        $ads = Board::find()->where(['id_category' => $id])->all(); // выводим все объявлен по номеру категории
        return $this->render('view', compact('ads'));
    }





//public function actionIndex(){
//
//    $model = new Board;
//    $model->id_category = 181;
//    $model->autor = 'Вася';
//    $model->title = 'Продаю Машину - Ласточка';
//    $model->email = 'gold@gold.com';
//    $model->text = 'Продаю машину марки - <h1>Дрезина</h1>';
//    $model->save();
//    }
}