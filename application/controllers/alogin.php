<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class alogin extends CI_Controller {  
	public function index() {  
    	$valid = $this->form_validation;  
        $username = $this->input->post('username');  
        $password = $this->input->post('password');  
        $valid->set_rules('username','Username','required');  
        $valid->set_rules('password','Password','required');  
        if($valid->run()) {  
        	$this->admin_login->alogin($username,$password, base_url('adashboard'), base_url('alogin'));  
        }    
        $this->load->view('a_login');  
	}  
         
	public function logout() {  
        $this->admin_login->logout();  
    }                 
}  