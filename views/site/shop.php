<?php
/** @var string $products */
/** @var string $query_cat */

use yii\helpers\Html;
use yii\helpers\Url;

?>
</br>
</br>
</br>
<!-- Shop Section Start -->
<section class="shop-left-sidebar">
    <?php if (Yii::$app->session->hasFlash('success')): ?>
        <div class="alert alert-success">
            <?= Yii::$app->session->getFlash('success') ?>
        </div>
    <?php endif; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2">
                <div class="shop-sidebar">
                    <aside class="widget widget-categories">
                        <h3 class="widget-title">Жанры</h3>
                        <ul>
                            <li><a href="/web/site/shop?cat_id=1">Детектив</a><i class="twi-angle-down1"></i></li>
                            <li><a href="/web/site/shop?cat_id=5">Фантастика</a><i class="twi-angle-down1"></i></li>
                            <li><a href="/web/site/shop?cat_id=6">Триллер</a><i class="twi-angle-down1"></i></li>
                            <li><a href="/web/site/shop?cat_id=7">Мистика</a><i class="twi-angle-down1"></i></li>
                            <li><a href="/web/site/shop?cat_id=10">Боевик</a><i class="twi-angle-down1"></i></li>
                            <li><a href="/web/site/shop?cat_id=9">Лучшее</a></li>
                        </ul>
                    </aside>

                </div>
            </div>
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-md-7">

                    </div>

                </div>
                <div class="row">
                    <?php foreach ($products as $product): ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-shop-product">
                                <div class="sp-thumb">
                                    <a href="/web/site/single_product?id=<?= $product->id ?>">
                                    <?= \yii\helpers\Html::img("@web/{$product->image}", ['style' => 'width:    250px; height:350px']) ?>
                                    </a>
                                </div>

                                <div class="sp-details">
                                    <h4><?= $product->name ?></h4>
                                    <div class="product-price clearfix">
                                            <span class="price">
                                                <ins><span><span
                                                                class="woocommerce-Price-currencySymbol"></span><?= $product->price ?>Р</span></ins>
                                            </span>
                                    </div>
                                    <div class="sp-details-hover" style="width: 250px;height: 100px" >
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
                                                <h6 style="margin-top: -13px">Добавить в корзину</h6>
                                            </button>

                                        </form>
                                        <!--<a class="sp-cart" href="#"><i class="twi-cart-plus"></i><span>Добавить в корзину</span></a>
                                        <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-md-12 mt-20">
                        <div class="goru-pagination text-center clearfix">
                            <a class="prev" href="#"><i class="twi-long-arrow-alt-left"></i></a>
                            <span class="current">1</span>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a href="#">5</a>
                            <a class="next" href="#"><i class="twi-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shop Section End -->
