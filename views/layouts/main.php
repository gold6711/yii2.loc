<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\ltAppAsset;

AppAsset::register($this);
ltAppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body id="home-5">
<?php $this->beginBody() ?>
<div id="entire">
    <div class="loader"></div>
    <div class="top-bar clearfix">
        <div class="container">
            <div class="fl top-social-icons">
                <ul class="clearfix">
                    <li><a href="#" class="fb-icon ln-tr"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="tw-icon ln-tr"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="gp-icon ln-tr"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" class="pn-icon ln-tr"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="#" class="vm-icon ln-tr"><i class="fa fa-vimeo-square"></i></a></li>
                    <li><a href="#" class="in-icon ln-tr"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" class="yt-icon ln-tr"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#" class="yt-icon ln-tr"><i class="fa fa-youtube-play"></i></a></li>
                    <li><a href="#" class="rss-icon ln-tr"><i class="fa fa-rss"></i></a></li>
                </ul>
            </div><!-- End Social Container -->
            <div class="fr top-contact">
                <ul class="clearfix">
                    <li class="fl"><i class="fa fa-phone"></i><span class="text">Горячая линия: 111-111-111</span></li>
                    <li class="fl divider"><span>&#124;</span></li>
                    <li class="fl"><i class="fa fa-envelope"></i><span class="text">Email: <a href="mailto:your@gmail.com">your@gmail.com</a></span></li>
                </ul>
            </div><!-- End Top Contact -->
        </div>
    </div><!-- End Tob Bar -->
    <header class="alt">
        <div class="container">
<!--            --><?php //debug(Yii::$app->user) ?>
            <div class="logo-container fl clearfix">
                <a href="/" class="ib">
                    <img src="/web/images/logo@2x.png" class="fl" alt="Logo">
                    <span class="site-name">Oglasi<span>*</span></span>
                </a>
            </div><!-- End Logo Container -->
            <nav class="main-navigation fr">
                <ul class="clearfix">
                    <li class="parent-item haschild current_page_item">
                        <a href="/" class="ln-tr">Главная</a>
                    </li>
                    <li class="parent-item haschild">
                        <?php if (Yii::$app->user->isGuest){ ?>
                        <a href="<?= \yii\helpers\Url::to(['/admin']) ?>" class="ln-tr">Войти</a>
                            <?php } else { ?>
                            <a href="<?= \yii\helpers\Url::to(['site/logout']) ?>" class="ln-tr">Выйти</a>
                        <?php } ?>
                    </li>
                    <li class="parent-item haschild">
                        <a href="#" class="ln-tr">Персонал</a>
                        <ul class="submenu">
                            <li class="sub-item"><a href="#" class="ln-tr">Агенты</a></li>
                        </ul>
                    </li>
                    <li class="parent-item haschild">
                        <a href="#" class="ln-tr">Информация</a>
                        <ul class="submenu">
                            <li class="sub-item">
                                <a href="#" class="ln-tr">Проекты</a>
                            </li>
                            <li class="sub-item"><a href="#" class="ln-tr">Описание проекта</a></li>
                            <li class="sub-item"><a href="#" class="ln-tr">Фото</a></li>
                        </ul>
                    </li>
                    <li class="parent-item">
                        <a href="#" class="ln-tr">О нас</a>
                    </li>
                    <li class="parent-item haschild">
                        <a href="#0" class="ln-tr">Новости</a>
                        <ul class="submenu">
                            <li class="sub-item">
                                <a href="#" class="ln-tr">Список новостей</a>
                            </li>
                            <li class="sub-item">
                                <a href="#" class="ln-tr">Новость</a>
                            </li>
                            <li class="sub-item">
                                <a href="#" class="ln-tr">Категории</a>
                            </li>
                        </ul>
                    </li>
                    <li class="parent-item">
                        <a href="#" class="ln-tr">Контакты</a>
                    </li>
                    <li class="parent-item login">
                        <?php if (!Yii::$app->user->isGuest){ ?>
                        <a href="<?= \yii\helpers\Url::to(['/site/logout']) ?>" class="ln-tr" ><span class="grad-btn">Выход</span></a></li>
                        <?php } else { ?>
                        <a href="<?= \yii\helpers\Url::to(['/site/login']) ?>" class="ln-tr" ><span class="grad-btn">Вход</span></a></li>
                        <?php }  ?>
                </ul>
            </nav><!-- End NAV Container -->
<!--            --><?php //debug(Yii::$app->user) ?>
            <div class="mobile-navigation fr">
                <a href="#" class="mobile-btn"><span></span></a>
                <div class="mobile-container"></div>
            </div><!-- end mobile navigation -->
        </div>
    </header><!-- End Main Header Container -->
    <?php

    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);

    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Contact', 'url' => ['/site/contact']],
    ];

    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'РГИСТРАЦИЯ', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'ВОЙТИ', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);

    NavBar::end();
    ?>

