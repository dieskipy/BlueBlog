<?php if ($data != ""): ?>
    <div class="container"
         style="margin-bottom: 100px; margin-top: 100px;background: #d1e2f0; padding: 10px;border-radius: 5px;">
        <h3 class="post-lil-title"><?= $data ?></h3>
    </div>
<?php endif; ?>
<div class="container"
     style="margin-bottom: 100px; margin-top: 100px;background: #d1e2f0; padding: 10px;border-radius: 5px;">
    <h2 class="post-title">Регистрация</h2>
    <form action="/reg/validate" method="post" id="myform">
        <div class="form-group">
            <label for="exampleInputEmail1">Email адрес</label>
            <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" name="email"
                   maxlength="25" required>
            <small id="emailHelp" class="form-text text-muted">Не более 25 знаков</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Пароль</label>
            <input type="password" class="form-control" id="InputPassword" name="password" maxlength="10" required>
            <small id="emailHelp" class="form-text text-muted">Не более 10 знаков</small>
        </div>
        <div class="form-group">
            <div class="form-group">
                <label for="inputCity">Никнейм</label>
                <input type="text" class="form-control" name="nickname" maxlength="10" equired>
                <small id="emailHelp" class="form-text text-muted">Не более 10 знаков</small>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" id="submitButton">Submit</button>

    </form>
</div>
