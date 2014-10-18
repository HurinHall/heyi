<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/manage/account
	 *	- or -  
	 * 		http://example.com/manage/account/index
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
    	$this->load->model('manage_account_model');
    	$this->load->library('session');
  	}
  	
	public function index()
	{
		$title="title";
		$data['title'] = $this->manage_account_model->example($title);
		$this->load->view('manage_account',$data);
	}
	
	
	//http://example.com/manage/account/page/{page}
	public function page($page=1){
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		//$this->input->get('name'); see ->user_guide/libraries/input.html
		//$this->load->view('page',$data); page in view folder
	}
	
	//http://example.com/manage/account/update/
	public function update(){
		
	}
	
	//http://example.com/manage/account/delete/
	public function delete(){
		
	}
	
	//http://example.com/manage/account/add
	public function add(){
		
	}
}