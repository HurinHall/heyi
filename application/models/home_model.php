<?php

class home_model extends CI_Model{

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
}