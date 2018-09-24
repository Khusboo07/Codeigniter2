<?php
  
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Welcome extends MY_Controller {
 
   public function index() {
        $this->load->view('header'); 
        
        $email=$this->session->userdata('email'); 
        $data['result']=$this->Welcome_Model->getall($email);       
        $this->load->view('welcome_message',$data);
        $this->load->view('footer');

        $this->load->library('session');
    }

}