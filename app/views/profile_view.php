<div class="container"
     style="margin-bottom: 10px; margin-top: 100px;background: #d1e2f0; padding: 10px;border-radius: 5px;">
    <h2 class="post-title">Профиль</h2>
</div>
<div class="container"
     style="margin-bottom: 100px; margin-top: 20px;background: #d1e2f0; padding: 10px;border-radius: 5px;">
    <ul class="list-group list-group-flush">
        <li class="list-group-item">
            <div class="row justify-content-between">
                <h3 class="post-lil-title">Email:</h3>
                <p><?= $data["email"] ?></p>
            </div>
        </li>
        <li class="list-group-item">
            <div class="row justify-content-between">
                <h3 class="post-lil-title">Никнейм:</h3>
                <p><?= $data["nickname"] ?></p>
            </div>
        </li>
        <li class="list-group-item">
            <div class="row justify-content-between">
                <h3 class="post-lil-title">Роль:</h3>
                <p><?= $data["isAdmin"] ?></p>
            </div>
        </li>
    </ul>
</div>

