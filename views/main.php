<div class="container">
    <h1>Главная</h1>
    <?php if ($auth) { ?>
        <a href="/admin/logout">Выйти</a>
        <a href="/admin/action">Админ Панель</a>
    <?php } else { ?>
        <a href="/login/action">Авторизация</a>
    <?php } ?>
    <?php foreach ($data as $row) {
        echo '<div class="card">
                <div class="card-body">
                    <h5 class="card-title">'.$row['name'].'</h5>
                    <h6 class="card-subtitle mb-2 text-muted">'.$row['email'].'</h6>
                    <p class="card-text">'.$row['text'].'</p>
                </div>'; ?>
                <?php if ($row['done']) {
                echo '<div class="card-body">
                        <h5 class="card-title">Выполнено</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Обновлено администратором</h6>
                    </div>'; } ?>
    <?php echo '</div>';}?>
    <hr>
    <form action="insert" method="POST">
        <div class="form-group">
            <label for="todoName">Имя</label>
            <input type="name" class="form-control" name="name" id="todoName" aria-describedby="emailHelp" placeholder="Введите имя">
        </div>
        <div class="form-group">
            <label for="todoEmail">E-mail</label>
            <input type="email" class="form-control" name="email" id="todoEmail" placeholder="Введите е-mail">
        </div>
        <div class="form-group">
            <label for="todoText">Текст</label>
            <textarea class="form-control" id="todoText" name="text" rows="3" placeholder="Текст задачи"></textarea>
        </div>
            <button type="submit" class="btn btn-primary">Создать</button>
    </form>
</div>
