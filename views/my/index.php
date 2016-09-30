<?php
use app\components\MyWidget;
?>

<h1>Action Index</h1>
<?= $hi ?>
<br>

<?= $id ?>
<br>

<?php foreach ($names as $name) {
    echo $name . '<br>';
}
?>

<?php MyWidget::begin()?>
<h3>Мой виджет 2</h3>
<?php MyWidget::end()?>