<?php

/** @var yii\web\View $this */

/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => '@web/favicon.ico']);
?>
<?php $this->beginPage() ?>
<?php $carts = (new \app\models\Carts())->getCarts() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">


        <!-- Favicon Icon -->
        <link rel="icon" type="image/png" href="/web/images/favicon.png">
        <!-- Favicon Icon -->
    </head>
    <body>
    <?php $this->beginBody() ?>
    <!-- Preloader Start -->
    <div class="preloader" id="preloader">
        <div class="la-ball-scale-multiple la-2x">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Header Start -->
    <!-- Header End -->
    <header class="header-01 fix-header">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="logo">
                        <a href="/">
                            <img src="/web/images/logo.png" alt="goru"/> <!--style="height: 30px; margin-top: 20px"-->
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6" > <!--style="margin: -38px; margin-left: 10px"-->
                    <nav class="mainmenu mobile-menu">
                        <div class="mobile-btn">
                            <a href="javascript: void(0);">
                                <user-login>Menu</user-login>
                                <i class="twi-bars"></i></a>
                        </div>
                        <ul>
                            <li class="active menu-item-has-children">
                                <a href="/">??????????????</a>

                            </li>
                            <li class="menu-item-has-children">
                                <a href="/web/site/shop">??????????</a>
                            </li>
                            <!--<li class="menu-item-has-children">
                                <a href="/web/site/login">????????????????????/??????????????????????</a>
                            </li>-->


                        </ul>
                    </nav>
                </div>
                <div class="col-lg-4 col-md-4"> <!--style="margin: -38px; margin-left: 10px"-->
                    <div class="header-cogs">

                        <?php
                        if (Yii::$app->user->isGuest) {
                            echo '
                            <a href="/web/site/login">??????????????????????/??????????????????????</a>
                            <a class="search search-toggles" href="javascript:void(0);"><i class="twi-search"></i></a>
                        ';
                        } else {
                            echo '
                             
                              
  <a class="user-login" href="/web/lk"><i class="twi-user-circle"></i><span>??????????????</span></a>
  

<div style="margin-left: 10px">
<a class="search search-toggles" href="javascript:void(0);"><i class="twi-search"></i></a>
</div>
                             

                        ';
                        }

                        ?>
                        <div>
                        <a class="carts"
                           href="/web/carts"><span><?php if (!empty($carts)): ?> <?= $carts['over_count']; ?>   <?php else: ?>
                                    0
                                <?php endif; ?></span><img
                                    src="/web/images/cart.png" alt=""></a></div>
                        <?php
                        if (Yii::$app->user->isGuest){
                            echo '';

                        }
                        else {
                            echo '
<div style="margin-left: 50px">
                        <a class="nav-item">'
                                . Html::beginForm(['/site/logout'])
                                . Html::submitButton(
                                    '?????????? (' . Yii::$app->user->identity->email . ')',
                                    ['class' => 'nav-link btn btn-link logout']
                                )
                                . Html::endForm()
                                . '</a>
                        </div>';
                        }?>

                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Popup Search -->
    <section class="popup-search-sec">
        <div class="popup-search-overlay"></div>
        <div class="overlay-popup">
            <a href="javascript:void(0);" class="search-closer">x</a><!-- Close Popup Btn -->
            <div class="middle-search">
                <div class="popup-search-form"><!-- Search Form Start -->
                    <form method="get" action="/web/site/shop_search">
                        <input type="Search" name="keyword" id="keyword" placeholder="Search...">
                        <button type="submit"><i class="twi-search"></i></button>
                    </form><!-- Search Form End -->
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>

    <!-- Popup Search -->
    <?= $content ?>
    <!-- Footer Start -->
    <footer class="footer-01">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <aside class="widget about-widget">
                        <div class="foo-logo">
                            <a href="/"><img src="/web/images/drhs.png" alt=""/></a>
                        </div>
                        <p>
                            ?????????????? ?????????????? GoodBook. ?????????????? ?????????? ???????? ???????????? ??????????.
                        </p>
                        <div class="ab-social">
                            <a href="https://web.telegram.org/"><i class="twi-telegram"></i></a>
                            <a href="#"><i class="twi-vk"></i></a>
                            <a href="#"><i class="twi-pinterest"></i></a>
                            <a href="#"><i class="twi-youtube"></i></a>
                        </div>
                    </aside>
                </div>
                <div class="col-lg-2 col-md-4 col-custome-1">
                    <aside class="widget">
                        <ul>
                            <li><a href="/">??????????????</a></li>
                        </ul>
                        <ul>
                            <li><a href="/web/site/login_pr">??????????????????????/?????????????????????? ????????????</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-2 col-md-4 col-custome-2">
                </div>
                <div class="col-lg-2 col-md-6 col-custome-3">
                    <aside class="widget contact-widget">
                        <h3 class="widget-title">????????????????</h3>
                        <p>
                            ??.???????????? ????.?????????????????????? 35
                        </p>
                        <p>
                            ??????????????: +1 315-234-3812
                            Email: info@goodbook.com
                        </p>
                    </aside>
                </div>
                <div class="col-lg-3 col-md-6 col-custome-4">
                    <aside class="widget">
                        <h3 class="widget-title">????????????????</h3>
                        <form class="subscribe-form" action="#" method="post">
                            <input type="email" name="email" placeholder="admin@mail.com">
                            <button type="submit">??????????????????????<i class="twi-long-arrow-alt-right"></i></button>
                        </form>
                    </aside>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Ened -->

    <!-- Coryight Start -->
    <section class="copyright-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-5">

                </div>
                <div class="col-lg-6 col-md-7">
                    <div class="copys-text"><i class="twi-copyright"></i>Copyright goodbook 2022 | All Rights Reserved
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Coryight End -->

    <!-- Back To Top -->
    <a href="#" id="backtotop"><i class="twi-angle-double-up2"></i></a>


    <script src="/web/js/theme.js"></script>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>