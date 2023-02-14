<?php
use yii\helpers\Url;
use yii\helpers\Html;

?>
<section class="cart-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form class="woocommerce-cart-form" action="<?= Url::to(['carts/update']); ?>" method="post">
                    <?=
                    Html::hiddenInput(
                        Yii::$app->request->csrfParam,
                        Yii::$app->request->csrfToken
                    );
                    ?>
                    <?php
                    if (!empty($carts)): ?>
                    <table class="cart-table">
                        <thead>
                        <tr>
                            <th class="product-name-thumbnail">Название товара</th>
                            <th class="product-price">Цена товара</th>
                            <th class="product-quantity">Колличество</th>
                            <th class="product-total">Цена всего</th>
                            <th class="product-remove">&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($carts['products'] as $id => $item): ?>
                        <tr class="cart-item">
                            <td class="product-thumbnail-title">
                                <a href="#">
                                    <img src="/web<?= $item['image']; ?>" alt="">
                                </a>
                                <a class="product-name" href="#"><?= $item['name']; ?></a>
                            </td>
                            <td class="product-unit-price">
                                <div class="product-price clearfix">
                                                <span class="price">
                                                    <span><span class="woocommerce-Price-currencySymbol">Р</span><?= $item['price']; ?></span>
                                                </span>
                                </div>
                            </td>
                            <td class="product-quantity clearfix">
                                <div class="quantityd clearfix">
                                    <button class="qtyBtn btnMinus"><span>-</span></button>
                                    <input name="qty" value="<?= $item['count']; ?>" title="Qty" class="input-text qty text carqty" type="text">
                                    <?=
                                    Html::input(
                                        'text',
                                        'count['.$id.']',
                                        $item['count'],
                                        ['class' => 'input-text qty text carqty']
                                    );
                                    ?>
                                    <button class="qtyBtn btnPlus">+</button>
                                </div>
                            </td>
                            <td class="product-total">
                                <div class="product-price clearfix">
                                                <span class="price">
                                                    <span><span class="woocommerce-Price-currencySymbol">Р</span><?= $item['price'] * $item['count']; ?></span>
                                                </span>
                                </div>
                            </td>
                            <td class="product-remove">
                                <a href="<?= Url::to(['carts/remove', 'id' => $id]); ?>" class="text-danger">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>

                        <tr>
                            <td colspan="6" class="actions">
                                <button type="submit" class="button clear-cart">
                                    <a href="<?= Url::to(['carts/clear']); ?>" class="text-danger">
                                        Очистить корзину
                                    </a>
                                </button>
                                <button type="submit" class="button update">
                                        Обновить корзину
                                    </button>

                            </td>
                        </tr>

                        </tbody>
                    </table>

                    <div class="row">
                        <div class="col-md-6">

                        </div>
                        <div class="col-md-6">
                            <div class="cart-totals">
                                <h2>Итого</h2>
                                <table class="shop-table">
                                    <tbody>
                                    <tr class="order-total">

                                        <td data-title="Subtotal">
                                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Р</span><?= $carts['amount']; ?></span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="wc-proceed-to-checkout">
                                    <a href="/web/site/checkout" class="checkout-button" >Перейти к оформлению</a>
                                </div>
                            </div>
                            <?php else: ?>
                                <p>Ваша корзина пуста</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>