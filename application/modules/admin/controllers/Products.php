<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller 
{
    public function __construct() 
    {
       parent::__construct();
      
	}

    public function index()
    {
    	$this->load->view('layouts/products/products_layout');
    }
    public function add()
    {
        $this->load->view('layouts/products/add_products_layout');
        $data = array(
                'product_name' => $this->input->post('product_name'),
                'price' => $this->input->post('price'),
                'sizes' => $this->input->post('sizes'),
                'discount' => $this->input->post('discount'),
                'product_care' => $this->input->post('product_care'),
                'description' => $this->input->post('description'),
                'ex_description' => $this->input->post('ex_description')
                );
       
            $this->load->model('product_model'); // load model 
            $this->product_model->addproduct($data);
            $this->session->set_flashdata('msg', 'Product Added Successfully!!');
            redirect(base_url('admin/products/add'));
    	
    }
}
