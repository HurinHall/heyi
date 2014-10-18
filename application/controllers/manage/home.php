<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/manage/
	 *	- or -  
	 * 		http://example.com/manage/home
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
    	$this->load->model('manage_home_model');
    	$this->load->library('session');
  	}
  	
	public function index()
	{
		$title="title";
		$data['title'] = $this->manage_home_model->example($title);
		$this->load->view('manage_home',$data);
	}
}