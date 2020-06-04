<div class="container">
    <h1>Редактировать запись</h1>   
    <form action="/edit/update" method="POST">
    <input type="hidden" name="id" size="80" value="<?php echo $data['id'] ?>">
        <div class="form-group">
            <label for="todoText">Текст</label>
            <textarea class="form-control" id="todoText" name="text" rows="3"><?php echo $data['text'] ?></textarea>
        </div>
        <?php if ($data['done']) {
            $isDone = 'checked';
        } ?>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" name="done" id="checkBox" <?php echo $isDone ?>>
            <label class="form-check-label" for="checkBox">Выполнено</label>
        </div>
        <button type="submit" class="btn btn-primary">Редактировать</button>
    </form>
</div>
