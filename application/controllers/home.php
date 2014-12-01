<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/home
	 *	- or -  
	 * 		http://example.com/home/index
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
    	$this->load->model('home_model');
    	$this->load->library('session');
  	}
  	
	public function index()
	{
		$title="title";
		if($this->session->userdata('logged_in') == TRUE){
		    $data = array(
		        'logined'=>TRUE,
		        'username'=>$this->session->userdata('username'),		        
		    );
		}else{
		    $data = array(
		        'logined'=>FALSE,
		    );
		}
		
		$this->load->view('home',$data);
	}
}