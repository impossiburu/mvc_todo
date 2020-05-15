<?php

class Controller_Login extends Controller {

    public function action()
    {
        $this->view->render('login.php', 'template.php');
    }
}
