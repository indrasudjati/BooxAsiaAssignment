<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 
class Register extends CI_Controller {  
	function __construct(){  
    	parent::__construct();  
        $this->load->library(array('form_validation'));  
        $this->load->helper(array('url','form'));  
        $this->load->model('u_account'); 
    }
	  
    public function index(){    
        $this->form_validation->set_rules('username', 'USERNAME','required');  
        $this->form_validation->set_rules('password','PASSWORD','required');  
        $this->form_validation->set_rules('password_conf','PASSWORD','required|matches[password]');
    	$this->form_validation->set_rules('name', 'NAME','required');  
        $this->form_validation->set_rules('email','EMAIL','required|valid_email');  
        if($this->form_validation->run() == FALSE){  
        	$this->load->view('u_register');  
        }else{  
			$data['username']   =       $this->input->post('username');
			$data['password']   =       $this->input->post('password');  
        	$data['name']  		=       $this->input->post('name');  
            $data['email']      =       $this->input->post('email');    
            $this->u_account->register($data);  
            $data['message']    =       "Register Success";  
            $this->load->view('u_success',$data);  
        }  
    }  
}