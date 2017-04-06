<?php
namespace app\controllers;

use app\models\BoardCat;
use app\models\Board;
use yii\data\ActiveDataProvider;
use Yii;
//use yii\debug\models\timeline\DataProvider;

class BoardCatController extends AppController
{

    /**
     * @var $boards BoardCat;
     * @return string
     */
    public function actionView()
    {
        $id = Yii::$app->request->get('id');
        $boards = BoardCat::find()->where(['root_category' => $id])->all();
        $catname = BoardCat::find()->where(['id' => $id])->one();
/*        $dataProvider = new ActiveDataProvider([
            'query' => Board::find()->where(['root_category' => $id])->orderBy('date_add DESC'),
            'pagination' => [
                'pageSize' => 5,
            ],
        ]);*/
        return $this->render('view', compact('boards', 'catname'));
    }


    public function actionIndex()
    {
        $cats = BoardCat::find()->where(['root_category' => 0])->all();
        $dataProvider = new ActiveDataProvider([
        'query' => Board::find()->where(['type'=>'p'])->orderBy('date_add DESC'),
        'pagination' => [
            'pageSize' => 5,
        ],
    ]);
        return $this->render('index', compact('cats', 'dataProvider'));

    }
}