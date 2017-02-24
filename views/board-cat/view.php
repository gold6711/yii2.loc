<?php
use yii\helpers\Html;
?>
<h1>board-cat/view</h1>
<?php //debug($boards)?>
<?php foreach ($boards as $board): ?>

    <div class="row">
        <div class="col-sm-8 f-left">
            <a href="<?= \yii\helpers\Url::to(['board/view', 'id' => $board->id])?>" ><?= $board->name_cat ?></a>
        </div>
    </div>
    <h5><?= $board->description ?></h5>
    <br>
<?php endforeach; ?>