<?= $content ?>

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="widget about-widget">
                        <h6 class="widget-title">О нашей компании</h6>
                        <p class="about-text">
                            С другой стороны дальнейшее развитие различных форм деятельности требуют от нас анализа существенных финансовых и административных условий. Товарищи! постоянный количественный рост и сфера нашей активности позволяет оценить значение позиций, занимаемых участниками в отношении поставленных задач.
                        </p>
                        <div class="footer-links">
                            <ul>
                                <li><a href="#" class="ln-tr">О нас</a></li>
                                <li><a href="#" class="ln-tr">Новости</a></li>
                                <li><a href="#" class="ln-tr">Контакты</a></li>
                            </ul>
                        </div><!-- End Footer Links -->
                    </div><!-- End About Widget -->
                </div><!-- End col-md3 -->
                <div class="col-md-3">
                    <div class="widget twitter-widget">
                        <h6 class="widget-title">События</h6>
                        <div id="tweets-slider">
                            <ul class="slides">
                                <li>
                                    <div class="tweet">
                                        <a href="#" class="ln-tr">@Джону</a> Короткое описание события.
                                        <div class="date">Авг. 6, 2015</div>
                                    </div><!-- End Single Tweet -->
                                    <div class="tweet">
                                        <a href="#" class="ln-tr">@Джону</a> Короткое описание события.
                                        <div class="date">Авг. 6, 2015</div>
                                    </div><!-- End Single Tweet -->
                                </li><!-- End 1st Tweet Slide Item -->
                            </ul><!-- End ul Items -->
                        </div><!-- End Tweets Slider -->
                    </div><!-- End Twitter Widget -->
                </div><!-- End col-md3 -->
                <div class="col-md-4">
                    <div class="widget reales-widget">
                        <h6 class="widget-title">Что нового?</h6>
                        <div id="footer-reales-slider">
                            <ul class="slides">
                                <li class="clearfix">
                                    <div class="reale-icon fl">
                                        <span class="icon grad-btn"><i class="fa fa-bookmark"></i></span>
                                    </div><!-- End reale Icon -->
                                    <div class="reale-info">
                                        <h4 class="footer-reale-title"><a href="#" class="ln-tr">Заголовок события</a></h4>
                                        <p class="footer-reale-description">Краткое описание события</p>
                                        <span class="reale-date">Авг. 8, 2015</span>
                                    </div><!-- End reale Info -->
                                    <div class="reale-icon fl">
                                        <span class="icon"><i class="fa fa-bookmark"></i></span>
                                    </div><!-- End reale Icon -->
                                    <div class="reale-info">
                                        <h4 class="footer-reale-title"><a href="#" class="ln-tr">Заголовок события</a></h4>
                                        <p class="footer-reale-description">Краткое описание события</p>
                                        <span class="reale-date">Авг. 8, 2015</span>
                                    </div><!-- End reale Info -->
                                </li><!-- End 1st Slide Item -->
                            </ul><!-- End ul Items -->
                        </div><!-- End Footer Sreales Slider -->
                    </div><!-- End reales Widget -->
                </div><!-- End col-md4 -->
                <div class="col-md-2">
                    <div class="widget links-widget">
                        <h6 class="widget-title">Полезные ссылки</h6>
                        <div class="footer-links">
                            <ul>
                                <li><a href="#" class="ln-tr">Помощь</a></li>
                                <li><a href="#" class="ln-tr">Карта сайта</a></li>
                                <li><a href="#" class="ln-tr">Связь</a></li>
                                <li><a href="#" class="ln-tr">Лицензия</a></li>
                                <li><a href="#" class="ln-tr">Поддержка</a></li>
                                <li><a href="#" class="ln-tr">Персонал</a></li>
                                <li><a href="#" class="ln-tr">Объекты</a></li>
                            </ul>
                        </div><!-- End Footer Links -->
                    </div><!-- End Links Widget -->
                </div><!-- End col-md2 -->
            </div>
        </div>
        <div id="bottom">
            <div class="container">
                <div class="fl copyright">
                    <p>&copy; Realty - шаблон сайта недвижимости 2015 <a href="http://html6.com.ru">HTML6.COM.RU</a></p>
                </div><!-- End Copyright -->
                <div class="fr footer-social-icons">
                    <ul class="clearfix">
                        <li><a href="#" class="fb-icon ln-tr"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="tw-icon ln-tr"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="gp-icon ln-tr"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="in-icon ln-tr"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" class="yt-icon ln-tr"><i class="fa fa-youtube-play"></i></a></li>
                        <li><a href="#" class="rss-icon ln-tr"><i class="fa fa-rss"></i></a></li>
                    </ul>
                </div><!-- End Social Media Icons -->
            </div><!-- End container -->
        </div><!-- End Bottom Footer -->
    </footer><!-- End Footer -->
</div><!-- End Entire Wrap -->


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
