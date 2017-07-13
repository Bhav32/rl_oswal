<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{
    public function __construct() 
    {
       parent::__construct();
	}

    public function index()
    {
    	$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
    	$this->load->view('layouts/fullwidth_layout');
    }

    public function register()
    {
    	$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		//Form Validation Rules
		$this->form_validation->set_rules('firstName', 'First Name', 'required');
        $this->form_validation->set_rules('lastName', 'Last Name', 'required',
            array('required' => 'You must provide a %s.')
        );
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirmPassword', 'confirm Password', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('contactNo', 'Contact No', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('layouts/fullwidth_layout');
        }
        else
        {
            $this->load->view('formsuccess');
        }
    }
}
