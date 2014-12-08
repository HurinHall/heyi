<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

	/**
	 * Register Controller
	 * @author Sam
	 * 
	 */
	 
	 public function __construct(){
    	parent::__construct();
    	$this->load->helper('url');
    	$this->load->model('register_model');
    	$this->load->library('form_validation');
    	$this->load->library('session');
  	}
  	
	/* public function index()
	{
		$title="title";
		$data['title'] = $this->login_model->example($title);
		$this->load->view('register',$data);
	} */
	
	//http://example.com/register/submit
	public function add(){
	    //设置错误定界符
	    $this->form_validation->set_error_delimiters('<span class="error">', '</span>');
	    if ($this->form_validation->run('register') == FALSE){
	        $this->load->view('register');
	    }else{
	        //receive registered info
	        $username = $this->input->post('username');
	        
	        $password = $this->input->post('password');
	        $name = $this->input->post('name');
	        $address = $this->input->post('address');
	        $phone = $this->input->post('phone');
	        $email = $this->input->post('email');
	        if($this->register_model->add_user($username, $password,$name, $address,$phone, $email)){
	            $data['message'] = "The user account has now been created! You can go ".anchor('login/auth', 'here').'.';
	        }else{
                $data['message'] = "There was a problem when adding your account. You can register ".anchor('register/add', 'here').' again.';
            }
            $this->load->view('note', $data);
             
	    }
	        
	    /**
	     * ======================================
	     * 用于注册表单验证的函数
	     * 1、username_exists()
	     * 2、email_exists()
	     * ======================================
	     */
	    /**
	     * 验证用户名是否被占用。
	     * 存在返回false, 否者返回true.
	     * @param string $username
	     * @return boolean
	     */
	    function username_exists($username)
	    {
	        if ($this->register_model->get_by_username($username))
	        {
	            $this->form_validation->set_message('username_exists', '用户名已被占用');
	            return FALSE;
	        }
	        return TRUE;
	    }
	    function email_exists($email)
	    {
	        if ($this->register_model->email_exists($email))
	        {
	            $this->form_validation->set_message('email_exists', '邮箱已被占用');
	            return FALSE;
	        }
	        return TRUE;
	    }
	}
	
}