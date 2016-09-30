<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 30.09.2016
 * Time: 15:41
 */

namespace app\components;
use yii\base\Widget;

class MyWidget extends Widget {

    public $name;
    public function init(){
        parent::init();
//        if($this->name === null) $this->name = 'Гость';
        ob_start();
    }

    public function run(){
        $content = ob_get_clean();
        $content = mb_strtoupper($content);
        return $this->render('my', compact('content', 'utf-8'));
//        return "<h1>{$this->name}, привет, Мир !</h1>";
//        return $this->render('my', ['name' => $this->name]);
    }

}