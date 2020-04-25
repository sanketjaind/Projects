<?php
class VerifyLogin extends CI_Controller {
 
function __construct()
{
   parent::__construct();
   $this->load->model('user','',TRUE);
}


function index() {
	$username = $this->input->post('username');
	$password = $this->input->post('password');
	$result = $this->user->login($username, $password);
	if($result == TRUE)
	{
		$this->load->view('home_view');
	}
}
}

?>