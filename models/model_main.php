<?php

class Model_Main extends Model {
    
    public function getData() {
        $data = db::query('SELECT * FROM todo');
        return $data;
    }

    public function insertData(array $insertData) {
        $insert = db::query('INSERT INTO `todo`(`name`, `email`, `text`) VALUES (?, ?, ?)', array_values($insertData));
        if ($insert) {
            echo '<b>Success</b>';
            header("location: action");
        } else {
            echo '<b>Error</b>';
            header("location: action");
        }
    }
}
