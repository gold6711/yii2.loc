<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>

<div class="news-item">
    <h4 class="h4-title"><?= Html::encode($model->title) ?></h4>
    <?= HtmlPurifier::process($model->text) ?>
</div>