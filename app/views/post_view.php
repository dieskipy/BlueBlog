<div class="container justify-content-center" style="margin-bottom: 50px">
    <div class="col-md-auto">
        <div class="card">
            <div class="d-flex align-items-end">
                <p><i class="fas fa-calendar-alt nomargin"> <?= $data["date"] ?> </i></p>
                <p><i class="fas fa-eye"> <?= $data["views"] ?></i></p>
            </div>
            <img src="<?= $data["img"] ?>" class="img-fluid" alt="...">
            <div class="card-body">
                <h2 class="post-title"><?= $data["title"] ?></h2>
                <p><?= $data["text"] ?></p>
            </div>
        </div>
        <?php if ($isAllowed): ?>
            <a class="btn btn-secondary btn-block" href="/post?<?= $data["num"] ?>/edit_post" role="button">Редактировать</a>
        <?php endif; ?>
    </div>
</div>



