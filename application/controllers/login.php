<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/login
	 *	- or -  
	 * 		http://example.com/login/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 
	 public function __construct(){
    	parent::__construct();
    	$this->load->helper('url');
    	$this->load->model('login_model');
    	$this->load->library('session');
    	$this->load->library('form_validation');
  	}
	
	//http://example.com/login/auth
	public function auth(){
	    
	    //设置错误定界符
	    $this->form_validation->set_error_delimiters('<span class="error">', '</span>');
	    $this->_username = $this->input->post('username');
	    
	    if ($this->form_validation->run('login') == FALSE){
	        $this->load->view('login');
	    }else{
	        //注册session,设定登录状态
	        $this->login_model->login($this->_username);
	        $data['message'] = $this->session->userdata('username').' You are logged in! Now take a look at the '.anchor('home/index', 'home');
	        redirect('home/index',reload);
	    }
	    
	    
	}
	
	//http://example.com/login/logout
	public function logout(){
		//remove session
		//redirect('location','reload');
	    if ($this->session->userdata('logged_in') == TRUE)
	    {
	        $this->session->sess_destroy();//销毁所有session的数据
	    }
	    redirect('home/index',reload);
	}
	
	//http://example.com/login/forget
	public function forget(){
		
	}
	
	//登录表单验证时自定义的函数
	/**
	 * 提示用户名是不存在的登录
	 * @param string $username
	 * @return bool
	 */
	function username_check($username)
	{
	    if ($this->login_model->get_by_username($username))
	    {
	        return TRUE;
	    }
	    else
	    {
	        $this->form_validation->set_message('username_check', '用户名不存在');
	        return FALSE;
	    }
	}
	/**
	 * 检查用户的密码正确性
	 */
	function password_check($password)
	{
	    if ($this->login_model->password_check($this->_username, $password))
	    {
	        return TRUE;
	    }
	    else
	    {
	        $this->form_validation->set_message('password_check', '用户名或密码不正确');
	        return FALSE;
	    }
	}
}