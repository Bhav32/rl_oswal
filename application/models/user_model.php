<?php
class user_model extends CI_Model 
{
	function __construct() {
		parent::__construct();
	}
 	public function adduser($data){
		$this->db->insert('user', $data);
 	}
}
?>