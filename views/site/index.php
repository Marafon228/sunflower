<?php
/** @var array $product_pr_1 */
/** @var array $product_pr_2 */

/** @var array $product_pol */

use yii\helpers\Html;
use yii\helpers\Url;

?>
<!-- Slider Start -->
<section class="slider-01 ">
    <?php if (Yii::$app->session->hasFlash('success')): ?>
        <div class="alert alert-success">
            <?= Yii::$app->session->getFlash('success') ?>
        </div>
    <?php endif; ?>
    <div class="rev_slider_wrapper">
        <div id="rev_slider_1" class="rev_slider fullwidthabanner" style="    lodisplay:none;" data-version="5.4.1">
            <ul>
                <li class="rev-slidebg">
                    <div class="tp-caption tp-resizeme textRes title-1"
                         data-x="['left','left','center','center']"
                         data-hoffset="['0']"

                         data-y="['middle']"
                         data-voffset="['-132','-110','-60','-70']"

                         data-fontsize="['60','45','40','36']"
                         data-fontweight="700"
                         data-lineheight="['72','50','52','46']"
                         data-width="['570','500','500','100%']"
                         data-height="['auto']"
                         data-whitesapce="['normal']"
                         data-color="['#000000']"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},
                                 {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'


                         data-textAlign="['left','left','center','center']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,20]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,20]"

                         style="z-index: 5;  white-space: normal; text-transform: none;">Петтерсы. Дети океанов
                    </div>
                    <div class="tp-caption tp-resizeme textRes"
                         data-x="['left','left','center','center']"
                         data-hoffset="['0']"

                         data-y="['middle']"
                         data-voffset="['17','17','50','40']"

                         data-fontsize="['24','20','18','18']"
                         data-fontweight="400"
                         data-lineheight="['36','32','30','28']"
                         data-width="['570','500','500','100%']"
                         data-height="['auto']"
                         data-whitesapce="['normal']"
                         data-color="['#666666']"

                         data-type="text"
                         data-responsive_offset="off"

                         data-frames='[{"delay":2000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},
                                 {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                         data-textAlign="['left','left','center','center']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,20]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,20]"


                         style="z-index: 5; white-space: normal; text-transform: none;">Приключенческая книга Павла Воли
                        для детей и взрослых
                    </div>
                    <div class="tp-caption tp-resizeme textRes"
                         data-x="['left','left','center','center']"
                         data-hoffset="['0']"

                         data-y="['middle']"
                         data-voffset="['145','145','150','145']"

                         data-fontsize="14"
                         data-fontweight="700"
                         data-lineheight=".8"
                         data-width="['auto']"
                         data-height="['auto']"
                         data-whitesapce="['normal']"
                         data-color="['#FFF']"

                         data-type="text"
                         data-responsive_offset="off"

                         data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},
                                 {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                         data-textAlign="center"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,20]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,20]"

                         style="z-index: 5;">
                        <form method="post"
                              action="<?= Url::to(['carts/add']); ?>">
                            <input type="hidden" name="id"
                                   value="14">
                            <?=
                            Html::hiddenInput(
                                Yii::$app->request->csrfParam,
                                Yii::$app->request->csrfToken
                            );
                            ?>
                            <button type="submit" style="display: inline-block;

                                                    background: transparent;
                                                    color: #000;
                                                    font-family: 'Poppins', sans-serif;
                                                    font-size: 14px;
                                                    letter-spacing: 2.8px;
                                                    font-weight: 700;
                                                    text-transform: uppercase;
                                                    border: 2px solid #000000;
                                                    border-radius: 0;
                                                    height: 60px;
                                                    line-height: .8;
                                                    z-index: 2;
                                                    padding: 23px 36px;
                                                    overflow: hidden;
                                                    position: relative;
                                                   -webkit-transition: all 0.4s ease;
                                                    -o-transition: all 0.4s ease;
                                                    transition: all 0.4s ease;">
                                <i class="fa fa-shopping-cart"></i>
                                Добавить в корзину
                            </button>

                        </form>
                    </div>
                    <div class="tp-caption tp-resizeme slider-image"
                         data-x="['right','right','center','center']"
                         data-hoffset="['-50','50','0','0']"

                         data-y="['middle']"
                         data-voffset="['0']"
                         data-width="['auto','350','auto','auto']"
                         data-height="['auto']"


                         data-type="image"
                         data-responsive_offset="off"

                         data-frames='[{"delay":3500,"speed":2500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'


                         data-textAlign="center"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,25]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,25]"

                         style="z-index: 5;"><img src="/web/images/home/12.jpg" alt="">
                    </div>
                </li>
                <li class="rev-slidebg">
                    <div class="tp-caption tp-resizeme textRes title-1"
                         data-x="['left','left','center','center']"
                         data-hoffset="['0']"

                         data-y="['middle']"
                         data-voffset="['-132','-110','-60','-70']"

                         data-fontsize="['60','45','40','36']"
                         data-fontweight="700"
                         data-lineheight="['72','50','52','46']"
                         data-width="['570','500','500','100%']"
                         data-height="['auto']"
                         data-whitesapce="['normal']"
                         data-color="['#000000']"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},
                                 {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'


                         data-textAlign="['left','left','center','center']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,20]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,20]"

                         style="z-index: 5;  white-space: normal; text-transform: none;">Мистер Вечный Канун. Уэлихолн
                    </div>
                    <div class="tp-caption tp-resizeme textRes"
                         data-x="['left','left','center','center']"
                         data-hoffset="['0']"

                         data-y="['middle']"
                         data-voffset="['17','17','50','40']"

                         data-fontsize="['24','20','18','18']"
                         data-fontweight="400"
                         data-lineheight="['36','32','30','28']"
                         data-width="['570','500','500','100%']"
                         data-height="['auto']"
                         data-whitesapce="['normal']"
                         data-color="['#666666']"

                         data-type="text"
                         data-responsive_offset="off"

                         data-frames='[{"delay":2000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},
                                 {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                         data-textAlign="['left','left','center','center']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,20]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,20]"

                         style="z-index: 5; white-space: normal; text-transform: none;">Захватывающий детектив в стиле
                        современаая отечественная проза
                    </div>
                    <div class="tp-caption tp-resizeme textRes"
                         data-x="['left','left','center','center']"
                         data-hoffset="['0']"

                         data-y="['middle']"
                         data-voffset="['145','145','150','145']"

                         data-fontsize="14"
                         data-fontweight="700"
                         data-lineheight=".8"
                         data-width="['auto']"
                         data-height="['auto']"
                         data-whitesapce="['normal']"
                         data-color="['#FFF']"

                         data-type="text"
                         data-responsive_offset="off"

                         data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},
                                 {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                         data-textAlign="center"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,20]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,20]"

                         style="z-index: 5;">
                        <form method="post"
                              action="<?= Url::to(['carts/add']); ?>">
                            <input type="hidden" name="id"
                                   value="13">
                            <?=
                            Html::hiddenInput(
                                Yii::$app->request->csrfParam,
                                Yii::$app->request->csrfToken
                            );
                            ?>
                            <button type="submit" style="display: inline-block;
                                                    background: transparent;
                                                    color: #000;
                                                    font-family: 'Poppins', sans-serif;
                                                    font-size: 14px;
                                                    letter-spacing: 2.8px;
                                                    font-weight: 700;
                                                    text-transform: uppercase;
                                                    border: 2px solid #000000;
                                                    border-radius: 0;
                                                    height: 60px;
                                                    line-height: .8;
                                                    z-index: 2;
                                                    padding: 23px 36px;
                                                    overflow: hidden;
                                                    position: relative;
                                                   -webkit-transition: all 0.4s ease;
                                                    -o-transition: all 0.4s ease;
                                                    transition: all 0.4s ease;">
                                <i class="fa fa-shopping-cart"></i>
                                Добавить в корзину
                            </button>

                        </form>


                    </div>
                    <div class="tp-caption tp-resizeme slider-image"
                         data-x="['right','right','center','center']"
                         data-hoffset="['-50','50','0','0']"

                         data-y="['middle']"
                         data-voffset="['0']"
                         data-width="['auto','350','auto','auto']"
                         data-height="['auto']"


                         data-type="image"
                         data-responsive_offset="off"

                         data-frames='[{"delay":3500,"speed":2500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'


                         data-textAlign="center"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,25]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,25]"

                         style="z-index: 5;"><img src="/web/images/home/122.png" alt="">
                    </div>
                </li>
                <li class="rev-slidebg">
                    <div class="tp-caption tp-resizeme textRes title-1"
                         data-x="['left','left','center','center']"
                         data-hoffset="['0']"

                         data-y="['middle']"
                         data-voffset="['-132','-110','-60','-70']"

                         data-fontsize="['60','45','40','36']"
                         data-fontweight="700"
                         data-lineheight="['72','50','52','46']"
                         data-width="['570','500','500','100%']"
                         data-height="['auto']"
                         data-whitesapce="['normal']"
                         data-color="['#000000']"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},
                                 {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'


                         data-textAlign="['left','left','center','center']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,20]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,20]"

                         style="z-index: 5;  white-space: normal; text-transform: none;">Дневной дозор
                    </div>
                    <div class="tp-caption tp-resizeme textRes"
                         data-x="['left','left','center','center']"
                         data-hoffset="['0']"

                         data-y="['middle']"
                         data-voffset="['17','17','50','40']"

                         data-fontsize="['24','20','18','18']"
                         data-fontweight="400"
                         data-lineheight="['36','32','30','28']"
                         data-width="['570','500','500','100%']"
                         data-height="['auto']"
                         data-whitesapce="['normal']"
                         data-color="['#666666']"

                         data-type="text"
                         data-responsive_offset="off"

                         data-frames='[{"delay":2000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},
                                 {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                         data-textAlign="['left','left','center','center']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,20]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,20]"

                         style="z-index: 5; white-space: normal; text-transform: none;"> Продолжение цикла книг "Дозор"
                    </div>
                    <div class="tp-caption tp-resizeme textRes"
                         data-x="['left','left','center','center']"
                         data-hoffset="['0']"

                         data-y="['middle']"
                         data-voffset="['145','145','150','145']"

                         data-fontsize="14"
                         data-fontweight="700"
                         data-lineheight=".8"
                         data-width="['auto']"
                         data-height="['auto']"
                         data-whitesapce="['normal']"
                         data-color="['#FFF']"

                         data-type="text"
                         data-responsive_offset="off"

                         data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},
                                 {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                         data-textAlign="center"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,20]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,20]"

                         style="z-index: 5;">
                        <form method="post"
                              action="<?= Url::to(['carts/add']); ?>">
                            <input type="hidden" name="id"
                                   value="15">
                            <?=
                            Html::hiddenInput(
                                Yii::$app->request->csrfParam,
                                Yii::$app->request->csrfToken
                            );
                            ?>
                            <button type="submit" style="display: inline-block;
                                                    background: transparent;
                                                    color: #000;
                                                    font-family: 'Poppins', sans-serif;
                                                    font-size: 14px;
                                                    letter-spacing: 2.8px;
                                                    font-weight: 700;
                                                    text-transform: uppercase;
                                                    border: 2px solid #000000;
                                                    border-radius: 0;
                                                    height: 60px;
                                                    line-height: .8;
                                                    z-index: 2;
                                                    padding: 23px 36px;
                                                    overflow: hidden;
                                                    position: relative;
                                                   -webkit-transition: all 0.4s ease;
                                                    -o-transition: all 0.4s ease;
                                                    transition: all 0.4s ease;">
                                <i class="fa fa-shopping-cart"></i>
                                Добавить в корзину
                            </button>

                        </form>
                    </div>
                    <div class="tp-caption tp-resizeme slider-image"
                         data-x="['right','right','center','center']"
                         data-hoffset="['-50','50','0','0']"

                         data-y="['middle']"
                         data-voffset="['0']"
                         data-width="['auto','350','auto','auto']"
                         data-height="['auto']"


                         data-type="image"
                         data-responsive_offset="off"

                         data-frames='[{"delay":3500,"speed":2500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'


                         data-textAlign="center"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,25]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,25]"

                         style="z-index: 5;"><img src="/web/images/home/133.png" alt="">
                    </div>
                </li>

                </li>
            </ul>
        </div>
    </div>
