<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

?>
<h1>board/view</h1>
<?php if (!empty($ads)): ?>
    <?php foreach ($ads as $ad): ?>
        <div class="row">
            <div class="col-sm-8 f-left">
                <a href="<?= \yii\helpers\Url::to(['board/ad-view', 'id' => $ad->id]) ?>"><?= $ad->title ?></a>
            </div>
        </div>
        <?= $ad->text ?>
        <br><br><br>
    <?php endforeach; ?>
    <div class="clearfix"></div>
    <?php
    echo LinkPager::widget([
        'pagination' => $pages,
    ]);
    ?>
<?php else : ?>
    <h3 class="h3-title">Здесь объявлений пока нет</h3>
    <br><br><br>
<?php endif; ?>

