<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 29.09.2016
 * Time: 2:18
 */

namespace app\models;
use yii\db\ActiveRecord;

class Product extends ActiveRecord
{
    public static function tableName(){
        return 'products'; //
    }

    public function getCateories() {
        return $this->hasOne(Category::className(), ['id' => 'parent']);
    }
}