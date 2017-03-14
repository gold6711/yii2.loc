<?php
namespace app\controllers;

use app\models\BoardCat;
use app\models\Board;
use yii\data\ActiveDataProvider;
use yii\data\Pagination;
use Yii;

class BoardCatController extends AppController
{

    /**
     * @var $boards BoardCat
     */
    public function actionView()
    {
        $id = Yii::$app->request->get('id');
        $boards = BoardCat::find()->where(['root_category' => $id])->all();  // => $id
        $catname = BoardCat::find()->where(['id' => $id])->one();
        return $this->render('view', compact('boards', 'catname'));
    }


    public function actionIndex()
    {
        $cats = BoardCat::find()->where(['root_category' => 0])->all();
        return $this->render('index', compact('cats'));
    }
}