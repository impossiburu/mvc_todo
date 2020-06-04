<?php

class Model_Admin extends Model {
    
    public function getData($id = false) {
        $data = db::query('SELECT * FROM todo');
        return $data;
    }

    public function deleteItem($id) {
        if (!$id) {
            return;
        }

        db::query('DELETE FROM todo WHERE id = ?', $id);
        header("location: /php-test/admin/action");
    }
}