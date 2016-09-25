<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 25.09.2016
 * Time: 23:57
 */

namespace app\controllers\admin;

use app\controllers\AppController;

class UserController extends AppController
{
    public function actionIndex(){
        return $this->render('index');
    }
}