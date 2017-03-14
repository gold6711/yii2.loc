<?php
use yii\helpers\Html;

?>
<h1>board/adview</h1>

<br><br><br>

<?= $ad->title ?><br>
<br><br>
<?= $ad->text ?>
<br><br>
<?= 'ID объявления - ' .  $ad->id ?>
<br><br>
<?php //debug($photos[0]['photo_name']);?>


<?php foreach ($photos as $photo): ?>

<div class="photo" style="float: left;">
    <?= Html::img("@web/images/normal/{$photo['photo_name']}") ?>
</div>


<?php endforeach; ?>
<div class="clearfix"></div>
<br><br><br><br><br><br>


