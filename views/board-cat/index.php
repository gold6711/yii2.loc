<?php
use yii\helpers\Html;
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
                        <h3><a href="<?= \yii\helpers\Url::to(['board-cat/view', 'id' => $cat->id])?>" ><?= $cat->name_cat ?></a></h3>
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

