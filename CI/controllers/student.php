<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student extends CI_Controller
{

	function __construct(){
	parent::__construct();
	$this->load->model('student_model');

	}

	function index(){
		$getdata = $this->student_model->selectdata();
		$data['students'] = $getdata;
		$this->load->view('view',$data);
	}


	function addNewUser(){
		$this->load->view('insert');
		if($this->input->post('submit')) {
			$hob = implode(',', $this->input->post('hobby'));
			$data = array(
				'f_name' => $this->input->post('f_name'),
				'l_name' => $this->input->post('l_name'),
				'email'  => $this->input->post('email'),
				'gender' => $this->input->post('gender'),
				'hobby'  => $hob,
				'status' => $this->input->post('status')
			);
			$this->student_model->insert($data);
			redirect('student/index');
		}
	}


	function UpdateUser($student_id){
		$updatedata = $this->student_model->getwhereData($student_id);
		$data['students'] = $updatedata;
		$this->load->view('update',$data);
		if($this->input->post('Update')) {
			$hob = implode(',', $this->input->post('hobby'));
			$data = array(
				'f_name' => $this->input->post('f_name'),
				'l_name' => $this->input->post('l_name'),
				'email'  => $this->input->post('email'),
				'gender' => $this->input->post('gender'),
				'hobby'  => $hob,
				'status' => $this->input->post('status')
			);
			$this->student_model->UpdateData($student_id,$data);
			redirect('student/index');
		}
		
	}


	function Delete($student_id){
			$this->student_model->DeleteData($student_id);
			redirect('student','refresh');
	}


}

?>