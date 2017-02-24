<?php
use yii\helpers\Html;

?>
<h1>board/adview</h1>

<br><br><br>

<?= $ad->title ?><br>
<br><br>
<?= $ad->text ?>

<br><br><br><br><br><br>



<!---->
<?php //foreach ($ads as $ad): ?>
<!---->
<!--    <div class="row">-->
<!--        <div class="col-sm-8 f-left">-->
<!--            <a href="--><?//= \yii\helpers\Url::to(['board/adview', 'id' => $ad->id])?><!--" >--><?//= $ad->title ?><!--</a>-->
<!--        </div>-->
<!--    </div>-->
<!--    --><?//= $ad->text ?>
<!--    <br><br><br>-->
<?php //endforeach; ?>
