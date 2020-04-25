<?php

Class login_process extends CI_Controller {

public function login_process() {

	//$this->load->helper('form');

	//$this->load->library('form_validation');

	$this->load->model('login_database');

	
	$data = array(
	'username' => $this->input->post('username'),
	'password' => $this->input->post('password')
	);

	$result = $this->login_database->login($data);

	if($result == TRUE)
	{
		$this->load->view('home_view.php');
	}
}
}

 ?>