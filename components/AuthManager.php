<?php
namespace app\components;

use app\modules\user\models\User;
use yii\rbac\Assignment;
use yii\rbac\PhpManager;
use Yii;

class AuthManager extends PhpManager
{
    public function getAssignments($userId)
    {
        if ($userId && $user = $this->getUser($userId)) {
            $assignment = new Assignment();
            $assignment->userId = $userId;
            $assignment->roleName = $user->group;
            return [$assignment->roleName => $assignment];
        }
        return [];
    }

    /**
     * @param integer $userId
     * @return null|\yii\web\IdentityInterface|User
     */
    private function getUser($userId)
    {
        $webUser = Yii::$app->get('user', false);
        if ($webUser && !$webUser->getIsGuest() && $webUser->getId() == $userId) {
            return $webUser->getIdentity();
        } else {
            return User::findOne($userId);
        }
    }
}