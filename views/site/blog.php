<?php
/* @var $posts app\models\Posts */
?>
<br>
<br>
<br>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="sec-title">Интересные статьи</h2>
        </div>
    </div>
    <div class="row">
        <?php foreach ($posts as $post): ?>
        <div class="col-lg-4 col-md-6">
            <div class="single-news">
                <div class="news-thumb">
                    <img style="height: 500px; width: 350px" src="/web<?= $post->image ?>" alt="<?=$post->name?>">
                </div>
                <div class="news-details">

                    <h4>
                        <p>
                            <?= $post->name ?>
                        </p>
                    </h4>
                    <a class="read-more" href="/web/site/blog_details?id=<?= $post->id  ?>">Читать</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

</div>
</div>
