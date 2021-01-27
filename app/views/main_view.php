
<!--//$data - array of pics-->
<div class="container slider">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php $style = 'active' ?>
            <?php foreach ($data["img"] as $pic ): ?>
                <div class="carousel-item <?=$style?>">
                    <img src="<?=$pic["img"]?>" class="d-block w-100" alt="...">
                </div>
                <?php $style = '' ?>
            <?php endforeach; ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="container" style="margin-bottom: 100px; margin-top: 100px;background: #d1e2f0; padding: 10px;border-radius: 5px;">
    <div class="row">
        <div class="col">
            <div class="single-post">
                <h3 class="post-lil-title">Откуда</h3>
                <h2 class="post-title">Название BlueBlog</h2>
                <p>Из названия можно подумать, что это блог о голубом цвете, но Blue с английского языка имеет и другой перевод, а именно - "грустный". Так что если вас где-нибудь заграницей спросят "Why you are so blue?" - неспешите возмущаться, может вам просто предложат повеселиться :) </p>
            </div>
        </div>
    </div>
</div>
<?php include 'app/views/news_view.php'; ?>