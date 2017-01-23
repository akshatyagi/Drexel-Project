<?php 
class Home_controller extends CI_Controller{
	function Home_Controller(){
		parent::__construct();
		$this->load->model('users');
	}
	function index(){
		$this->load->view('home_page',array('title' =>'Soft Skills Development'));
	}
	function validate(){
		$username = $this->input->post('username');
		$password = $this->input->post('pass');
		$rs = $this->users->validate_user($username,$password);
		if($rs){
			$taken_quiz = $this->users->checkStatus($username);
			$session_data = array(
				'username' => $username, 
				'taken_quiz' => $taken_quiz,
				'is_logged_in' => true
				);
			$this->session->set_userdata($session_data);
			redirect('main');
		}
		else{
			echo "<script>alert('You have entered the wrong Username or Password. Please try again');</script>";
			redirect(base_url());
		}
	}
	function does_exist(){
		$email = $this->input->post('email');
		$exists = $this->users->does_exist($email);
		if($exists){
			echo "Exists";
		}
		else{
			echo "No";
		} 
	}
	function add_user(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$is_added = $this->users->add_user($email,$password);
		if($is_added){
			echo "Added";
		}else{
			echo "No";
		}
	}

}

?>