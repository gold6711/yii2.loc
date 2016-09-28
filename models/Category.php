<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 29.09.2016
 * Time: 2:18
 */

namespace app\models;
use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
    public static function tableName(){
        return 'categories'; //
    }
}