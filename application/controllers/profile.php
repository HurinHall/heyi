<?php

if (! defined('BASEPATH'))
    exit('No direct script access allowed');

class Profile extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * http://example.com/profile
     * - or -
     * http://example.com/profile/index
     * - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * 
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('profile_model');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index()
    {
        if ($this->session->userdata('logged_in') == TRUE) {
            
            $this->_username = $this->session->userdata('username');
            $id = $this->profile_model->get_by_username($this->_username)->id;
            // echo $id;
            $user = $this->profile_model->get_by_id($id);
            // var_dump($user);
            
            $data = array(
                'logined' => TRUE,
                'username' => $this->_username,
                'name' => $user->name,
                'email' => $user->email,
                'phone' => $user->phone,
                'address' => $user->address
            );
            $this->load->view('profile', $data);
        } else {
            $data = array(
                'logined' => FALSE
            );
            $this->load->view('login', $data);
        }
    }
    
    // http://example.com/profile/update
    public function changePwd()
    {
        $this->form_validation->set_error_delimiters('<span class="error">', '</span>');
        
        if ($this->form_validation->run('changePwd') == FALSE) {
            echo "false";
            $this->load->view('profile');
        } else {
            // receive registered info
            $newpass = $this->input->post('newpass');
            
            if ($this->profile_model->changePwd($this->_username,$newpass)) {
                $data['message'] = "Your password has been changed! You need login again click" . anchor('login/logout', 'here') . '.';
            } else {
                $data['message'] = "There was a problem when changing your password. You can change " . anchor('profile/changePwd', 'here') . ' again.';
            }
            $this->load->view('note', $data);
        }
    }

    public function password_auth($pass)
    {
        if ($this->profile_model->password_auth($this->_username, $pass)) {
            return TRUE;
        } else {
            $this->form_validation->set_message('password_auth', '旧密码不正确');
            return FALSE;
        }
    }
}