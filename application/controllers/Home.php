<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
    public function __construct() 
    {
       parent::__construct();
       $this->load->helper('url');
	}

    public function home()
    {
    	$this->load->view('layouts/homepage');
    }
    
}