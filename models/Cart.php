<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 14.10.2016
 * Time: 2:12
 */

namespace app\models;
use yii\db\ActiveRecord;

class Cart extends ActiveRecord {

    public function addToCart($product, $qty = 1){
        echo 'Все работает';
    }

}