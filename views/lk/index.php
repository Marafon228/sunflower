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
    .modal {
        display: none; /* Hide the modal by default */
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
    }

    .modal-content {
        background-color: #fefefe;
        margin: 10% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 50%;
        max-width: 400px;
    }
    .modal-content-2{
        background-color: #fefefe;
        margin: 10% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        max-width: 1200px;
    }

    .close {
        float: right;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    /* Style the button that opens the modal */
    #openModal {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
    }

    /* Style the subscription button inside the modal */
    .subscribe-btn {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
    }

    .subscribe-btn:hover {
        opacity: 0.8;
    }

    .ulli {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .myaccount-tab-menu a {
        display: block;
    }
</style>
<br>
<br>
<br>
<br>
<br>
<div class="my-account pt-80 pb-50">
    <div class="container">
        <div class="row">
            <!-- My Account Tab Menu Start -->
            <div class="col-lg-3 col-12 mb-30">
                <h3 class="title text-capitalize mb-30 pb-25">Мой аккаунт</h3>
                <div class="myaccount-tab-menu nav" role="tablist" style="display: block">
                    <a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Заказы</a>
                    <a href="#account-info" data-toggle="tab" class="active"><i class="fa fa-user"></i> Детали аккаунта</a>
                    <?php
                    if (Yii::$app->user->identity->role == 'Предприниматель') {
                        echo '
                        <a href="#premiym" data-toggle="tab"><i class="fa fa-user"></i> Премиум</a>
                        <a href="#book" data-toggle="tab"><i class="fa fa-user"></i> Книги</a>
                    ';
                    }
                    ?>

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
                                        $number = $order->id;
                                        if ($order->status == 1) {
                                            $tekOrder = "Новый ";
                                        } elseif ($order->status == 2) {
                                            $tekOrder = "Подтверждён";
                                        } else {
                                            $tekOrder = "Отменён";
                                        }
                                        echo '
                                        <tr>
                                            <td>' . $number . '</td>
                                            <td>' . $order->date . '</td>
                                            <td>' . $tekOrder . '</td>
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

                    <div class="tab-pane fade" id="premiym" role="tabpanel">

                        <div class="myaccount-content">
                            <h3>Оформить премиум аккаунт</h3>
                            <div class="myaccount-table table-responsive text-left">
                                <p>
                                    Предлагая эти премиальные функции, вы можете создать взаимовыгодную экосистему, в
                                    которой авторы могут демонстрировать свои работы, получать дополнительную поддержку,
                                    в то время как наш веб-сайт будет способствовать развитию процветающего сообщества
                                    авторов и читателей.
                                </p>
                                <h3>Преимущества премиум аккаунта</h3>
                                <ul>
                                    <li>Профили авторов премиум-класса становятся более заметными на веб-сайте, облегчая
                                        читателям поиск их книг.
                                    </li>
                                    <li>Они могут размещать книги, которые будут отображаться на видном месте на
                                        веб-сайте.
                                    </li>
                                    <li>Авторы могут размещать неограниченное количество книг.</li>
                                </ul>
                            </div>

                            <br>
                            <br>
                            <br>

                            <button id="openModal" href="/web/products/creates" type="submit" style="display: inline-block;
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

                                Купить премиум


                            </button>
                        </div>

                    </div>

                    <div class="tab-pane fade" id="book" role="tabpanel">

                        <div class="myaccount-content">

                            <?php
                            $products = \app\models\Products::find()->where(['id_user' => Yii::$app->user->identity->id])->all();
                            if (Yii::$app->user->identity->role == 'Предприниматель') {
                                echo '
                            <h3>Мои книги</h3>
                            
                        ';
                                foreach ($products as $prod) {
                                    echo '
                            <p> ' . $prod->name . ' </p>
                            ';
                                }
                                echo '
                        <button href="/web/products/create"  type="submit" style="display: inline-block;
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
                                <a href="/web/products/create">
                                    Добавить книгу
                                </a>
                                
                            </button>
                            
                            </br>
                            <button onclick="openModal()">Памятка</button>
                            
                            <div id="myModal" class="modal">
        <div class="modal-content-2">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Памятка для добавления книги</h2>
<p>Дорогой автор,</p>
<p>Мы рады приветствовать вас в нашем сообществе и благодарим за ваш интерес к публикации вашей книги на нашем сайте. Чтобы облегчить процесс добавления вашей книги и улучшить ее видимость, просим вас ознакомиться с некоторыми правилами и рекомендациями:</p>

<h3>1. Качество и оформление</h3>
<p>Убедитесь, что ваша книга имеет высокое качество и грамотное оформление. Проверьте ее на наличие орфографических и грамматических ошибок, а также убедитесь, что она отформатирована в соответствии с требованиями.</p>

<h3>2. Информация о книге</h3>
<p>Предоставьте полную и точную информацию о вашей книге. Включите название, автора, жанр, краткое описание сюжета и другие детали, которые помогут читателям понять, о чем ваша книга.</p>

<h3>3. Обложка книги</h3>
<p>Прикрепите привлекательную и высококачественную обложку вашей книги. Обложка является визуальным представлением вашего произведения и может привлечь внимание потенциальных читателей.</p>
<h3>4. Авторская информация</h3>
<p>Добавьте небольшую информацию о себе как авторе. Расскажите о своем опыте, интересах и достижениях. Это поможет читателям узнать вас лучше и создать связь с вашим творчеством.</p>

<h3>5. Защита авторских прав</h3>
<p>Убедитесь, что вы обладаете всеми необходимыми правами на публикацию книги и что она не нарушает авторские права других лиц.</p>
<p>Мы надеемся, что эти рекомендации помогут вам успешно добавить вашу книгу на наш сайт. Если у вас возникнут вопросы или проблемы, не стесняйтесь обращаться к нам для получения помощи.</p>

<p>С уважением,</p>
<p>Команда сайта</p>
        </div>
    </div>
                        ';

                            }
                            ?>
                        </div>

                    </div>


                    <br>
                    <br>
                    <br>



                    <div id="modal" class="modal">
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <h2>Премиум подписка</h2>
                            <p>Пепвый месяц 50р</p>
                            <p>Далее 499р/мес</p>
                            <ul class="wc_payment_methods payment_methods methods ulli">

                                <li class="wc_payment_method payment_method_paypal">
                                    <input value="paypal" name="payment_method" class="input-radio"
                                           id="payment_method_paypal" type="radio" checked="">
                                    <label for="payment_method_paypal">Оплата <i class="twi-cc-mastercard"></i><i
                                                class="twi-cc-visa"></i><i class="twi-cc-paypal"></i><i
                                                class="twi-cc-discover"></i></label>
                                    <div class="payment_box payment_method_paypal">
                                        <p>
                                            Оплата банкоской картой
                                        </p>
                                        <input type="text" name="card_number" pattern="[0-9]{4} [0-9]{4} [0-9]{4} [0-9]{4}" placeholder="Введите номер карты" required>
                                        <small>Пример формата: 1234 5678 9012 3456</small>
                                    </div>
                                </li>
                            </ul>


                            <!-- Add your subscription form or additional content here -->
                            <button class="subscribe-btn">Купить подписку</button>
                        </div>
                    </div>


                    <!-- Single Tab Content End -->
                </div>
            </div>
            <!-- My Account Tab Content End -->
        </div>
    </div>
</div>
<script>
    // Get the modal element
    var modal = document.getElementById("modal");

    // Get the button that opens the modal
    var openModalBtn = document.getElementById("openModal");

    // Get the <span> element that closes the modal
    var closeBtn = document.getElementsByClassName("close")[0];

    // Open the modal when the button is clicked
    openModalBtn.onclick = function () {
        modal.style.display = "block";
    };

    // Close the modal when the <span> (x) is clicked
    closeBtn.onclick = function () {
        modal.style.display = "none";
    };

    // Close the modal when the user clicks outside of it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };

</script>

<script>
    function openModal() {
        var modal = document.getElementById("myModal");
        modal.style.display = "block";
    }

    function closeModal() {
        var modal = document.getElementById("myModal");
        modal.style.display = "none";
    }

    // Close the modal when the user clicks on the close button
    var closeBtn = document.getElementsByClassName("close")[0];
    closeBtn.addEventListener("click", closeModal);

    // Close the modal when the user clicks outside of it
    window.addEventListener("click", function (event) {
        var modal = document.getElementById("myModal");
        if (event.target === modal) {
            closeModal();
        }
    });
</script>

<script>
    // Находим кнопку "Купить подписку" и модальное окно
    var subscribeButton = document.querySelector('.subscribe-btn');
    var modal = document.getElementById('modal');

    // Добавляем обработчик события при нажатии на кнопку
    subscribeButton.addEventListener('click', function() {
        // Выводим уведомление о том, что подписка оформлена
        alert('Подписка оформлена!');

        // Скрываем модальное окно
        modal.style.display = 'none';
    });
</script>
