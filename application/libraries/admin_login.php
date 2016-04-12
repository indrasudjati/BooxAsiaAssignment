<?php if(! defined('BASEPATH')) exit('No direct script access allowed');  

class Admin_login {  
	var $CI = NULL;  
    public function __construct(){  
    	$this->CI =& get_instance();  
    }  
      
    public function alogin($username, $password) {  
    	$query = $this->CI->db->get_where('tabeladmin',array('username'=>$username,'password' => $password));  
        if($query->num_rows() == 1) {  
        	$row	= $this->CI->db->query('SELECT admin_id FROM tabeladmin where username = "'.$username.'"');  
            $admin  = $row->row();  
            $id     = $admin->admin_id;  
            $this->CI->session->set_userdata('username', $username);  
            $this->CI->session->set_userdata('id_login', uniqid(rand()));  
            $this->CI->session->set_userdata('id', $id);  
            redirect(site_url('adashboard'));  
         }else{  
         	$this->CI->session->set_flashdata('success','Username or password wrong, please try again ');            redirect(site_url('alogin'));  
         }  
    return false;  
    }  
         
    public function check_login() {  
    	if($this->CI->session->userdata('username') == '') {  
        	$this->CI->session->set_flashdata('success','you are not logged in');  
            redirect(site_url('alogin'));  
        }  
    }  
    
    public function logout() {  
    	$this->CI->session->unset_userdata('username');  
        $this->CI->session->unset_userdata('id_login');  
        $this->CI->session->unset_userdata('id');  
        $this->CI->session->set_flashdata('success','you are succesfully logged out');  
        redirect(site_url('alogin'));  
    }  
}  