<!--//newsdata - array of posts info: news - structure of one post (date, views, img, title, lemma, text - not included)-->

<div class="grid-posts">
    <div class="container">
        <div class="row">
            <?php foreach ($data["news"] as $news): ?>
            <div class="col-md-6">
                <div class="card">
                    <div class="d-flex align-items-end">
                        <p><i class="fas fa-calendar-alt nomargin"> <?=$news["date"]?> </i></p>
                        <p><i class="fas fa-eye"> <?=$news["views"]?> </i></p>
                    </div>
                    <img src="<?=$news["img"]?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="/post?<?=$news["num"]?>/get_post"><h5 class="post-title"><?=$news["title"]?></h5></a>
                        <p><?=$news["lemma"]?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

