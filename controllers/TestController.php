<?php

namespace app\controllers;
use Yii;


class TestController extends AppController{

public function actionMytest(){

    $this->view->title = 'Тестовая страница';
    $arr = [3, 1, 8, 5, 4, 15];

    $arr2 = [];

    $length = count($arr);

    while ($length) {
        foreach ($arr as $k => $v) {
            if ($v == min($arr)) {
                $arr2[] = $v;
                unset($arr[$k]); // удалили элемент
                $length--; // уменьшаем число элементов на единицу
                break; // выходим из цикла foreach для новой проверки length в цикле while
            }
        }
    }

    return $this->render('mytest', compact('arr2'));

}

}