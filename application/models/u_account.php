 <?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class U_account extends CI_Model{  
         function register($data)  
         {  
                 $this->db->insert('users',$data);  
         }  
 }  