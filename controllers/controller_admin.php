<?php

class Controller_Admin extends Controller {

	function __construct()
	{
		$this->model = new Model_Admin();
		$this->view = new View();
	}
	
	public function action() {
        session_start();
	
		if ($_SESSION['admin']) {
			$data = $this->model->getData();
			$this->view->render('admin.php', 'template.php', $data, true);
		} else {
			session_destroy();
			Route::Error();
		}
	}

	public function delete() {
		session_start();

		if (!empty($_GET['id'])) {
			$id[] = $_GET['id'];
			$this->model->deleteItem($id);
		}
	}
	
	function logout() {
		session_start();
		session_destroy();

		header('Location: /main/action');
	}
}
