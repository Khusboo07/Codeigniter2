<?php
 
class RegisterModel extends CI_Model{
    public function add_user($data){
        //get the data from controller and insert into the table 'employee'
        return $this->db->insert('employee', $data);
    }
}

?>