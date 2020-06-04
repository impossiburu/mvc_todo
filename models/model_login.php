<?php

class Model_Login extends Model {
    
    public function getData($id = null) {
        $data = db::query('SELECT * FROM users');
        return $data;
    }
}