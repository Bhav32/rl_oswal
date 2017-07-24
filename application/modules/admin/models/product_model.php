<?php
class product_model extends CI_Model 
{
	function __construct() {
		parent::__construct();
	}
 	public function addproduct($data){
		$this->db->insert('product', $data);
 	}
}
?>