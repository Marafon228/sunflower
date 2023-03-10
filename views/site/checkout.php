<?php
/** @var array $baskets */
/** @var array $model */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

?>

<section class="checkout-section">
    <div class="container">
        <?php if (!empty($carts)): ?>
            <form method="post">
                <?php $form = ActiveForm::begin(); ?>
                <div class="row">

                    <div class="col-md-6">

                        <div class="woocommerce-billing-fields">
                            <h3>Информация о платеже</h3>
                            <div class="row">

                                <p class="col-lg-6">
                                    <label>ФИО</label>
                                    <input placeholder="" name="first_name" type="text"
                                           value="<?= Yii::$app->user->identity->fio ?>" disabled>
                                </p>
                                <p class="col-lg-12">
                                    <label>Номер телефона</label>
                                    <input placeholder="" name="company" type="text"
                                           value="<?= Yii::$app->user->identity->phone ?>" disabled>
                                </p>
                                <p class="col-lg-12">
                                    <label>Адрес</label>
                                    <input placeholder="" name="address_1" type="text"
                                           value="<?= Yii::$app->user->identity->address ?>" disabled>
                                </p>


                                <p class="col-lg-6">
                                    <label>Email</label>
                                    <input placeholder="" name="billing_email" type="email"
                                           value="<?= Yii::$app->user->identity->email ?>" disabled>
                                </p>


                                <p class="col-lg-6">

                                    <?= $form->field($model, 'description')->textArea(['style'=>'width:100%']) ?>

                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="woocommerce-checkout-review-order" id="order_review">
                            <h3>Ваш заказ</h3>
                            <table class="check-table woocommerce-checkout-review-order-table">
                                <thead>
                                <tr>
                                    <th class="product-name">Товар</th>
                                    <th class="product-total"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($carts['products'] as $id => $item): ?>
                                    <tr class="cart-item">
                                        <td class="product-name"><?= $item['name']; ?> x <?= $item['count']; ?></td>
                                        <td class="product-total">
                                            <div class="product-price clearfix">
                                                <span class="price">
                                                    <span><span class="woocommerce-Price-currencySymbol">Р</span><?= $item['price']; ?></span>
                                                </span>
                                            </div>
                                        </td>
                                    </tr>

                                <?php endforeach; ?>
                                <tfoot>
                                <tr class="cart-subtotal">
                                    <th>Доставка</th>
                                    <td>
                                        <div class="product-price clearfix">
                                                <span class="price">
                                                    <span><span class="woocommerce-Price-currencySymbol">Р</span>0</span>
                                                </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="order-total">
                                    <th>Итого</th>
                                    <td>
                                        <div class="product-price clearfix">
                                                <span class="price">
                                                    <span><span class="woocommerce-Price-currencySymbol">Р</span><?= $carts['amount']; ?></span>
                                                </span>
                                        </div>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                            <div class="woocommerce-checkout-payment" id="payment">
                                <ul class="wc_payment_methods payment_methods methods">

                                    <li class="wc_payment_method payment_method_paypal">
                                        <input value="paypal" name="payment_method" class="input-radio"
                                               id="payment_method_paypal" type="radio" checked>
                                        <label for="payment_method_paypal">Оплата <i class="twi-cc-mastercard"></i><i
                                                    class="twi-cc-visa"></i><i class="twi-cc-paypal"></i><i
                                                    class="twi-cc-discover"></i></label>
                                        <div class="payment_box payment_method_paypal">
                                            <p>
                                                Оплата банкоской картой
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="place-order">

                                <?= Html::submitButton('Оплатить заказ', ['class' => 'button']) ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php ActiveForm::end(); ?>
            </form>
        <?php else: ?>
            <p>У вас ничего нет в корзине</p>
        <?php endif; ?>
    </div>
</section>