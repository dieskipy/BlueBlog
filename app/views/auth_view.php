<?php if ($data != ""): ?>
    <div class="container"
         style="margin-bottom: 100px; margin-top: 100px;background: #d1e2f0; padding: 10px;border-radius: 5px;">
        <h3 class="post-lil-title"><?= $data ?></h3>
    </div>
<?php endif; ?>
<div class="container"
     style="margin-bottom: 100px; margin-top: 100px;background: #d1e2f0; padding: 10px;border-radius: 5px;">
    <h2 class="post-title">Авторизация</h2>
    <form action="/auth/login" method="post" id="myform">
        <div class="form-group">
            <label for="exampleInputEmail1">Email адрес</label>
            <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" name="email"
                   maxlength="25" required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Пароль</label>
            <input type="password" class="form-control" id="InputPassword" name="password" maxlength="10" required>
        </div>

        <button type="submit" class="btn btn-primary" id="submitButton">Submit</button>
    </form>
</div>
