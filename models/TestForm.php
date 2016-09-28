<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 28.09.2016
 * Time: 2:52
 */

namespace app\models;
use yii\base\Model;


class TestForm extends Model
{
    public $name;
    public $email;
    public $text;

    public function attributeLabels(){
        return [
            'name' => 'Имя',
            'email' => 'E-mail',
            'text' => 'Текст сообщения',
        ];
    }
    public function rules(){
        return [
            [['name', 'email'], 'required'], // 'message' => 'Поле Обязательное' - можно указать сообщение(не для всех полей)
            ['email', 'email'],
//            ['name', 'string', 'min' => 2, 'tooShort' => 'Wrong'],
//            ['name', 'string', 'max' => 5, 'tooLong' => 'Много'],
            ['name', 'string', 'length' => [2, 5], 'tooShort' => 'Wrong'],
            ['name', 'myRule'],// данная валидация будет работать только НА СЕРВЕРЕ
            ['text', 'trim'], // убирает лишние пробелы
        ];
    }
    public function myRule($attrs){
        if (!in_array($this->$attrs, ['Hello', 'World'])) {
            $this->addError($attrs, 'Имя должно быть либо "Hello" или "World"!'); //https://nix-tips.ru/yii2-api-guides/guide-ru-input-validation.html
        }
    }
}