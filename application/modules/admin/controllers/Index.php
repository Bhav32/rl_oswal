<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller 
{
    public function __construct() 
    {
       parent::__construct();
       $this->load->helper('url');
	}

    public function index()
    {
    	$this->load->view('layouts/login_layout');
    }

    public function home(){
      $this->load->view('layouts/main');
    }
    
}
