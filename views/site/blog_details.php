<?php
/** @var string $blog */


use yii\helpers\Html;
use yii\helpers\Url;
use app\assets\AppAsset;

$this->title = Yii::$app->name;
AppAsset::register($this);
/* Стили блока баннера */
$this->registerCss("blog-content {
  width: 100%;
 }");

?>
<section class="blog-details-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-blog">
                    <div align="center" class="blog-thumb">
                        <img src="/web<?= $blog->image ?>" alt="" style="height: 500px; width: 650px">
                    </div>

                    <div class="row">

                        <div class="col-lg-9 col-md-9">
                            <div class="blog-content">
                                <h3 class="blog-title">
                                    <?= $blog->name ?>
                                </h3>
                                <p>

                                    <?php
                                    $description = explode("\n", $blog->description);
                                    foreach ($description as $line) {
                                        echo "<p>" . $line . "</p>";
                                    }
                                    ?>

                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>