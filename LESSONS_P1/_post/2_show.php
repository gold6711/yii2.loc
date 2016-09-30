<?php $this->beginBlock('block1'); ?>
    <h2><b>Заголовок Блока 1</b></h2>
<?php $this->endBlock(); ?>

<h1>Show Action</h1>
<?php //debug($cats) ?>
<?//= count($cats[0]->products) ?>
<?php //debug($cats) ?>

<?php
    foreach($cats as $cat) {
        echo '<ul>';
            echo '<li>' . $cat->title . '</li>';
        $products = $cat->products;
            foreach($products as $product) {
                echo '<ul>';
                    echo '<li>' . $product->title . '</li>';
                echo '</ul>';
            }
        echo '</ul>';
    }
?>

<button class="btn btn-success" id="btn">Click me...</button><br /><br />

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
