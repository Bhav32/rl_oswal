<?php 
   class Flashdata extends CI_Controller {
	
      public function index() { 
         //Load session library 
         $this->load->library('session');
			
         //redirect to home page 
        // $this->load->view('layouts/fullwidth_layout'); 
      } 
  
      public function add() { 
         //Load session library 
         $this->load->library('session'); 
         $this->load->helper('url'); 
         $this->session->set_flashdata('msg','User Added Successfully!!');  
         redirect('layouts/fullwidth_layout'); 
      } 
   } 
?>