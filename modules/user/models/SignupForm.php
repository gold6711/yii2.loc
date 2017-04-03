<?php
namespace app\modules\user\models;

use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $verifyCode;

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

            ['verifyCode', 'captcha', 'captchaAction' => '/user/default/captcha'],
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
            'verifyCode' => 'Проверочный код',
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
            $user->generateAuthKey();
            $user->generateEmailConfirmToken();

            if ($user->save()) {
                Yii::$app->mailer->compose('@app/modules/user/mails/emailConfirm', ['user' => $user])
                    ->setFrom([Yii::$app->params['adminEmail'] => Yii::$app->name])
                    ->setTo($this->email)
                    ->setSubject('Email подтверждение для ' . Yii::$app->name)
                    ->send();

//                $auth = Yii::$app->authManager;
//                $authorRole = $auth->getRole('author');
//                $auth->assign($authorRole, $user->getId());

                return $user;
            }
        }

        return null;
    }
}