<?php  

class Complaint_model extends CI_Model{  
	function get() {  
    	return $this->db->get('userscomplaint'); 
	}  
 
 	function get_username($username) {  
    	$this->db->where('username', $username);  
    	$this->db->select("*");  
    	$this->db->from("userscomplaint");  
   		return $this->db->get();  
	}  
 
 	function insert($data) {  
    	$this->db->insert('userscomplaint', $data);  
 	}  
 
 	function delete($username) {  
     	$this->db->where('username', $username);  
     	$this->db->delete('userscomplaint');  
 	}  
 
 	function update_data($data, $terms) {  
     	$this->db->where($terms);  
     	$this->db->update('userscomplaint', $data);  
 	}
	
	function search($keyword){
        $this->db->like('username',$keyword);
        $query = $this->db->get('userscomplaint');
        return $query->result();
    }  
} 