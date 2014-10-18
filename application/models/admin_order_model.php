<?php

class admin_order_model extends CI_Model{

	public function __construct(){
		$this->load->database();
	}

	public function example($text){
		//$query = $this->db->query("SQL sentence");
		//$query->result() 
		//$query->num_rows()
		/*
			foreach($query->result()  as $item){
				$item->attribute;
			}
		*/
		return $text." in model";
	}
	
	public function login($user,$pass){
		//$query = $this->db->query("SQL sentence");
		//$query->result() 
		//$query->num_rows()
		//$password use md5 encryption
		//return true or false
	}
}