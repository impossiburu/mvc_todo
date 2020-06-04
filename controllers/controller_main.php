<?php

class Controller_Main extends Controller {

    function __construct()
    {
        $this->model = new Model_Main();
        $this->view = new View();
    }
    
    public function action() {

        session_start();

        $data = $this->model->getData();
        if ($_SESSION['admin']) {
            $this->view->render('main.php', 'template.php', $data, true);
        } else {
            $this->view->render('main.php', 'template.php', $data);
        }
    }

    public function insert() {
        if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['text'])) {
            $postData = [ 
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'text' => $_POST['text']
            ];
        }

        $this->model->insertData($postData);
    }
}
