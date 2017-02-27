<?php
namespace app\controllers;

use app\models\BoardCat;
use app\models\Board;
use yii\data\ActiveDataProvider;
use yii\data\Pagination;
use Yii;

class BoardCatController extends AppController
{

    public function actionView()
    {

        $id = Yii::$app->request->get('id');
        $boards = BoardCat::find()->where(['root_category' => $id])->all();  // => $id
        return $this->render('view', compact('boards'));
    }


    public function actionIndex()
    {

        $cats = BoardCat::find()->where(['root_category' => 0])->all();

        return $this->render('index', compact('cats'));
    }
}