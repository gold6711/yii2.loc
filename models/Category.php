<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 03.10.2016
 * Time: 22:01
 */

namespace app\models;
use yii\db\ActiveRecord;


class Category extends ActiveRecord {

    public static function tableName() {
        return  'category';
    }
    public function getProducts() {
        return $this->hasMany(Product::className(), ['category_id' => 'id']);
    }


}