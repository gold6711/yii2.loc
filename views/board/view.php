<?php
use yii\helpers\Html;

?>
<h1>board/index</h1>
<?php //debug($boards)?>
<?php foreach ($boards as $board): ?>

    <h3><?= $board->name_cat ?></h3>
    <div class="row">
        <div class="col-sm-8 f-left">
            <?= $board->title_cat ?>
        </div>
    </div>


    <!--<h5>--><?//= $board->price ?><!--</h5>-->
    <!--<h5>--><?//= $board->city ?><!--</h5>-->

    <?php //$i++;?>
<?php endforeach; ?>


