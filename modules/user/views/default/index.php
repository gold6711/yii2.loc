<?php
use yii\grid\GridView;
use yii\grid\ActionColumn;
use app\modules\user\models\User;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;
use app\components\widgets\LinkColumn;
use app\components\widgets\SetColumn;
use app\components\widgets\RoleColumn;

/**
 * @var $dataProvider;
 * @var $searchModel;
 */

?>
<div class="user-default-index">
    <h1><?= $this->context->action->uniqueId ?></h1>
    <p>
        This is the view content for action "<?= $this->context->action->id ?>".
        The action belongs to the controller "<?= get_class($this->context) ?>"
        in the "<?= $this->context->module->id ?>" module.
    </p>
    <p>
        You may customize this page by editing the following file:<br>
        <code><?= __FILE__ ?></code>
    </p>
</div>
<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [

        'id',
        [
            'filter' => DatePicker::widget([
                'model' => $searchModel,
                'attribute' => 'date_from',
                'attribute2' => 'date_to',
                'type' => DatePicker::TYPE_RANGE,
                'separator' => '-',
                'pluginOptions' => ['format' => 'yyyy-mm-dd']
            ]),
            'attribute' => 'created_at',
            'format' => 'datetime',
        ],
        [
            'class' => LinkColumn::className(),
            'attribute' => 'username',
        ],
        'email:email',
        [
            'class' => SetColumn::className(),
            'filter' => User::getStatusesArray(),
            'attribute' => 'status',
            'name' => 'statusName',
            'cssCLasses' => [
                User::STATUS_ACTIVE => 'success',
                User::STATUS_WAIT => 'warning',
                User::STATUS_BLOCKED => 'default',
            ],
        ],
        [
            'class' => RoleColumn::className(),
            'filter' => ArrayHelper::map(Yii::$app->authManager->getRoles(), 'name', 'description'),
            'attribute' => 'group',
        ],

        ['class' => ActionColumn::className()],
    ],
]); ?>