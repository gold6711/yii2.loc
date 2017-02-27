<?php
namespace app\controllers;

use app\models\BoardCat;
use app\models\Board;
use Yii;
use yii\data\Pagination;

class BoardController extends AppController
{
    public function actionView()
    {
        $id = Yii::$app->request->get('id');
        $query = Board::find()->where(['id_category' => $id])->orderBy('date_add DESC');
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $ads = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('view', compact('ads', 'pages'));
    }

    public function actionAdView()
    {
        $id = Yii::$app->request->get('id');
        $ad = Board::find()->where(['id' => $id])->one();
        return $this->render('adview', compact('ad'));
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