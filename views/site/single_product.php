
<?php
/** @var string $product */
/** @var array $product_cat */
/** @var array $comments */
/** @var array $model */

use yii\helpers\Html;
use yii\helpers\Url;

?>




<!-- Shop Section Start -->
<section class="single-product-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12">
                <img src="/web<?= $product->image ?>" width="350px" height="450px">
            </div>
            <div class="col-lg-5 col-md-12">
                <div class="sin-product-details">
                    <h3><?= $product->name ?></h3>

                    <div class="product-price clearfix">
                                <span class="price">
                                    <span><span class="woocommerce-Price-currencySymbol">₽</span><?= $product->price ?></span>
                                </span>
                    </div>
                    <div size="70px" class="pro-excerp">
                        <p><?= $product->description ?></p>
                    </div>

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
                    <br/>

                </div>
            </div>
        </div>
        <div class="row"><div class="col-lg-12"><div class="divider"></div></div></div>
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="product-tabarea">
                    <ul class="nav nav-tabs productTabs" id="productTab" role="tablist">

                        <li class="nav-item">
                            <a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Комментарии</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="productTabContent">

                        <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="descriptions-tab">
                            <div class="comment-area">

                                <?php
                                use yii\widgets\ActiveForm;

                                if (Yii::$app->user->isGuest) {
                                    echo '<p>Зарегистрируйтесь, чтобы оставить комментарий</p>';
                                } else {
                                    $form = ActiveForm::begin([
                                        'action' => Url::to(['site/single_product', 'id' => $product['id']]),
                                        //'action' => ['site/single_product'],// Replace 'your-controller-action' with the actual URL for submitting the form
                                        'method' => 'post',
                                        'options' => ['class' => 'row comment-form'],
                                    ]);
                                    ?>

                                    <div class="col-lg-12 col-md-12">
                                        <?= $form->field($model, 'description')->textarea(['placeholder' => 'Reviews']) ?>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <?= Html::submitButton('Submit Review', ['class' => 'btn btn-primary']) ?>
                                        </div>
                                    </div>
                                    <?php ActiveForm::end(); ?>
                                <?php } ?>
                                <?php foreach ($comments as $comment): ?>
                                <ol class="comment-list">
                                    <li>
                                        <div class="single-comment">
                                            <img src="/web/images/blog/c1.jpg" alt="">
                                            <h5><a href="#"><?= $comment->id_user ?></a><span><?= $comment->time_stamp ?></span></h5>
                                            <div class="comment">
                                                <p>
                                                    <?= $comment->description ?>
                                                </p>
                                            </div>
                                        </div>
                                    </li>

                                </ol>

                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="related-product-area">
                                    <h3>Рекомендуемые книги</h3>
                                    <div class="related-slider owl-carousel">
                                        <?php foreach ($product_cat as $product): ?>

                                        <div class="single-shop-product">
                                            <div class="sp-thumb">
                                                <img src="/web<?= $product->image ?>" alt="" href="/web/site/single_product?id=<?= $product->id ?>" class="">

                                            </div>
                                            <div class="sp-details">
                                                <h4><?= $product->name ?></h4>
                                                <div class="product-price clearfix">
                                            <span class="price">
                                                <ins><span><span class="woocommerce-Price-currencySymbol">₽</span><?= $product->price ?></span></ins>

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
                                        <?php endforeach; ?>
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