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

    public function actionView(){              // можно получить id так -> public function actionView($id)
        $id = Yii::$app->request->get('id');  // id в этом случае получается из массива routs->'rules' (conf/web.php)
        $product = Product::findOne($id);     //  'rules' => [    'category/<id:\d+>' (less 13 - 03:00)
        if(empty($product))
            throw new \yii\web\HttpException(404, 'Такого товара нет');
        //$product = Product::find()->with('category')->where(['id' => $id])->limit(1)->one(); // возможны оба варианта
        $hits = Product::find()->where(['hit' => '1'])->limit(5)->all();
        $this->setMeta('E-SHOPPER | '. $product->name, $product->keywords, $product->description);
        return $this->render('view', compact('product', 'hits'));
    }

}