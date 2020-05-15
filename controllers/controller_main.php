<?php

class Controller_Main extends Controller {

    function __construct()
    {
        $this->model = new Model_Main();
        $this->view = new View();
    }
    
    public function action()
    {
        $data = $this->model->getData();
        $this->view->render('main.php', 'template.php', $data);
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
