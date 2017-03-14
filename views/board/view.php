<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;


?>
<h1>board/view</h1>
<?php //debug($boardname)?>
<h3 class="h3-title"><?= ($boardname->name_cat); ?></h3><br><br><br>

<?php if (!empty($ads)): ?>
    <?php foreach ($ads as $ad): ?>
        <div class="row">
            <div class="col-sm-8 f-left">
                <h5 class="h5-title" style="color: green"><a href="<?= \yii\helpers\Url::to(['board/ad-view', 'id' => $ad->id]) ?>"><?= $ad->title ?></a></h5>
            </div>
        </div>
        <?= $ad->text ?>
        <br>
        <h6 class="h6-title" style="color: green">Дата подачи объявления - <?= $ad->date_add ?></h6>
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



