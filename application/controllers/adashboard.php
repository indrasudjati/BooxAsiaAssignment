<?php defined('BASEPATH') OR exit('No direct script access allowed');  

class adashboard extends CI_Controller {  
	function __construct(){  
    	parent::__construct();  
    	$this->admin_login->check_login();  
    }  
          
    public function index() {  
    	$this->load->view('a_dashboard');  
    }  
    
	public function logout()  
         {  
                 $this->session->sess_destroy();  
                 $this->load->view('a_home');  
         }  
 }  