</section>
<!-- Slider End -->

<!-- Categories Section Start -->

<!-- shpage -->
<div class="cate-shage"><img src="/web/images/home/shape1.png" alt=""></div>
</section>
<!-- Categories Section End -->

<!-- Service Section Start -->
<section class="service-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <img src="/web/images/home/truck.png" alt="">
                    <h4>Быстрая доставка</h4>
                    <p>Доставка бесплатная по всей России</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <img src="/web/images/home/headphone.png" alt="">
                    <h4>Прослушивание аудиокниг</h4>
                    <p>Слушай в дороге, дома и на отдыхе</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <img src="/web/images/home/undo.png" alt="">
                    <h4>За 5 дней</h4>
                    <p>Быстрый возврат товара в течении 5 дней</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Service Section End -->

<!-- Trending Section Start -->
<section class="trending-section" style="background-image: url(/web/images/home/shape2.png);">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="sec-title">Лучшие книги</h2>
                <p class="sec-desc">
                    Книга никогла не бывает шедевром-она им становится. Э.и Ж.Гонкуры
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="trending-slider owl-carousel">
                    <div class="row">
                        <?php foreach ($product_pr_1 as $product): ?>
                            <div class="col-lg-5 col-md-5">
                                <div class="single-trending-product">
                                    <div class="trend-thumb">
                                        <img style="height: 450px; width: 300px" src="/web<?= $product->image ?>"
                                             alt="">
                                    </div>
                                    <div class="tr-pro-detail">
                                        <h3>
                                            <a href="/web/site/single_product?id=<?= $product->id ?>"><?= $product->name ?></a>
                                            <div class="product-price clearfix">
                                                    <span class="price">
                                                        <span><span class="woocommerce-Price-currencySymbol"></span><?= $product->price ?>₽</span>
                                                    </span>
                                            </div>
                                        </h3>
                                        <p>
                                            <?= $product->description ?>
                                        </p>
                                        <form method="post"
                                              action="<?= Url::to(['carts/add']); ?>">
                                            <input type="hidden" name="id"
                                                   value="<?= $product['id']; ?>">
                                            <?=
                                            Html::hiddenInput(
                                                Yii::$app->request->csrfParam,
                                                Yii::$app->request->csrfToken
                                            );
                                            ?>
                                            <button type="submit" style="display: inline-block;
                                                    background: transparent;
                                                    color: #000;
                                                    font-family: 'Poppins', sans-serif;
                                                    font-size: 14px;
                                                    letter-spacing: 2.8px;
                                                    font-weight: 700;
                                                    text-transform: uppercase;
                                                    border: 2px solid #000000;
                                                    border-radius: 0;
                                                    height: 60px;
                                                    line-height: .8;
                                                    z-index: 2;
                                                    padding: 23px 36px;
                                                    overflow: hidden;
                                                    position: relative;
                                                   -webkit-transition: all 0.4s ease;
                                                    -o-transition: all 0.4s ease;
                                                    transition: all 0.4s ease;">
                                                <i class="fa fa-shopping-cart"></i>
                                                Добавить в корзину
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="row">
                        <?php foreach ($product_pr_2 as $product): ?>
                            <div class="col-lg-5 col-md-5">
                                <div class="single-trending-product">
                                    <div class="trend-thumb">
                                        <img style="height: 450px; width: 300px" src="/web<?= $product->image ?>"
                                             alt="">
                                    </div>
                                    <div class="tr-pro-detail">
                                        <h3>
                                            <a href="/web/site/single_product?id=<?= $product->id ?>"><?= $product->name ?></a>
                                            <div class="product-price clearfix">
                                                    <span class="price">
                                                        <span><span class="woocommerce-Price-currencySymbol"></span><?= $product->price ?>₽</span>
                                                    </span>
                                            </div>
                                        </h3>
                                        <p>
                                            <?= $product->description . 'И как написать свой сайт с помощью друга ' ?>
                                        </p>
                                        <form method="post"
                                              action="<?= Url::to(['carts/add']); ?>">
                                            <input type="hidden" name="id"
                                                   value="<?= $product['id']; ?>">
                                            <?=
                                            Html::hiddenInput(
                                                Yii::$app->request->csrfParam,
                                                Yii::$app->request->csrfToken
                                            );
                                            ?>
                                            <button type="submit" style="display: inline-block;
                                                    background: transparent;
                                                    color: #000;
                                                    font-family: 'Poppins', sans-serif;
                                                    font-size: 14px;
                                                    letter-spacing: 2.8px;
                                                    font-weight: 700;
                                                    text-transform: uppercase;
                                                    border: 2px solid #000000;
                                                    border-radius: 0;
                                                    height: 60px;
                                                    line-height: .8;
                                                    z-index: 2;
                                                    padding: 23px 36px;
                                                    overflow: hidden;
                                                    position: relative;
                                                   -webkit-transition: all 0.4s ease;
                                                    -o-transition: all 0.4s ease;
                                                    transition: all 0.4s ease;">
                                                <i class="fa fa-shopping-cart"></i>
                                                Добавить в корзину
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Trending Section End -->

