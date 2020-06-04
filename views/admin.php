<div class="container">
    <h1>Все записи</h1>
    <ul>
        <li><a href="logout">Выйти</a></li>
        <li><a href="/main/action">Главная</a></li>
    </ul>
    <?php foreach ($data as $row) { ?>
      <?php echo '<div class="card">
                    <div class="card-body">
                        <h5 class="card-title">'.$row['name'].'</h5>
                        <h6 class="card-subtitle mb-2 text-muted">'.$row['email'].'</h6>
                        <p class="card-text">'.$row['text'].'</p>' ?>
                        <?php if ($row['done']) {
                            echo ' <h5 class="card-title">Выполнено</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Обновлено администратором</h6>'; } ?> 
                    
                    
        <?php echo '<a href="/edit/action/?id='.$row['id'].'" class="btn btn-primary">Редактировать</a>
                    <a href="/admin/delete/?id='.$row['id'].'" class="btn btn-primary">Удалить</a>
                    </div>
                  </div>'; ?>
   <?php } ?>
</div>
