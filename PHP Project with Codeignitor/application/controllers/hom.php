<?php 

class hom extends CI_Controller 
{

	public function __construct()
	{
	   parent::__construct();
	   $this->load->model('user','',TRUE);
	   
	}

			
	public function index()
				{
					$this->load->view('welcome_message');
					
				}
	public function help()
				{
					$this->load->view('welcome_messag');
					
				}

	public function registration()
				{
					$start = $this -> user -> regi_start();
					$stop = $this -> user -> regi_stop();
					if ($start==TRUE && $stop==FALSE) 
					{
						$data['result'] = $this->user->prefrences();
						$this->load->view('form',$data);
					}
					elseif ($stop==TRUE) {
						$data['title']='Registration stopped';
						$this->load->view('registration_date_range',$data);
					}else{
						$data['title']='Registration not started yet';
						$this->load->view('registration_date_range',$data);
					}

				}
				
	public function adminlogin()
				{
					$this->load->view('admin_login');
				}
		
	
	public function studentlogin()
				{
					$this->load->view('student_login');
				}
	
	public function emplogin()
				{
					$this->load->view('emp_login');
				}

	public function abc()
				{
					$this->load->view('home_view');
				}

	public function admin_addemp()
				{
					$this->load->view('addemp');
				}

	public function admin_regioperation()
				{
					$this->load->view('regioperation');	
				}


	public function verifylogin() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$result = $this->user->login($username, $password);
		if($result == TRUE)
		{
			$this->abc();
		}
		/*if($result)
		{
			$sess_array = array();
			foreach($result as $row)
			{
				$sess_array = array
				(
					' id' => $row->id,
					' username' => $row->username
				);
			$this->session->set_userdata(' logged_in' , $sess_array);
			}
			return TRUE;
		}
		else
		{
			return false;
		}*/
	}

	public function verify_emp_login() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$result = $this->user->emp_login($username, $password);
		if($result == TRUE)
		{
			$this->load->view('emp_home_view');
		}
	}

	public function student_verify() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$query = $this->user->studentlogin($username, $password);
		//$data['rollno'] = $username;
		//$data = $query->result_array();
		$this->load->view('student_home_view',$query);
		//if($result['rollno'] == $username)
		//{
		//	$this->load->view('student_home_view',$result);
		//}
		
	}

	public function exam_detail() {
		
		$this->load->view('student_home_view');
		//if($result['rollno'] == $username)
		//{
		//	$this->load->view('student_home_view',$result);
		//}
		
	}	

	public function addcenter() 
	{
		$data = array
		(
			'city' => $this->input->post('city'),
			'place' => $this->input->post('place'),
			'room' => $this->input->post('roomsize'),
			'maxc' => $this->input->post('maxsize')
		);
	
	$this->user->insertcentre($data);
	
	$data['data']='CENTRE ADD SUCCESFULLY';
	
	$this->load->view('home_view',$data);
	//$this->abc();
	}

	public function addemp() 
	{
		$data = array
		(
			'name' => $this->input->post('emp_name'),
			'city' => $this->input->post('emp_city'),
			'dob' => $this->input->post('emp_dob'),
			'username' => $this->input->post('emp_username'),
			'password' => $this->input->post('emp_password'),
			'email' => $this->input->post('emp_email')
		);
		
		$this->user->insertemp($data);
		
		$data['data']='Employee Added SUCCESFULLY';
		
		$this->load->view('home_view',$data);
		//$this->abc();
	}

	public function addstudent() 
	{

		$rollno = '15';
		$count = $this->user->regi_count();
		$temp = substr($this->input->post('state'),0,3);
		$roll_no = $rollno.$temp.substr($count, 1,5);
		$this->user->regi_count_inc();

		$data = array
		(
			'first' => $this->input->post('first'),
			'last' => $this->input->post('last'),
			'dob' => $this->input->post('dob'),
			'sex' => $this->input->post('sex'),
			'email' => $this->input->post('email'),
			'nationality' => $this->input->post('nationality'),
			'city' => $this->input->post('city'),
			'pincode' => $this->input->post('pincode'),
			'state' => $this->input->post('state'),
			'phone' => $this->input->post('phone'),
			'password' => $this->input->post('password'),
			'school' => $this->input->post('school'),
			'percent' => $this->input->post('percent'),
			'passingyear' => $this->input->post('passingyear'),
			'p1' => $this->input->post('Preferences_1'),
			'p2' => $this->input->post('Preferences_1'),
			'p3' => $this->input->post('Preferences_1'),
			'rollno'   => $roll_no
		);

		

		$this->user->insertstu($data);
		
		$data['title']='You are Registered';
		$data['rollno']='Your Rollno is:'.$roll_no;
		
		$this->load->view('registration_done',$data);
		//$this->abc();
	}

	public function registart() 
	{
		//$temp = 1;
		$data = array
		(
			'yesno' => $this->input->post('start'),
		);
		
		$this->user->updatestart($data);
		
		$data['data']='registration started';
		
		$this->load->view('regioperation',$data);
		//$this->abc();
	}

	public function registop() 
	{
		//$temp = 1;
		$data = array
		(
			'yesno' => $this->input->post('stop')
		);
		
		$this->user->updatestop($data);
		
		$data['data']='registration stoped';
		
		$this->load->view('regioperation',$data);
		//$this->abc();
	}

	public function admin_logout() 
	{
		$this->load->view('admin_login');
		//$this->abc();
	}

	public function student_logout() 
	{
		$this->load->view('student_login');
		//$this->abc();
	}

}