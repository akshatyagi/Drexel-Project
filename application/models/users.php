<?php 
class Users extends CI_Model{
	function validate_user($username,$password){
		$this->db->where('email',$username);
		$this->db->where('password',md5($password));
		$q=$this->db->get('users');
		if($q->num_rows()==1){
			return true;
		}	
	}
	function checkStatus($username){
		$taken_quiz = $this->db->select('taken_quiz')->from('users')->where('email',$username)->get()->result_array();
		$x = $taken_quiz[0]['taken_quiz'];
		if($x){
			return 1;
		}
		else{
			return 0;
		}
	}
	function setSurvey($data,$user){
		$this->db->where('email',$user);
		$this->db->update('users',$data);
		return true;
	}
	function fetchData($param,$username){
		$data = $this->db->select($param)->from('users')->where('email',$username)->get()->result_array();
		return $data;
	}
	function does_exist($email){
		$this->db->where('email',$email);
		$q = $this->db->get('users');
		if($q->num_rows() === 1){
			return true;
		}
		else{
			return false;
		}
	}
	function add_user($email,$password){
		$num_item = $this->getNumber();
		$data = array(
			'index' => $num_item+1,
			'email' => $email,
			'password' =>md5($password),
			'taken_quiz' => 0,
			'stress_handling' => 0,
			'responsiveness' => 0,
			'communication' => 0,
			'grooming' => 0 ,
			'delegation' =>0,
			'date' => date('YYYY-MM-DD',strtotime('0000-00-00'))
		);
		$this->db->insert('users',$data);
		if($this->db->affected_rows() === 1){
			return true;
		}else{
			return false;
		}
	}
	function getNumber(){
		return $this->db->get('users')->num_rows();
	}
}
?>
