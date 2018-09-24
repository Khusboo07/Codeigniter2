<?php
 
class LoginModel extends CI_Model {
 
    public function checkLogin($email, $password) {
        //query the table 'employee' and get the result count
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('employee');
 
        return $query->num_rows();
    }
}
?>