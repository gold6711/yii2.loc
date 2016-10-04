<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 03.10.2016
 * Time: 22:16
 */

namespace app\models;
use yii\db\ActiveRecord;


class Product extends ActiveRecord {

    public static function tableName() {
        return  'product';
    }
    public function getCategory() {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }


}