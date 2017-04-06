<?php

/**
 * @var $catname \app\models\BoardCat;
 * @var $boards \app\models\BoardCat;
 */
?>
<h1>board-cat/view</h1><br>

<h3 class="h3-title"><?= ($catname->name_cat); ?></h3><br><br><br>

<?php foreach ($boards as $board): ?>

    <div class="row">
        <div class="col-sm-8 f-left">
            <h5 class="h5-title"><a href="<?= \yii\helpers\Url::to(['board/view', 'id' => $board->id])?>" ><?= $board->name_cat ?></a></h5>
        </div>
    </div>
    <?= $board->description ?>
    <br>
<?php endforeach; ?>