<!-- Popular Section Start -->
<section class="popular-section">

    <!-- Shape Round -->
    <div class="shape-round">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <!-- Shape Round -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="sec-title"> 6 полезных книг для развития самодисциплины</h2>
                <div class="tab-content">
                    <div class="tab-pane fade show in active" id="all" role="tabpanel">
                        <div class="popular-tab-slider owl-carousel">


                            <?php foreach ($product_pol as $product): ?>
                                <div class="pp-single-slider">
                                    <div class="single-popular-product">
                                        <div class="sp-thumb">
                                            <a href="/web/site/single_product?id=<?= $product->id ?>">
                                                <img style="height: 400px; width: 250px" src="/web<?= $product->image ?>"
                                                     alt="">
                                            </a>


                                        </div>
                                        <div class="sp-details">
                                            <h4>
                                                <?= $product->description ?>
                                            </h4>
                                            <div class="product-price clearfix">
                                                    <span class="price">

                                                        <ins><span><span
                                                                        class="woocommerce-Price-currencySymbol"></span><?= $product->price ?>₽</span></ins>
                                                    </span>
                                            </div>
                                            <div class="sp-details-hover">
                                                <form method="post"
                                                      action="<?= Url::to(['carts/add']); ?>">
                                                    <input type="hidden" name="id"
                                                           value="<?= $product['id']; ?>">
                                                    <?=
                                                    Html::hiddenInput(
                                                        Yii::$app->request->csrfParam,
                                                        Yii::$app->request->csrfToken
                                                    );
                                                    ?>
                                                    <button type="submit" style="display: inline-block;
                                                    background: transparent;
                                                    color: #000;
                                                    font-family: 'Poppins', sans-serif;
                                                    font-size: 14px;
                                                    letter-spacing: 2.8px;
                                                    font-weight: 700;
                                                    text-transform: uppercase;
                                                    border: 2px solid #000000;
                                                    border-radius: 0;
                                                    height: 60px;
                                                    line-height: .8;
                                                    z-index: 2;
                                                    padding: 23px 36px;
                                                    overflow: hidden;
                                                    position: relative;
                                                   -webkit-transition: all 0.4s ease;
                                                    -o-transition: all 0.4s ease;
                                                    transition: all 0.4s ease;">
                                                        <i class="fa fa-shopping-cart"></i>
                                                        Добавить в корзину
                                                    </button>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>


                        </div>
                    </div>
                    <div class="tab-pane fade in" id="smartphones" role="tabpanel">
                        <div class="popular-tab-slider owl-carousel">
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p6.jpg" alt="">
                                        <div class="pro-badge">
                                            <p class="sale">Sale</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Gaming Headset</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                        class="woocommerce-Price-currencySymbol">₽</span>42.00</span></del>
                                                        <ins><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>38.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p5.jpg" alt="">
                                        <div class="pro-badge">
                                            <p class="sale">Sale</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Camera Lens</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>52.00</span></del>
                                                        <ins><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>48.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p4.jpg" alt="">
                                        <div class="pro-badge">
                                            <p class="hot">Hot</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Novo Headset A30</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <span><span class="woocommerce-Price-currencySymbol">$</span>122.00</span>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p3.jpg" alt="">
                                    </div>
                                    <div class="sp-details">
                                        <h4>TV Monitor Screen</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <span><span class="woocommerce-Price-currencySymbol">$</span>222.00</span>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p2.jpg" alt="">
                                        <div class="pro-badge">
                                            <p class="out-of-stock">Out of Stock</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Headset</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>32.00</span></del>
                                                        <ins><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>28.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p1.jpg" alt="">
                                    </div>
                                    <div class="sp-details">
                                        <h4>Gaming Controller</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>42.00</span></del>
                                                        <ins><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>38.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p6.jpg" alt="">
                                        <div class="pro-badge">
                                            <p class="out-of-stock">Out of Stock</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Headset</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>32.00</span></del>
                                                        <ins><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>28.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p3.jpg" alt="">
                                    </div>
                                    <div class="sp-details">
                                        <h4>Gaming Controller</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>42.00</span></del>
                                                        <ins><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>38.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p1.jpg" alt="">
                                        <div class="pro-badge">
                                            <p class="sale">Sale</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Gaming Headset</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>42.00</span></del>
                                                        <ins><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>38.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p4.jpg" alt="">
                                        <div class="pro-badge">
                                            <p class="sale">Sale</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Camera Lens</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>52.00</span></del>
                                                        <ins><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>48.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p2.jpg" alt="">
                                        <div class="pro-badge">
                                            <p class="hot">Hot</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Novo Headset A30</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <span><span class="woocommerce-Price-currencySymbol">$</span>122.00</span>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p5.jpg" alt="">
                                    </div>
                                    <div class="sp-details">
                                        <h4>TV Monitor Screen</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <span><span class="woocommerce-Price-currencySymbol">$</span>222.00</span>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade in" id="camera" role="tabpanel">
                        <div class="popular-tab-slider owl-carousel">
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p2.jpg" alt="">
                                        <div class="pro-badge">
                                            <p class="sale">Sale</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Gaming Headset</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>42.00</span></del>
                                                        <ins><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>38.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p3.jpg" alt="">
                                        <div class="pro-badge">
                                            <p class="sale">Sale</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Camera Lens</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>52.00</span></del>
                                                        <ins><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>48.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p4.jpg" alt="">
                                        <div class="pro-badge">
                                            <p class="hot">Hot</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Novo Headset A30</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <span><span class="woocommerce-Price-currencySymbol">$</span>122.00</span>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p1.jpg" alt="">
                                    </div>
                                    <div class="sp-details">
                                        <h4>TV Monitor Screen</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <span><span class="woocommerce-Price-currencySymbol">$</span>222.00</span>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p5.jpg" alt="">
                                        <div class="pro-badge">
                                            <p class="out-of-stock">Out of Stock</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Headset</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>32.00</span></del>
                                                        <ins><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>28.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p6.jpg" alt="">
                                    </div>
                                    <div class="sp-details">
                                        <h4>Gaming Controller</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>42.00</span></del>
                                                        <ins><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>38.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p6.jpg" alt="">
                                        <div class="pro-badge">
                                            <p class="out-of-stock">Out of Stock</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Headset</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>32.00</span></del>
                                                        <ins><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>28.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p3.jpg" alt="">
                                    </div>
                                    <div class="sp-details">
                                        <h4>Gaming Controller</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>42.00</span></del>
                                                        <ins><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>38.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p1.jpg" alt="">
                                        <div class="pro-badge">
                                            <p class="sale">Sale</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Gaming Headset</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>42.00</span></del>
                                                        <ins><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>38.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p4.jpg" alt="">
                                        <div class="pro-badge">
                                            <p class="sale">Sale</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Camera Lens</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>52.00</span></del>
                                                        <ins><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>48.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p2.jpg" alt="">
                                        <div class="pro-badge">
                                            <p class="hot">Hot</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Novo Headset A30</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <span><span class="woocommerce-Price-currencySymbol">$</span>122.00</span>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p5.jpg" alt="">
                                    </div>
                                    <div class="sp-details">
                                        <h4>TV Monitor Screen</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <span><span class="woocommerce-Price-currencySymbol">$</span>222.00</span>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade in" id="gadgets" role="tabpanel">
                        <div class="popular-tab-slider owl-carousel">
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p5.jpg" alt="">
                                        <div class="pro-badge">
                                            <p class="sale">Sale</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Gaming Headset</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>42.00</span></del>
                                                        <ins><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>38.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p6.jpg" alt="">
                                        <div class="pro-badge">
                                            <p class="sale">Sale</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Camera Lens</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>52.00</span></del>
                                                        <ins><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>48.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p1.jpg" alt="">
                                        <div class="pro-badge">
                                            <p class="hot">Hot</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Novo Headset A30</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <span><span class="woocommerce-Price-currencySymbol">$</span>122.00</span>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p2.jpg" alt="">
                                    </div>
                                    <div class="sp-details">
                                        <h4>TV Monitor Screen</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <span><span class="woocommerce-Price-currencySymbol">$</span>222.00</span>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p3.jpg" alt="">
                                        <div class="pro-badge">
                                            <p class="out-of-stock">Out of Stock</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Headset</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>32.00</span></del>
                                                        <ins><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>28.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p4.jpg" alt="">
                                    </div>
                                    <div class="sp-details">
                                        <h4>Gaming Controller</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>42.00</span></del>
                                                        <ins><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>38.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p6.jpg" alt="">
                                        <div class="pro-badge">
                                            <p class="out-of-stock">Out of Stock</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Headset</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>32.00</span></del>
                                                        <ins><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>28.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p3.jpg" alt="">
                                    </div>
                                    <div class="sp-details">
                                        <h4>Gaming Controller</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>42.00</span></del>
                                                        <ins><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>38.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p1.jpg" alt="">
                                        <div class="pro-badge">
                                            <p class="sale">Sale</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Gaming Headset</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>42.00</span></del>
                                                        <ins><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>38.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p4.jpg" alt="">
                                        <div class="pro-badge">
                                            <p class="sale">Sale</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Camera Lens</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>52.00</span></del>
                                                        <ins><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>48.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p2.jpg" alt="">
                                        <div class="pro-badge">
                                            <p class="hot">Hot</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Novo Headset A30</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <span><span class="woocommerce-Price-currencySymbol">$</span>122.00</span>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p5.jpg" alt="">
                                    </div>
                                    <div class="sp-details">
                                        <h4>TV Monitor Screen</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <span><span class="woocommerce-Price-currencySymbol">$</span>222.00</span>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade in" id="others" role="tabpanel">
                        <div class="popular-tab-slider owl-carousel">
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p4.jpg" alt="">
                                        <div class="pro-badge">
                                            <p class="sale">Sale</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Gaming Headset</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>42.00</span></del>
                                                        <ins><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>38.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p3.jpg" alt="">
                                        <div class="pro-badge">
                                            <p class="sale">Sale</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Camera Lens</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>52.00</span></del>
                                                        <ins><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>48.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p1.jpg" alt="">
                                        <div class="pro-badge">
                                            <p class="hot">Hot</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Novo Headset A30</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <span><span class="woocommerce-Price-currencySymbol">$</span>122.00</span>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p2.jpg" alt="">
                                    </div>
                                    <div class="sp-details">
                                        <h4>TV Monitor Screen</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <span><span class="woocommerce-Price-currencySymbol">$</span>222.00</span>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p5.jpg" alt="">
                                        <div class="pro-badge">
                                            <p class="out-of-stock">Out of Stock</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Headset</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>32.00</span></del>
                                                        <ins><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>28.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p6.jpg" alt="">
                                    </div>
                                    <div class="sp-details">
                                        <h4>Gaming Controller</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>42.00</span></del>
                                                        <ins><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>38.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p6.jpg" alt="">
                                        <div class="pro-badge">
                                            <p class="out-of-stock">Out of Stock</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Headset</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>32.00</span></del>
                                                        <ins><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>28.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p3.jpg" alt="">
                                    </div>
                                    <div class="sp-details">
                                        <h4>Gaming Controller</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>42.00</span></del>
                                                        <ins><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>38.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p1.jpg" alt="">
                                        <div class="pro-badge">
                                            <p class="sale">Sale</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Gaming Headset</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>42.00</span></del>
                                                        <ins><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>38.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p4.jpg" alt="">
                                        <div class="pro-badge">
                                            <p class="sale">Sale</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Camera Lens</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>52.00</span></del>
                                                        <ins><span><span
                                                                        class="woocommerce-Price-currencySymbol">$</span>48.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p2.jpg" alt="">
                                        <div class="pro-badge">
                                            <p class="hot">Hot</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Novo Headset A30</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <span><span class="woocommerce-Price-currencySymbol">$</span>122.00</span>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="/web/images/home/p5.jpg" alt="">
                                    </div>
                                    <div class="sp-details">
                                        <h4>TV Monitor Screen</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <span><span class="woocommerce-Price-currencySymbol">$</span>222.00</span>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                        class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Popular Section End -->

