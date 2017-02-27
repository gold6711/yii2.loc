<?php
use yii\helpers\Html;
?>
<h1>board-cat/view</h1>
<?php //debug($boards)?>
<?php foreach ($boards as $board): ?>

    <div class="row">
        <div class="col-sm-8 f-left">
            <h5 class="h5-title"><a href="<?= \yii\helpers\Url::to(['board/view', 'id' => $board->id])?>" ><?= $board->name_cat ?></a></h5>
        </div>
    </div>
    <?= $board->description ?>
    <br>
<?php endforeach; ?>
