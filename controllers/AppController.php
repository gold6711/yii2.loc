<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 26.09.2016
 * Time: 0:44
 */

namespace app\controllers;

use yii\web\Controller;

class AppController extends Controller
{
    public function debug($arr){
        echo '<pre>' . print_r($arr, true) . '</pre>';
    }
}
/*функция перенесена в файл ФУНКЦИЙ functions.php (файл общих функций)*/
//function debug($arr){
//    echo '<pre>' . print_r($arr, true) . '</pre>';
//}