 <?php
 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Welcome extends MY_Controller {

 public function getall($email)
{
    $this->db->select('*');
    $this->db->from('employee');
    $this->db->where("email",$email);
    $query =$this->db->get();
    return $query->result();

    if($query->num_rows()>0){
    	$row = $query->row_array();

    	echo $row['name'];
    	echo $row['email'];
    	echo $row['date_time'];
    }
    
}
}
?>