<!-- Coupon Discount Start -->
<section class="coupone-discount-sec" id="coupone">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-5">
                <div class="dis-product-detail">
                    <h4>Бестселлеры 2023 года
                    </h4>
                    <h4> Джей Кристофф «Империя вампиров»
                    </h4>
                    <div class="product-price clearfix">
                                <span class="price">
                                    <span><span class="woocommerce-Price-currencySymbol"></span>₽680</span>
                                </span>
                    </div>
                    <div id="countdown-coupone" class="clearfix" data-day="27" data-month="09" data-year="2023"></div>
                    <form method="post"
                          action="<?= Url::to(['carts/add']); ?>">
                        <input type="hidden" name="id"
                               value="21>">
                        <?=
                        Html::hiddenInput(
                            Yii::$app->request->csrfParam,
                            Yii::$app->request->csrfToken
                        );
                        ?>
                        <button type="submit" style="display: inline-block;
                                                    background: transparent;
                                                    color: #000;
                                                    font-family: 'Poppins', sans-serif;
                                                    font-size: 14px;
                                                    letter-spacing: 2.8px;
                                                    font-weight: 700;
                                                    text-transform: uppercase;
                                                    border: 2px solid #000000;
                                                    border-radius: 0;
                                                    height: 60px;
                                                    line-height: .8;
                                                    z-index: 2;
                                                    padding: 23px 36px;
                                                    overflow: hidden;
                                                    position: relative;
                                                   -webkit-transition: all 0.4s ease;
                                                    -o-transition: all 0.4s ease;
                                                    transition: all 0.4s ease;">
                            <i class="fa fa-shopping-cart"></i>
                            Добавить в корзину
                        </button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-md-7">
                <div class="dis-pro-thumb">
                    <img style="height: 500px; width: 350px" src="/web/images/home/088.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- shape -->
    <div class="couple-shape"><img src="/web/images/home/shape3.png" alt=""></div>
