<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{
    public function __construct() 
    {
       parent::__construct();
       $this->load->helper(array('form', 'url'));
       $this->load->library(array('form_validation', 'session'));
	}

    public function index()
    {
    	$this->load->view('layouts/fullwidth_layout');
    }

    public function register()
    {
		//Form Validation Rules
		$this->form_validation->set_rules('firstName', 'First Name', 'required');
        $this->form_validation->set_rules('lastName', 'Last Name', 'required',
            array('required' => 'You must provide a %s.')
        );
        $this->form_validation->set_rules('password', 'password', 'required|min_length[8]|max_length[15]');
        $this->form_validation->set_rules('confirmPassword', 'confirm Password', 'required|matches[password]');
        $this->form_validation->set_rules('email','Email' ,'required');
        $this->form_validation->set_rules('contactNo', 'Contact No', 'required|min_length[10]');
        //$this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view(base_url('layouts/fullwidth_layout'));
        }
        else
        {
            $data = array(
                'firstName' => $this->input->post('firstName'),
                'lastName' => $this->input->post('lastName'),
                'email_id' => $this->input->post('email'),
                'username' => $this->input->post('firstName'),
                'password' => md5($this->input->post('password')),
                'contact' => $this->input->post('contactNo'),
                'date_created' => date("Y-m-d h:i:s")
                );
            $this->load->database(); // load database
            $this->load->model('user_model'); // load model 
            $this->user_model->adduser($data);
            $this->session->set_flashdata('msg', 'User Added Successfully!!');
            redirect(base_url('login'));
        }
    }
}
