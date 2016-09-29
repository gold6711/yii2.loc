<?php
//$this->title = 'Одна статья'; // добавление title в вид файле страницы (1-й вариант)
//?>

<?php $this->beginBlock('block1'); ?>
    <h2><b>Заголовок Блока 1</b></h2>
<?php $this->endBlock(); ?>

<h1>Show Action</h1>
<?php //foreach($cats as $cat) {
//    echo $cat->title . '<br>';
//}
//?>
<?php debug($cats) ?>

<button class="btn btn-success" id="btn">Click me...</button><br /><br />

<?php //$this->registerJsFile('@web/js/scripts.js', ['depends' => 'yii\web\YiiAsset']) ?>

<?php// $this->registerJs("$('.container').append('<p>SHOW MUST GO ON</p>');", \yii\web\View::POS_LOAD)

/* первый метод (закоментирован) = передача пути к файлу script.js и зависимости данного кода от библ jQuery */
/* во втором методе мы подключаем данный код на прямю в файле (исп когда кода*/ ?>

<?php// $this->registerCss('.container{background : #ccc;}' )?>

<?php

$js = <<<JS
    $('#btn').on('clik', function(){
        $.ajax({
        url: '/index.php?r=post/index',
        data: {test: '123'},
        type: 'POST',
        succsess: function(res){
            console.log(res);
        },
        error: function(){
            alert('Error!');
        }
        });
    });
JS;

$this->registerJs($js);

?>