</section>
<!-- Coupon Discount End -->

<!-- News Section Start -->
<section class="news-section">

    <!-- Shape Round -->
    <div class="shape-round">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <!-- Shape Round -->

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="sec-title">Интересные статьи</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-news">
                    <div class="news-thumb">
                        <img style="height: 500px; width: 350px" src="/web/images/home/blog/33.png" alt="">
                    </div>
                    <div class="news-details">
                        <span class="post-meta"><a href="#">Уютные и добрые, загадочные и фантастические книги для зимних каникул</a></span>
                        <h4>
                            <p>
                                Если после новогодней суматохи вам захочется отдохнуть и полежать в обнимку с интересной книгой, мы предлагаем подборку литературы для уютных зимних дней и вечеров.
                            </p>
                        </h4>
                        <a class="read-more" href="/web/site/blog_details?id=1>">Читать дальше</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-news">
                    <div class="news-thumb">
                        <img style="height: 500px; width: 350px" src="/web/images/home/blog/099.png" alt="">
                    </div>
                    <div class="news-details">
                        <span class="post-meta"><a href="#">Как правильно хранить книги</a> </span>
                        <h4>
                            <a href="single-post.html">
                                Если вы активный пользователь электронных «читалок», то вопрос о хранении книг решается
                                очень просто — скачал, сохранил.
                            </a>
                        </h4>
                        <a class="read-more" href="/web/site/blog_details?id=2>">Читать дальше</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-news">
                    <div class="news-thumb">
                        <img style="height: 500px; width: 350px" src="/web/images/home/blog/000.png" alt="">
                    </div>
                    <div class="news-details">
                        <span class="post-meta"><a
                                    href="#">Как в разных странах людей приобщали к чтению книг</a></span>
                        <h4>
                            <a href="single-post.html">
                                В последнее время популярность набирает буккроссинг. Это процесс обмена книгами...
                            </a>
                        </h4>
                        <a class="read-more" href="/web/site/blog_details?id=3>">Читать дальше</a>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </div>
</section>
<!-- News Section End -->

<!-- Client Section Start -->

<!-- Client Section End -->


<!-- shape -->
</section>
<!-- Mailchimp Section End -->
