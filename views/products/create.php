<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Products */
/* @var $categories app\models\Products */

$this->title = 'Создание книги';
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<br>
<br>
<br>
<br>
<br>
<div class="products-create container">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form_create', [
        'model' => $model,
        'categories' => $categories,
    ]) ?>

</div>
