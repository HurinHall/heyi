<?php

class profile_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    function get_by_username($username)
    {
        $this->db->where('username', $username);
        $query = $this->db->get('user');
        // return $query->row(); //不判断获得什么直接返回
        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return FALSE;
        }
    }

    function get_by_id($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('profile');
        // return $query->row(); //不判断获得什么直接返回
        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return FALSE;
        }
    }

    function password_auth($username, $pass)
    {
        if ($user = $this->get_by_username($username)) {
            
            $salt = $user->salt;
            $password = md5($salt . $password);
            
            return $user->password == $password ? TRUE : FALSE;
        }
        return FALSE;
    }

    function changePwd($username, $pass)
    {
        if ($user = $this->get_by_username($username)) {
            
            $salt = $user->salt;
            $password = md5($salt . $pass);
            $data = array(
               'password' => $password
            );
            $this->db->where('username', $username);
            $this->db->update('user', $data);
            if ($this->db->affected_rows() > 0){
                //$this->login($username);
                return TRUE;
            }
        }
        return FALSE;
    }
}