<?php
?>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="col-lg-3 col-md-6 col-sm-6">
    <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
        <div class="card-body text-center"><i class="i-Add-User"></i>
            <div class="content">
                <p class="text-muted mt-2 mb-0"><ya-tr-span data-index="8-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="New Leads" data-translation="Новые пользователи" data-ch="0" data-type="trSpan"><a href="/web/users">Пользователи</a></ya-tr-span></p>
                <p class="text-primary text-24 line-height-1 mb-2"><?= \app\models\Users::find()->count() ?></p>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
    <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
        <div class="card-body text-center"><i class="i-Financial"></i>
            <div class="content">
                <p class="text-muted mt-2 mb-0"><ya-tr-span data-index="9-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Sales" data-translation="Продажи" data-ch="0" data-type="trSpan"><a href="/web/products">Книги</a></ya-tr-span></p>
                <p class="text-primary text-24 line-height-1 mb-2"><?= \app\models\Products::find()->count() ?></p>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
    <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
        <div class="card-body text-center"><i class="i-Checkout-Basket"></i>
            <div class="content">
                <p class="text-muted mt-2 mb-0"><ya-tr-span data-index="10-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Orders" data-translation="Заказы" data-ch="0" data-type="trSpan" data-selected="false"><a href="/web/orders">Заказы</a></ya-tr-span></p>
                <p class="text-primary text-24 line-height-1 mb-2"><?= \app\models\Orders::find()->count() ?></p>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
    <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
        <div class="card-body text-center"><i class="i-Checkout-Basket"></i>
            <div class="content">
                <p class="text-muted mt-2 mb-0"><ya-tr-span data-index="10-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Orders" data-translation="Заказы" data-ch="0" data-type="trSpan" data-selected="false"><a href="/web/posts">Посты</a></ya-tr-span></p>
                <p class="text-primary text-24 line-height-1 mb-2"><?= \app\models\Posts::find()->count() ?></p>
            </div>
        </div>
    </div>
</div>

