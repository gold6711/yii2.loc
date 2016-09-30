<?php
use app\components\MyWidget;
?>

<?php $this->beginBlock('block1'); ?>
    <h2><b>Заголовок Блока 1</b></h2>
<?php $this->endBlock(); ?>

<h1>Show Action</h1>

<?php //echo MyWidget::widget(); ?>
<?php //echo MyWidget::widget(['name' => 'Вася']); ?>

<?php MyWidget::begin()?>
    <h3>Мой виджет 2</h3>
<?php MyWidget::end()?>

<button class="btn btn-success" id="btn">Click me...</button><br /><br />

