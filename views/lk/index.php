<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = Yii::$app->name;

/** @var app\controllers\SiteController $orders */


?>

<!-- breadcrumb-section end -->
<!-- product tab start -->
<style>
    .myaccount-tab-menu a {
        display: block;
    }
</style>
<div class="my-account pt-80 pb-50">
    <div class="container">
        <div class="row">
            <!-- My Account Tab Menu Start -->
            <div class="col-lg-3 col-12 mb-30">
                <h3 class="title text-capitalize mb-30 pb-25">Мой аккаунт</h3>
                <div class="myaccount-tab-menu nav" role="tablist" style="display: block">
                    <a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Заказы</a>
                    <a href="#account-info" data-toggle="tab" class="active"><i class="fa fa-user"></i> Детали аккаунта</a>
                </div>
            </div>
            <!-- My Account Tab Menu End -->

            <!-- My Account Tab Content Start -->
            <div class="col-lg-9 col-12 mb-30">
                <div class="tab-content" id="myaccountContent">
                    <!-- Single Tab Content Start -->

                    <!-- Single Tab Content End -->

                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade active show"
                            id="account-info"
                            role="tabpanel">

                                <div class="myaccount-content">
                                    <h3>Детали аккаунта</h3>
                                    <address>
                                        <p>ФИО: <strong><?= Yii::$app->user->identity->fio ?></strong></p>
                                        <p>Адрес: <?= Yii::$app->user->identity->address ?></p>
                                        <p>Телефон: <?= Yii::$app->user->identity->phone ?></p>
                                        <p>Email: <?= Yii::$app->user->identity->email ?></p>
                                    </address>

                                </div>

                    </div>



                    <div class="tab-pane fade" id="orders" role="tabpanel">

                        <div class="myaccount-content">
                            <h3>Заказы</h3>
                            <div class="myaccount-table table-responsive text-center">
                                <table class="table table-bordered">
                                    <thead class="thead-light">
                                    <tr>
                                        <th>Заказ</th>
                                        <th>Дата создания</th>
                                        <th>Статус</th>
                                        <th>Сумма</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach ($orders as $order) {
                                        $number = 1;
                                        /*if ($order->status == 0) {
                                            $tekOrder = "Новый ";
                                        } elseif ($order->status == 1) {
                                            $tekOrder = "Подтверждён";
                                        } else {
                                            $tekOrder = "Отменён";
                                        }*/
                                        echo '
                                        <tr>
                                            <td>' . $number . '</td>
                                            <td>' . $order->date . '</td>
                                            <td>' . $order->status . '</td>
                                            <td>' . $order->over_price . ' ₽</td>
                                            
                                        </tr>
                                        ';
                                        $number++;
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>


                    <?php
                    if (Yii::$app->user->identity->role == 'Предприниматель')
                        echo '
                        <button href="/web/products/creates"  type="submit" style="display: inline-block;
                                                    background: transparent;
                                                    color: #000;
                                                    font-family: Poppins, sans-serif;
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
                                <a href="/web/products/creates">
                                    Добавить книгу
                                </a>
                                
                            </button>
                        
                        ';
                    ?>


                    <!-- Single Tab Content End -->
                </div>
            </div>
            <!-- My Account Tab Content End -->
        </div>
    </div>
</div>