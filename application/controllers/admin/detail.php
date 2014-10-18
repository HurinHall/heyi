<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Detail extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/admin/detail
	 *	- or -  
	 * 		http://example.com/admin/detail/index
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
    	$this->load->model('admin_detail_model');
    	$this->load->library('session');
  	}
  	
	public function index()
	{
		$id = $this->input->get('id');
		$title="title";
		$data['title'] = $this->admin_detail_model->example($title);
		$this->load->view('admin_detail',$data);
	}

	//http://example.com/admin/detail/update
	public function update(){
		$id=$this->input->post('id');
		$num=$this->input->post('num');
		//$this->input->get('name'); see ->user_guide/libraries/input.html
		//$this->load->view('page',$data); page in view folder
	}	
}