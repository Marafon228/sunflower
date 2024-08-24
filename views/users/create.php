<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Users */

$this->title = 'Пользователи';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<br>
<br>
<br>
<br>
<br>
<div class="users-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
