<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 28.09.2016
 * Time: 2:52
 */

namespace app\models;
//use yii\base\Model;
use yii\db\ActiveRecord;


class TestForm extends ActiveRecord
{
//    public $name;     //Если мы указываем extends = Model нам необходио указывать свойства $name,$email,$text
//    public $email;   //Если мы работаем с ActiveRecord - свойства указывать не обязательно они будут получены из таблицы автоматич
//    public $text;

    public function attributeLabels(){
        return [
            'name' => 'Имя',
            'email' => 'E-mail',
            'text' => 'Текст сообщения',
        ];
    }
    /* ВАЛИДАЦИЯ*/
    public function rules(){
        return [
            [['name', 'email'], 'required'], // 'message' => 'Поле Обязательное' - можно указать сообщение(не для всех полей)
            ['email', 'email'],
            ['name', 'string', 'length' => [2, 5], 'tooShort' => 'Wrong'],
            ['name', 'myRule'],// данная валидация будет работать только НА СЕРВЕРЕ
            ['text', 'trim'], // убирает лишние пробелы
        ];
    }
    public function myRule($attrs){
        if (!in_array($this->$attrs, ['Hello', 'World'])) {
            $this->addError($attrs, 'Имя должно быть либо "Hello" или "World"!');
            //https://nix-tips.ru/yii2-api-guides/guide-ru-input-validation.html
        }
    }
}