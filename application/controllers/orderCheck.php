<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class OrderCheck extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/order
	 *	- or -  
	 * 		http://example.com/order/index
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
    	$this->load->model('orderCheck_model');
    	$this->load->library('session');
  	}
  	
	public function index()
	{
		$data['title'] = "order_page";
		//get order information
		$data['username'] = $this->session->userdata('username');
		$oid=1;
		$order = $this->orderCheck_model->getOrderWithBoooks($oid); 
		$data['order']=$order;

		//get user address
		$address = $this->orderCheck_model->getAddress($this->session->userdata('username'));
		$data['address']=$address;
		$this->load->view('orderCheck',$data);
	}

	public function updateAddress(){
		$newAddress=$_POST['newAddress'];
		$oid=1;
		$this->orderCheck_model->updateAddress($oid,$newAddress);
		redirect('orderCheck');
	}
	
}