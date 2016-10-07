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

    public function actionView($id){
        $id = Yii::$app->request->get('id');
        //debug($id);
        $products = Product::find()->where(['category_id' => $id])->limit(5)->all();
        return $this->render('view', compact('products'));
    }

}