<?php defined('BASEPATH') OR exit('No direct script access allowed');  

class Dashboard extends CI_Controller {  
	function __construct(){  
    	parent::__construct();  
    	$this->user_login->check_login();  
    }  
          
    public function index() {  
    	$this->load->view('u_dashboard');  
    }  
    
	public function logout()  
         {  
                 $this->session->sess_destroy();  
                 $this->load->view('u_home');  
         }  
 }  