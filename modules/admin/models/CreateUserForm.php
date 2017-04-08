<?php
namespace app\modules\admin\models;


use app\modules\user\models\User;
//use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class CreateUserForm extends User
{
//    public $username;
//    public $email;
//    public $password;
//    public $group;
//    public $status;


    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            ['username', 'match', 'pattern' => '#^[\w_-]+$#i'],
            ['username', 'unique', 'targetClass' => User::className(), 'message' => 'Это имя пользователя уже используется.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'unique', 'targetClass' => User::className(), 'message' => 'Этот email адрес уже используется.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 3],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'created_at' => 'Создан',
            'updated_at' => 'Обновлён',
            'username' => 'Имя пользователя',
            'email' => 'Email',
            'password' => 'Пароль',
            'status' => 'Статус',
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if ($this->validate()) {
            $user = new User();
            $user->username = $this->username;
            $user->email = $this->email;
            $user->setPassword($this->password);
            $user->status = User::STATUS_WAIT;

            if ($user->save()) {
                return $user;
            }
        }
        return null;
    }
}