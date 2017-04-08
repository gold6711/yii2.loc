<?php
namespace app\controllers;

use app\models\BoardCat;
use app\models\Board;
use yii\data\Pagination;
use Yii;

class BoardCatController extends AppController
{

    /**
     * @var $boards BoardCat;
     * @return string
     */
    public function actionView()
    {
        $id = Yii::$app->request->get('id');
        $boards = BoardCat::find()->where(['root_category' => $id])->orderBy('name_cat')->all();
        $catname = BoardCat::find()->where(['id' => $id])->one();

        return $this->render('view', compact('boards', 'catname'));
    }


    public function actionIndex()
    {
        $cats = BoardCat::find()->where(['root_category' => 0])->all();
        $query = Board::find()->where(['type'=>'p'])->orderBy('date_add DESC');
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 5, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $ads = $query->offset($pages->offset)->limit($pages->limit)->all();

        return $this->render('index', compact('cats', 'pages', 'ads'));

    }
}