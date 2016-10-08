<?php

namespace app\controllers;
use app\models\Category;
use app\models\Product;
use yii\web\Controller;
use Yii;

class AppController extends Controller{

    public function setMeta($title = null, $keywords = null, $description = null){
        $this->view->title = $title;
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => "$keywords"]);
        $this->view->registerMetaTag(['name' => 'description', 'content' => "$description"]);

    }

}