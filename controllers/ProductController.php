<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12.10.2016
 * Time: 1:44
 */

namespace app\controllers;
use app\models\Category;
use app\models\Product;
use Yii;


class ProductController extends AppController {
    public function actionView($id){
        $id = Yii::$app->request->get('id');
        $product = Product::findOne($id);
        //$product = Product::find()->with('category')->where(['id' => $id])->limit(1)->one(); // возможны оба варианта
        return $this->render('view', compact('product'));
    }

}