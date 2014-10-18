<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/search
	 *	- or -  
	 * 		http://example.com/search/index
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
    	$this->load->model('search_model');
    	$this->load->library('session');
  	}
  	
	public function index()
	{
		$type = $this->input->get('type');
		$keyword = $this->input->get('keyword');
		$title="title";
		$data['title'] = $this->search_model->example($title);
		$this->load->view('search',$data);
	}
	
}