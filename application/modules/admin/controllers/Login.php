<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{
    public function __construct() 
    {
       parent::__construct();
       $this->load->helper(array('form', 'url'));
       $this->load->add_package_path(APPPATH.'third_party/ion_auth/');
	   $this->load->library('ion_auth');
	 }

    public function index()
    {
    	$this->load->view('layouts/login_layout');
    }

       public function login()
    {
    	$this->form_validation->set_rules('firstName', 'First Name', 'required');
    	$this->form_validation->set_rules('password', 'password', 'required|min_length[8]|max_length[15]');
    	if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('layouts/login_layout');
        }
    	if ($this->input->post('submit'))
    	{
	      // Get the input from the form and dont forget to add md5
	      // function to the password.
	      $this->db->where('username', $this->input->post('username'));
	      $this->db->where('password', md5($this->input->post('password')));
	      $result = $this->db->get('users');
      
	      // If we find a user output correct, else output wrong.
	      if($result->num_rows() != 0)
	      {
	        $this->load->view('layouts/main');
	      }
	      else
	      {
	        echo 'Login failed!! user does not exist';  
	      }

		}

	}
}