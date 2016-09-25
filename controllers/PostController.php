<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 26.09.2016
 * Time: 0:51
 */

namespace app\controllers;
use Yii;

class PostController extends AppController
{
    public function actionTest(){

        $names = ['Ivanov', 'Petrov', 'Sidorov'];

//        print_r($names);   //пробная распечатка массива
//        var_dump($names);  //пробная распечатка массива
//        var_dump(Yii::$app);
//        $this->debug(Yii::$app); // в метод debug() в AppController необход добв второй параметр - true ($arr, true)

//        $this->debug($names);
       return $this->render('test');
    }
}