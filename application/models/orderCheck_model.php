<?php


class orderCheck_model extends CI_Model {
	// 这是订单信息order info
	public function __construct() {
		$this->load->database ();
	}

	public function getOrderInfo($oid) {
		$query = $this->db->query ( "SELECT * FROM order WHERE oid='$oid'" );
		return $query->result_array();
	}

	public function getBook($bid) {
		$query = $this->db->query ("SELECT * FROM books WHERE bid='$bid' ");
		return $query->result_array();
	}

	public function getOrderWithBoooks($oid){
		$query = $this->db->query ("SELECT * FROM `orderlist`,`order`,`books` WHERE `orderlist`.oid=$oid and `books`.bid=`orderlist`.bid and `orderlist`.oid=`order`.oid");
		return $query->result_array();
	}

	public function getAddress($name){
		$query = $this->db->query ("SELECT name,address,phone FROM `user`,`profile` WHERE `user`.username='$name' and `user`.id=`profile`.id");
		return $query->result_array();
	}

	public function updateAddress($id,$address){
		$query = $this->db->query ("UPDATE `profile` SET `address`= '$address' WHERE id='$id'");
		if($query){
			return true;
		}else{
			return false;
		}
	}
}
