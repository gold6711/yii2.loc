<?php
namespace app\controllers;

use app\models\BoardCat;
use app\models\Photo;
use app\models\Board;
use Yii;
use yii\data\Pagination;
use yii\web\ForbiddenHttpException;

class BoardController extends AppController
{
    public function actionView()
    {
        $id = Yii::$app->request->get('id');
        $boards = BoardCat::find()->where(['root_category' => $id])->all();
        $query = Board::find()->where(['id_category' => $id])->orderBy('date_add DESC');
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $ads = $query->offset($pages->offset)->limit($pages->limit)->all();
        $boardname = BoardCat::find()->where(['id' => $id])->one();

        return $this->render('view', compact('boards', 'ads', 'pages', 'boardname'));
    }

    public function actionAdView()
    {
        if (!\Yii::$app->user->can('ad-view')) {
            throw new ForbiddenHttpException('Access denied');
        }
        $id = Yii::$app->request->get('id');
        $ad = Board::find()->where(['id' => $id])->one();
        $photos = Photo::find()->where(['id_message' => $id])->all();

        return $this->render('adview', compact('ad', 'photos'));
    }

}