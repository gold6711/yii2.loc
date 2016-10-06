<?php

namespace app\controllers;
use app\models\Category;
use app\models\Product;
use yii\web\Controller;
use Yii;

class CategoryController extends AppController{

    public function actionIndex(){
        //echo 'welcome to the site';
        $hits = Product::find()->where(['hit' => '1'])->limit(6)->all();
        //debug($hits);
        return $this->render('index', compact('hits'));
    }

}