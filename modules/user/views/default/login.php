<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\modules\user\models\LoginForm */

$this->title = 'Войти';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-default-login">
    <h3 class="h3-title"><?= Html::encode($this->title) ?></h3><br>

    <h6 class="h6-title">Пожалуйста введите Имя пользователя и Пароль:</h6><br>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
            <?= $form->field($model, 'username')->label('Имя пользователя'); ?>
            <?= $form->field($model, 'password')->passwordInput()->label('Пароль'); ?>
            <?= $form->field($model, 'rememberMe')->checkbox()->label('Запомнить меня'); ?>
            <div style="color:#999;margin:1em 0">
                Если Вы забыли свой пароль Вы можете  <?= Html::a('сбросить пароль', ['password-reset-request']) ?>.
            </div>
            <div class="form-group">
                <?= Html::submitButton('Войти', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>