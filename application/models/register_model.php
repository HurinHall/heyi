<?php

class register_model extends CI_Model{

	public function __construct(){
		$this->load->database();
	}

	function add_user($username, $password,$address,$phone, $email){
	    $salt = substr(uniqid(rand()), -8);
	    $password = md5($salt.$password);
	    $data = array(
	         'username'=>$username,
	         'password'=>$password,
	         'salt'=>$salt,
	         'time'=>time()
	    );
	    $this->db->insert('user', $data);
	    //echo 'flag';
	    if ($this->db->affected_rows() > 0){
	        
	        $id=$this->db->insert_id();
	        $data2 = array(
	            'id'=>$id,
	            'address'=>$address,
	            'phone'=>$phone,
	            'email'=>$email,
	            'time'=>time()
	        );
	        $this->db->insert('profile', $data2);
	        if ($this->db->affected_rows() > 0){
	            //$this->login($username);
	            return TRUE;
	        } 
	    }
	    return FALSE;
	    
	}
	
	function email_exists($email)
	{
	    $this->db->where('email', $email);
	    $query = $this->db->get('profile');
	    return $query->num_rows() ? TRUE : FALSE;
	}
	
	function get_by_username($username)
	{
	    $this->db->where('username', $username);
	    $query = $this->db->get('user');
	    //return $query->row();                            //不判断获得什么直接返回
	    if ($query->num_rows() == 1)
	    {
	        return $query->row();
	    }
	    else
	    {
	        return FALSE;
	    }
	}
}