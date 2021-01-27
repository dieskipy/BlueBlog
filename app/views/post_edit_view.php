<div class="container" style="margin-bottom: 100px; margin-top: 100px;background: #d1e2f0; padding: 10px;border-radius: 5px;">
    <form class="was-validated" action="/post?<?=$data["num"]?>/update_post" method="post">
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationServer01">Название</label>
                <input type="text" class="form-control" value="<?=$data["title"]?>" name ="title" maxlength="100" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationServer02">Краткое описание</label>
                <input type="text" class="form-control" value="<?=$data["lemma"]?>" name ="lemma" maxlength="140" required>
            </div>
        </div>

        <div class="mb-3">
            <label for="validationTextarea">Текст</label>
            <textarea class="form-control " name ="text" maxlength="10000" required><?=$data["text"]?></textarea>
        </div>

        <button type="submit" class="btn btn-secondary btn-lg btn-block">Сохранить</button>
    </form>
</div>

