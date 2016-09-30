<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 28.09.2016
 * Time: 2:52
 */

namespace app\models;
use yii\db\ActiveRecord;


class TestForm extends ActiveRecord
{
    public static function tableName() {
        return 'posts';
    }

    public function attributeLabels(){
        return [
            'name' => 'Имя',
            'email' => 'E-mail',
            'text' => 'Текст сообщения',
        ];
    }

    public function rules(){
        return [
            [['name', 'text'], 'required'],
            ['email', 'email'],
        ];
    }

}