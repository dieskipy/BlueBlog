<!--//newsdata - array of posts info: news - structure of one post (date, views, img, title, lemma, text - not included)-->
<!--Ascend - возрастание, Descend - убывание-->


<div class="container"
     style="margin-bottom: 10px; margin-top: 10px;background: #d1e2f0; padding: 10px;border-radius: 5px;">
    <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle" href="" role="button" id="dropdownMenuLink" data-toggle="dropdown"
           aria-haspopup="true" aria-expanded="false">
            Сортировать новости
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="##" id="sortViewsDescending">По просмотрам по убыванию</a>
            <a class="dropdown-item" href="##" id="sortViewsAscending">По просмотрам по возрастанию</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="##" id="sortDateDescending">По дате по убыванию</a>
            <a class="dropdown-item" href="##" id="sortDateAscending">По дате по возрастанию</a>

        </div>
    </div>

</div>


<div class="grid-posts">
    <div class="container">
        <div class="row" id="mygrid">
            <?php foreach ($data["news"] as $news): ?>
                <div class="col-md-6" data-date="<?= $news["date"] ?>" data-views="<?= $news["views"] ?>">
                    <div class="card">
                        <div class="d-flex align-items-end">
                            <p><i class="fas fa-calendar-alt nomargin"> <?= $news["date"] ?> </i></p>
                            <p><i class="fas fa-eye"> <?= $news["views"] ?> </i></p>
                        </div>
                        <img src="<?= $news["img"] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="/post?<?= $news["num"] ?>/get_post"><h5
                                        class="post-title"><?= $news["title"] ?></h5></a>
                            <p><?= $news["lemma"] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

