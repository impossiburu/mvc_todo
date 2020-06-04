<?php

class Model_Edit extends Model {
    
    public function getData($id = null) {

        $data = db::query('SELECT * FROM todo WHERE id = ?', array_values($id));
        $row = [];
        foreach ($data as $rows) {
            $row = $rows;
        }
        return $row;
    }

    public function updateItem(array $clientData) {
        if (!$clientData) {
            return false;
        }

        db::query('UPDATE todo SET `text` = ?, `done` = ? WHERE `id` = ?', array_values($clientData));
        header("location: /admin/action");
    }
}
