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


    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script>window.html5 || document.write('<script src="assets/js/vendor/html5shiv.js"><\/script>')</script>
    <![endif]-->
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
            <div class="logo-container fl clearfix">
                <a href="#" class="ib">
                    <img src="/web/images/logo@2x.png" class="fl" alt="Logo">
                    <span class="site-name">Realty<span>*</span></span>
                </a>
            </div><!-- End Logo Container -->
            <nav class="main-navigation fr">
                <ul class="clearfix">
                    <li class="parent-item haschild current_page_item">
                        <a href="#" class="ln-tr">Главная</a>
                    </li>
                    <li class="parent-item haschild">
                        <a href="#0" class="ln-tr">Услуги</a>
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
                        <a href="#" class="ln-tr" data-toggle="modal" data-target="#login-modal"><span class="grad-btn">Вход</span></a>
                    </li>
                </ul>
            </nav><!-- End NAV Container -->
            <div class="mobile-navigation fr">
                <a href="#" class="mobile-btn"><span></span></a>
                <div class="mobile-container"></div>
            </div><!-- end mobile navigation -->
        </div>
    </header><!-- End Main Header Container -->

    <section class="main-slider">
        <div class="cd-slider-wrapper">
            <ul class="cd-slider" data-step1="M1402,800h-2c0,0,0-213,0-423s0-377,0-377h1c0.6,0,1,0.4,1,1V800z" data-step2="M1400,800H724c0,0-297-155-297-423C427,139,728,0,728,0h671c0.6,0,1,0.4,1,1V800z" data-step3="M1400,800H0c0,0,1-213,1-423S1,0,1,0h1398c0.6,0,1,0.4,1,1V800z" data-step4="M-2,800h2c0,0,0-213,0-423S0,0,0,0h-1c-0.6,0-1,0.4-1,1V800z" data-step5="M0,800h676c0,0,297-155,297-423C973,139,672,0,672,0L1,0C0.4,0,0,0.4,0,1L0,800z" data-step6="M0,800h1400c0,0-1-213-1-423s0-377,0-377L1,0C0.4,0,0,0.4,0,1L0,800z">
                <li class="visible">
                    <div id="desc-slide">
                        <h1>Продам дом</h1>
                        <h3>г. Москва \ <span>4.000.000 р.</span></h3>
                    </div>
                    <div class="cd-svg-wrapper">
                        <svg viewBox="0 0 1400 800">
                            <title>Слайд</title>
                            <defs>
                                <clipPath id="cd-image-1">
                                    <path id="cd-changing-path-1" d="M1400,800H0c0,0,1-213,1-423S1,0,1,0h1398c0.6,0,1,0.4,1,1V800z"/>
                                </clipPath>
                            </defs>

                            <image height='800px' width="1400px" clip-path="url(#cd-image-1)" xlink:href="images/img-1.jpg"></image>
                        </svg>
                    </div> <!-- .cd-svg-wrapper -->
                </li>

                <li>
                    <div id="desc-slide">
                        <h1>Продам дом</h1>
                        <h3>г. Петербург \ <span>3.000.000 р.</span></h3>
                    </div>
                    <div class="cd-svg-wrapper">
                        <svg viewBox="0 0 1400 800">
                            <title>Слайд</title>
                            <defs>
                                <clipPath id="cd-image-2">
                                    <path id="cd-changing-path-2" d="M1400,800H0c0,0,1-213,1-423S1,0,1,0h1398c0.6,0,1,0.4,1,1V800z"/>
                                </clipPath>
                            </defs>

                            <image height='800px' width="1400px" clip-path="url(#cd-image-2)" xlink:href="images/img-2.jpg"></image>
                        </svg>
                    </div> <!-- .cd-svg-wrapper -->
                </li>

                <li>
                    <div id="desc-slide">
                        <h1>Продам дом</h1>
                        <h3>г. Москва \ <span>2.000.000 р.</span></h3>
                    </div>
                    <div class="cd-svg-wrapper">
                        <svg viewBox="0 0 1400 800">
                            <title>Слайд</title>
                            <defs>
                                <clipPath id="cd-image-3">
                                    <path id="cd-changing-path-3" d="M1400,800H0c0,0,1-213,1-423S1,0,1,0h1398c0.6,0,1,0.4,1,1V800z"/>
                                </clipPath>
                            </defs>

                            <image height='800px' width="1400px" clip-path="url(#cd-image-3)" xlink:href="images/img-3.jpg"></image>
                        </svg>
                    </div> <!-- .cd-svg-wrapper -->
                </li>

                <li>
                    <div id="desc-slide">
                        <h1>Продам дом</h1>
                        <h3>г. Санкт-Петербург \ <span>1.000.000 р.</span></h3>
                    </div>
                    <div class="cd-svg-wrapper">
                        <svg viewBox="0 0 1400 800">
                            <title>Слайд</title>
                            <defs>
                                <clipPath id="cd-image-4">
                                    <path id="cd-changing-path-4" d="M1400,800H0c0,0,1-213,1-423S1,0,1,0h1398c0.6,0,1,0.4,1,1V800z"/>
                                </clipPath>
                            </defs>

                            <image height='800px' width="1400px" clip-path="url(#cd-image-4)" xlink:href="images/img-4.jpg"></image>
                        </svg>
                    </div> <!-- .cd-svg-wrapper -->
                </li>

            </ul> <!-- .cd-slider -->

            <ul class="cd-slider-navigation">
                <li><a href="#0" class="next-slide">Вперед</a></li>
                <li><a href="#0" class="prev-slide">Назад</a></li>
            </ul> <!-- .cd-slider-navigation -->

            <ol class="cd-slider-controls">
                <li class="selected"><a href="#0"><em>Item 1</em></a></li>
                <li><a href="#0"><em>Item 2</em></a></li>
                <li><a href="#0"><em>Item 3</em></a></li>
                <li><a href="#0"><em>Item 4</em></a></li>
            </ol> <!-- .cd-slider-controls -->
        </div> <!-- .cd-slider-wrapper -->
    </section>

    <div class="clearfix"></div>

    <div class="clearfix"></div>

    <section class="full-section features-section white-bg fancy-shadow">
        <div class="container">
            <h3 class="section-title">Преимущества работы с нашей компанией</h3>
            <p class="section-description">
                С другой стороны дальнейшее развитие различных форм деятельности требуют от нас анализа существенных финансовых и административных условий. Товарищи! постоянный количественный рост и сфера нашей активности позволяет оценить значение позиций, занимаемых участниками в отношении поставленных задач.
            </p><!-- End Section Description -->
        </div>
        <div class="section-content features-content fadeInDown">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <div class="feature-box">
                            <div class="icon"><img src="/web/images/icons/feature-icon-1.png" class="es-tr" alt=""></div><!-- End Icon -->
                            <h5 class="feature-title">Помощь юриста</h5>
                            <p class="feature-description">
                                С другой стороны дальнейшее развитие различных форм деятельности требуют от нас анализа.
                            </p>
                        </div><!-- End Features Box -->
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="feature-box">
                            <div class="icon"><img src="/web/images/icons/feature-icon-2.png" class="es-tr" alt=""></div><!-- End Icon -->
                            <h5 class="feature-title">Продать недвижимость</h5>
                            <p class="feature-description">
                                С другой стороны дальнейшее развитие различных форм деятельности требуют от нас анализа.
                            </p>
                        </div><!-- End Features Box -->
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="feature-box">
                            <div class="icon"><img src="/web/images/icons/feature-icon-3.png" class="es-tr" alt=""></div><!-- End Icon -->
                            <h5 class="feature-title">Купить недвижимость</h5>
                            <p class="feature-description">
                                С другой стороны дальнейшее развитие различных форм деятельности требуют от нас анализа.
                            </p>
                        </div><!-- End Features Box -->
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="feature-box">
                            <div class="icon"><img src="/web/images/icons/feature-icon-4.png" class="es-tr" alt=""></div><!-- End Icon -->
                            <h5 class="feature-title">Сдать в аренду</h5>
                            <p class="feature-description">
                                С другой стороны дальнейшее развитие различных форм деятельности требуют от нас анализа.
                            </p>
                        </div><!-- End Features Box -->
                    </div>
                </div>
            </div>
        </div><!-- End Features Section Content -->
    </section><!-- End Features Section -->

    <div class="clearfix"></div>

    <section class="full-section categories-section">
        <div class="container">
            <h3 class="section-title">Комфортная покупка недвижимости? Реально!</h3>
            <p class="section-description">
                С другой стороны дальнейшее развитие различных форм деятельности требуют от нас анализа существенных финансовых и административных условий. Товарищи! постоянный количественный рост и сфера нашей активности позволяет оценить значение позиций, занимаемых участниками в отношении поставленных задач.
            </p><!-- End Section Description -->
        </div>
        <div class="section-content categories-content fadeInDown">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-4">
                        <div class="cat-box">
                            <div class="cat-image">
                                <img src="/web/images/content/cat-img-1-270x148.jpg" class="img-responsive" alt="">
                                <span class="cat-icon"><i class="fa fa-user"></i></span>
                            </div><!-- End CAT Image -->
                            <h4 class="cat-title"><a href="10-reales-grid-1.html" class="ln-tr">Объект №1</a></h4>
                            <p class="reales-counter">(<span class="nums">12</span>) часов назад</p>
                        </div><!-- End Category Box -->
                    </div><!-- End col-md-3 col-xs-4 -->
                    <div class="col-md-3 col-xs-4">
                        <div class="cat-box">
                            <div class="cat-image">
                                <img src="/web/images/content/cat-img-2-270x148.jpg" class="img-responsive" alt="">
                                <span class="cat-icon"><i class="fa fa-cog"></i></span>
                            </div><!-- End CAT Image -->
                            <h4 class="cat-title"><a href="10-reales-grid-1.html" class="ln-tr">Объект №2</a></h4>
                            <p class="reales-counter">(<span class="nums">12</span>) часов назад</p>
                        </div><!-- End Category Box -->
                    </div><!-- End col-md-3 col-xs-4 -->
                    <div class="col-md-3 col-xs-4">
                        <div class="cat-box">
                            <div class="cat-image">
                                <img src="/web/images/content/cat-img-3-270x148.jpg" class="img-responsive" alt="">
                                <span class="cat-icon"><i class="fa fa-database"></i></span>
                            </div><!-- End CAT Image -->
                            <h4 class="cat-title"><a href="10-reales-grid-1.html" class="ln-tr">Объект №3</a></h4>
                            <p class="reales-counter">(<span class="nums">12</span>) часов назад</p>
                        </div><!-- End Category Box -->
                    </div><!-- End col-md-3 col-xs-4 -->
                    <div class="col-md-3 col-xs-4">
                        <div class="cat-box">
                            <div class="cat-image">
                                <img src="/web/images/content/cat-img-4-270x148.jpg" class="img-responsive" alt="">
                                <span class="cat-icon"><i class="fa fa-share-alt"></i></span>
                            </div><!-- End CAT Image -->
                            <h4 class="cat-title"><a href="10-reales-grid-1.html" class="ln-tr">Объект №4</a></h4>
                            <p class="reales-counter">(<span class="nums">12</span>) часов назад</p>
                        </div><!-- End Category Box -->
                    </div><!-- End col-md-3 col-xs-4 -->
                    <div class="col-md-3 col-xs-4">
                        <div class="cat-box">
                            <div class="cat-image">
                                <img src="/web/images/content/cat-img-5-270x148.jpg" class="img-responsive" alt="">
                                <span class="cat-icon"><i class="fa fa-desktop"></i></span>
                            </div><!-- End CAT Image -->
                            <h4 class="cat-title"><a href="10-reales-grid-1.html" class="ln-tr">Объект №5</a></h4>
                            <p class="reales-counter">(<span class="nums">12</span>) часов назад</p>
                        </div><!-- End Category Box -->
                    </div><!-- End col-md-3 col-xs-4 -->
                    <div class="col-md-3 col-xs-4">
                        <div class="cat-box">
                            <div class="cat-image">
                                <img src="/web/images/content/cat-img-6-270x148.jpg" class="img-responsive" alt="">
                                <span class="cat-icon"><i class="fa fa-book"></i></span>
                            </div><!-- End CAT Image -->
                            <h4 class="cat-title"><a href="10-reales-grid-1.html" class="ln-tr">Объект №6</a></h4>
                            <p class="reales-counter">(<span class="nums">12</span>) часов назад</p>
                        </div><!-- End Category Box -->
                    </div><!-- End col-md-3 col-xs-4 -->
                    <div class="col-md-3 col-xs-4">
                        <div class="cat-box">
                            <div class="cat-image">
                                <img src="/web/images/content/cat-img-7-270x148.jpg" class="img-responsive" alt="">
                                <span class="cat-icon"><i class="fa fa-home"></i></span>
                            </div><!-- End CAT Image -->
                            <h4 class="cat-title"><a href="10-reales-grid-1.html" class="ln-tr">Объект №7</a></h4>
                            <p class="reales-counter">(<span class="nums">12</span>) часов назад</p>
                        </div><!-- End Category Box -->
                    </div><!-- End col-md-3 col-xs-4 -->
                    <div class="col-md-3 col-xs-4">
                        <div class="cat-box">
                            <div class="cat-image">
                                <img src="/web/images/content/cat-img-8-270x148.jpg" class="img-responsive" alt="">
                                <span class="cat-icon"><i class="fa fa-heart"></i></span>
                            </div><!-- End CAT Image -->
                            <h4 class="cat-title"><a href="10-reales-grid-1.html" class="ln-tr">Объект №8</a></h4>
                            <p class="reales-counter">(<span class="nums">12</span>) часов назад</p>
                        </div><!-- End Category Box -->
                    </div><!-- End col-md-3 col-xs-4 -->
                    <div class="col-md-3 col-xs-4">
                        <div class="cat-box">
                            <div class="cat-image">
                                <img src="/web/images/content/cat-img-9-270x148.jpg" class="img-responsive" alt="">
                                <span class="cat-icon"><i class="fa fa-legal"></i></span>
                            </div><!-- End CAT Image -->
                            <h4 class="cat-title"><a href="10-reales-grid-1.html" class="ln-tr">Объект №9</a></h4>
                            <p class="reales-counter">(<span class="nums">12</span>) часов назад</p>
                        </div><!-- End Category Box -->
                    </div><!-- End col-md-3 col-xs-4 -->
                    <div class="col-md-3 col-xs-4">
                        <div class="cat-box">
                            <div class="cat-image">
                                <img src="/web/images/content/cat-img-10-270x148.jpg" class="img-responsive" alt="">
                                <span class="cat-icon"><i class="fa fa-camera"></i></span>
                            </div><!-- End CAT Image -->
                            <h4 class="cat-title"><a href="10-reales-grid-1.html" class="ln-tr">Объект №10</a></h4>
                            <p class="reales-counter">(<span class="nums">12</span>) часов назад</p>
                        </div><!-- End Category Box -->
                    </div><!-- End col-md-3 col-xs-4 -->
                    <div class="col-md-3 col-xs-4">
                        <div class="cat-box">
                            <div class="cat-image">
                                <img src="/web/images/content/cat-img-11-270x148.jpg" class="img-responsive" alt="">
                                <span class="cat-icon"><i class="fa fa-lock"></i></span>
                            </div><!-- End CAT Image -->
                            <h4 class="cat-title"><a href="10-reales-grid-1.html" class="ln-tr">Объект №11</a></h4>
                            <p class="reales-counter">(<span class="nums">12</span>) часов назад</p>
                        </div><!-- End Category Box -->
                    </div><!-- End col-md-3 col-xs-4 -->
                    <div class="col-md-3 col-xs-4">
                        <div class="cat-box">
                            <div class="cat-image">
                                <img src="/web/images/content/cat-img-12-270x148.jpg" class="img-responsive" alt="">
                                <span class="cat-icon"><i class="fa fa-send"></i></span>
                            </div><!-- End CAT Image -->
                            <h4 class="cat-title"><a href="10-reales-grid-1.html" class="ln-tr">Объект №12</a></h4>
                            <p class="reales-counter">(<span class="nums">12</span>) часов назад</p>
                        </div><!-- End Category Box -->
                    </div><!-- End col-md-3 col-xs-4 -->
                </div><!-- End row -->
            </div><!-- End container -->
        </div><!-- End Categories Content -->
    </section><!-- End Categories Section -->

    <div class="clearfix"></div>

    <div class="clearfix"></div>

    <section class="full-section misc-section fadeInDown">
        <div class="container our-clients">
            <h6 class="head-title">Наши постоянные клиенты</h6>
            <div class="row">
                <div id="clients-slider" class="flexslider">
                    <ul class="slides clearfix">
                        <li class="clients-slide-item">
                            <div class="col-md-2 col-xs-4">
                                <div class="client"><a href="#"><img src="/web/images/content/client-img-1-170x68.jpg" alt=""></a></div><!-- End Client -->
                            </div>
                            <div class="col-md-2 col-xs-4">
                                <div class="client"><a href="#"><img src="/web/images/content/client-img-2-170x68.jpg" alt=""></a></div><!-- End Client -->
                            </div>
                            <div class="col-md-2 col-xs-4">
                                <div class="client"><a href="#"><img src="/web/images/content/client-img-3-170x68.jpg" alt=""></a></div><!-- End Client -->
                            </div>
                            <div class="col-md-2 col-xs-4">
                                <div class="client"><a href="#"><img src="/web/images/content/client-img-4-170x68.jpg" alt=""></a></div><!-- End Client -->
                            </div>
                            <div class="col-md-2 col-xs-4">
                                <div class="client"><a href="#"><img src="/web/images/content/client-img-5-170x68.jpg" alt=""></a></div><!-- End Client -->
                            </div>
                            <div class="col-md-2 col-xs-4">
                                <div class="client"><a href="#"><img src="/web/images/content/client-img-6-170x68.jpg" alt=""></a></div><!-- End Client -->
                            </div>
                        </li><!-- End 1st Slide Item -->
                        <li class="clients-slide-item">
                            <div class="col-md-2 col-xs-4">
                                <div class="client"><a href="#"><img src="/web/images/content/client-img-1-170x68.jpg" alt=""></a></div><!-- End Client -->
                            </div>
                            <div class="col-md-2 col-xs-4">
                                <div class="client"><a href="#"><img src="/web/images/content/client-img-2-170x68.jpg" alt=""></a></div><!-- End Client -->
                            </div>
                            <div class="col-md-2 col-xs-4">
                                <div class="client"><a href="#"><img src="/web/images/content/client-img-3-170x68.jpg" alt=""></a></div><!-- End Client -->
                            </div>
                            <div class="col-md-2 col-xs-4">
                                <div class="client"><a href="#"><img src="/web/images/content/client-img-4-170x68.jpg" alt=""></a></div><!-- End Client -->
                            </div>
                            <div class="col-md-2 col-xs-4">
                                <div class="client"><a href="#"><img src="/web/images/content/client-img-5-170x68.jpg" alt=""></a></div><!-- End Client -->
                            </div>
                            <div class="col-md-2 col-xs-4">
                                <div class="client"><a href="#"><img src="/web/images/content/client-img-6-170x68.jpg" alt=""></a></div><!-- End Client -->
                            </div>
                        </li><!-- End 2nd Slide Item -->
                    </ul><!-- End ul Items -->
                </div><!-- End Clients Slider -->
            </div><!-- End row -->
        </div><!-- End Our Clients -->
    </section><!-- End MISC Section -->

    <div class="clearfix"></div>

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
