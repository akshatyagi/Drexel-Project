<?php 
class Questions extends CI_Model{

	function getQuestions(){
		$q = $this->db->get('questions');
		if($q->num_rows()>0){
			foreach($q->result() as $r){
				$data[] = $r;
			}
		return $data;
		}
	}
	function getNumber(){
		$q = $this->db->get('questions');
		return $q->num_rows();
	}
}

?>