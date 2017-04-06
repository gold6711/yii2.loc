<?php
namespace app\rbac;

use Yii;
use yii\rbac\Rule;

class UserGroupRule extends Rule
//правило на проверку принадлежности к роли у пользователя
{
    public $name = 'userGroup';

    public function execute($user, $item, $params)
    {
        if (!\Yii::$app->user->isGuest) {
            $group = \Yii::$app->user->identity->group;
            if ($item->name === 'admin') {
                return $group == 'admin';
            } elseif ($item->name === 'BRAND') {
                return $group == 'admin' || $group == 'BRAND';
            } elseif ($item->name === 'TALENT') {
                return $group == 'admin' || $group == 'TALENT';
            }
        }
        return true;
    }
}