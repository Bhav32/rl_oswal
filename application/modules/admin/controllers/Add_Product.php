<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_Product extends CI_Controller 
{
    public function __construct() 
    {
       parent::__construct();
       $this->load->helper('url');
	}

    public function index()
    {
    	$this->load->view('layouts/add_products_layout');
    }
}
