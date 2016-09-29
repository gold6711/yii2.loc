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
            [['name', 'text'], 'required'], // ВАЖНО ! - не описанный(не упомянутый) в правилах валидации атрибут
            ['email', 'email'],            // НЕ БУДЕТ ЗАГРУЖЕН в Автоматическом (не в ручн) режиме загрузки
        ];                                // можно использовать правило 'safe' (не на что не влияет) делает поле безопастным
    }

}