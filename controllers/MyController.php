<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 25.09.2016
 * Time: 22:47
 */

namespace app\controllers;

//use yii\web\Controller;

class MyController extends AppController
{
    public function actionIndex($id = null) {
        $hi = 'Hello, World !';
        $names = ['Ivanov', 'Petrov', 'Sidorov'];
        if (!$id) $id = 'test';

       // return $this->render('index', ['hello' => $hi, 'names' => $names]);
        return $this->render('index', compact('hi', 'names', 'id')); // аналогичн вывод
    }
}