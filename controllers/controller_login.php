<?php

class Controller_Login extends Controller {

    function __construct() {
        $this->model = new Model_Login();
        $this->view = new View();
    }
    
    public function action() {
        $usersData = $this->model->getData();
        $user = [];
        foreach ($usersData as $userData) {
            $user = $userData;
        }
        
        if (isset($_POST['login']) && isset($_POST['password'])) {
            $login = htmlspecialchars($_POST['login']);
            $password = htmlspecialchars($_POST['password']);

            if ($login == $user['user'] && $password == $user['password']) {
                session_start();
                $_SESSION['admin'] = $password;
                header('Location: /admin/action');
            } else {
                header('Location: /login/action');
            }
        }
        $this->view->render('login.php', 'template.php');
    }
}
