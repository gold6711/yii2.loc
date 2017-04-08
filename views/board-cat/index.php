<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

//$this->title = 'My Yii Application';
?>

<section id="service" class="">
    <div id="my-container" class="container">
        <div class="row">
            <?php $i = 0; foreach ($cats as $cat): ?>
                <div id="r" class="col-md-3">
                    <div class="service-box">
                        <div class="icon">
                            <h3><a href="<?= \yii\helpers\Url::to(['board-cat/view', 'id' => $cat->id])?>" ><?= Html::img("/web/icons/{$cat->img}", ['alt' => $cat->name_cat])?></a></h3>
                        </div>
                        <h3 class="h3-title"><a href="<?= \yii\helpers\Url::to(['board-cat/view', 'id' => $cat->id])?>" ><?= $cat->name_cat ?></a></h3>
                        <p>Consectetuer adipiscing elit, sed</p>
                    </div>
                    <!-- end: Box -->
                </div>
                <?php $i++;?>
                <?php if ($i % 4 == 0): ?>
                    <div class="clearfix"></div>
                <?php endif;?>
            <?php endforeach; ?>

        </div>
    </div>
</section>
<br><br>
    <h3 class="h3-title">Последние объяления</h3>
<br><br>
<?php if (!empty($ads)): ?>
<?php foreach ($ads as $ad): ?>
    <div class="row">
        <div class="col-sm-8 f-left">
            <h5 class="h5-title" style="color: green"><a
                    href="<?=\yii\helpers\Url::to(['board/ad-view', 'id' => $ad->id])?>"><?=$ad->title?></a>
            </h5>
        </div>
    </div>
    <?=$ad->text?>
    <br>
    <h6 class="h6-title" style="color: green">Дата подачи объявления - <?=$ad->date_add?></h6>
    <br><br><br>
<?php endforeach; ?>
<div class="clearfix"></div>
    <?php
    echo LinkPager::widget([
        'pagination' => $pages,
        'maxButtonCount' => 5,
    ]);
    ?>
<?php else : ?>
    <h3 class="h3-title">Здесь объявлений пока нет</h3>
    <br><br><br>
<?php endif; ?>