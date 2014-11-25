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
  	}
  	
	public function index()
	{
		$title="title";
		$data['title'] = $this->login_model->example($title);
		$this->load->view('login',$data);
	}
	
	//http://example.com/login/auth
	public function auth(){
	    
	    $this->load->library('form_validation');
	    $this->form_validation->set_rules('username', 'Username', 'required');
	    $this->form_validation->set_rules('password', 'Password', 'required');
	    
	    $bool=$this->form_validation->run();
	    if($bool){
	      
	        //get username and password from login.php view
	        $user = $this->input->post('username');
	        $pass = $this->input->post('password');
	        
	        //call login model to check	        	    
	        if($this->login_model->login($user,$pass)){
	            
	        }else{
	            $error="Logon failure:unknown user name or bad password.";
	            $data['error'] = $error;
	            $this->load->view('login',$data);
	        }
	        
	    }else{
	        //display input error info
	        $this->load->view('login');
	    }
		
		//$this->input->get('name'); see ->user_guide/libraries/input.html
		/* if($this->login_model->login($user,$pass)){
			//how to record session ->user_guide/libraries/sessions.html
			//redirect('location','reload');
		}else{
			//redirect('location','reload');
		} */
	}
	
	//http://example.com/login/logout
	public function logout(){
		//remove session
		//redirect('location','reload');
	}
	
	//http://example.com/login/forget
	public function forget(){
		
	}
}