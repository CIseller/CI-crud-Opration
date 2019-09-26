<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Student_Model extends CI_Model
{
	
	function __construct(){
		parent:: __construct();
	}


	function insert($data){
		$this->db->insert('student',$data);
	}


	function selectdata(){
		$query=$this->db->get('student');
		return $query->result();
	}



	function getwhereData($student_id){
		$query = $this->db->get_where('student',array('stu_id' => $student_id));
		if ($query -> num_rows() > 0) {
			return $query->row();

		}
					
	}


	function UpdateData($student_id,$data){
		$this->db->where('stu_id',$student_id)
			->update('student',$data);

	}



	function DeleteData($student_id){
		$this->db->delete('student',array('stu_id' => $student_id));

	}

}

?>