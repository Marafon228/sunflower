<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap5\ActiveForm */
/* @var $modelReg app\models\LoginForm */
/* @var $modelLogin app\models\LoginForm */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<br/>
<br/>
<br/>
<br/>
<br/>


<section class="page-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <span class="round-shape"></span>
                <h2 class="banner-title">Авторизация/Зарегитсрация</h2>
                <div class="bread-crumb"><a href="index.html">Главная</a> </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner End -->

<!-- Login Register Section Start -->
<section class="login-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <h3 class="sec-title">Войдите в свою учетную запись</h3>

                <div class="login-form">
                    <?php $form = ActiveForm::begin(); ?>

                    <?= $form->field($modelLogin, 'email')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($modelLogin, 'password')->passwordInput() ?>

                    <?= $form->field($modelLogin, 'rememberMe')->checkbox() ?>

                    <div class="form-group">
                        <div class="offset-lg-1 col-lg-11">
                            <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                        </div>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>

            </div>
            <div class="col-lg-6 col-md-6">
                <h3 class="sec-title">Зарегистрируйте учетную запись прямо сейчас</h3>

                <div class="register-form">
                    <?php $form = ActiveForm::begin(); ?>

                    <?= $form->field($modelReg, 'fio')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($modelReg, 'email')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($modelReg, 'password')->passwordInput(['maxlength' => true]) ?>

                    <?= $form->field($modelReg, 'passwordConfirm')->passwordInput(['maxlength' => true]) ?>

                    <?= $form->field($modelReg, 'phone')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($modelReg, 'address')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($modelReg, 'agree')->checkbox() ?>

                    <div class="form-group">
                        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>

            </div>
        </div>
    </div>
</section>