<?php
use yii\helpers\Html;

?>
<h1>board/view</h1>
<?php foreach ($ads as $ad): ?>

    <div class="row">
        <div class="col-sm-8 f-left">
            <a href="<?= \yii\helpers\Url::to(['board/adview', 'id' => $ad->id])?>" ><?= $ad->title ?></a>
        </div>
    </div>
    <?= $ad->text ?>
    <br><br><br>
<?php endforeach; ?>


