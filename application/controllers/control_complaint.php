<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
class Control_complaint extends CI_Controller {  
	function __construct() {  
		parent::__construct();  
      	$this->load->helper('url');  
      	$this->load->helper('form');  
      	$this->load->library('form_validation');  
      	$this->load->model('complaint_model'); 
 	}  
 
 	public function index() {  
 		$data['data_complaint']		= $this->complaint_model->get()->result_array();  
 		$data['total_data']   		= $this->complaint_model->get()->num_rows();  
 		$this->load->view('u_view',$data);  
 	}  
 
 	public function form_insert() {    
 		$this->form_validation->set_rules('username','Username','required');  
 		$this->form_validation->set_rules('complaint','Complaint','required');  
 		//$this->form_validation->set_rules('status','Status','required');  
 		
		if ($this->form_validation->run() === FALSE) {  
 			$this->load->view('u_add');  
 		}else{  
 			$data['username']	 	= $this->input->post('username');  
 			$data['complaint'] 	 	= $this->input->post('complaint');  
 			//$data['status'] 		= $this->input->post('status');  
 			$this->complaint_model->insert($data);  
 			$data['msg']   			= 'Data succesfully recorded';  
 			$this->load->view('u_addsuccess',$data);  
 		}  
 	}  
 
 	public function edit($username) {  
 		$data['data_complaint'] 	= $this->complaint_model->get_username($username)->row_array();  
 		$this->load->view('u_edit',$data);  
 	}  
 
 	public function edit_data() {  
 		$terms['username'] 			= $this->input->post('username');  
 		$data['complaint'] 			= $this->input->post('complaint');  
 		//$data['status']  			= $this->input->post('status'); 
 		$this->complaint_model->update_data($data, $terms);  
 		$data['msg']   				= 'Data successfully changed';  
 		$this->load->view('u_addsuccess',$data);  
 	}  
 
 	public function delete($username) {  
 		$data['complaint'] 			= $this->complaint_model->delete($username);  
 		$data['msg']   				= 'Data succesfully erased';  
 		$this->load->view('u_addsuccess',$data);  
 	}  
} 