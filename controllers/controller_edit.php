<?php

class Controller_Edit extends Controller {

    function __construct()
	{
		$this->model = new Model_Edit();
		$this->view = new View();
	}
    
    public function action() {
        session_start();

        if ($_SESSION['admin']) {
            $id[] = htmlspecialchars($_GET['id']);
            $data = $this->model->getData($id);
            $this->view->render('edit.php', 'template.php', $data, true);
		} else {
			session_destroy();
			Route::Error();
		}
    }

    public function update() {
        session_start();

        if (!empty($_POST['text']) && !empty($_POST['id'])) {
            if ($_POST['done']) {
                $clientData = [
                    'text' => htmlspecialchars($_POST['text']),
                    'done' => 1,
                    'id' => htmlspecialchars($_POST['id'])
                ];
            } else {
                $clientData = [
                    'text' => htmlspecialchars($_POST['text']),
                    'done' => 0,
                    'id' => htmlspecialchars($_POST['id'])
                ];
                
            }
            $this->model->updateItem($clientData);
        }
    }
}
