<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Detail extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/detail
	 *	- or -  
	 * 		http://example.com/detail/index
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
    	$this->load->model('detail_model');
    	$this->load->library('session');
    	$this->load->library('cart');
  	}
  	
	public function index()
	{
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
		$this->load->view('detail',$data);
	}

	//http://example.com/detail/addtocart
	public function addtocart(){
	    
	    $data = array(
	        'id'      => 'heyi_1',
	        'qty'     => 1,
	        'price'   => 173.00,
	        'name'    => 'Steve Jobs',
	        'options' => array('作者' => 'Walter Isaacon')
	    );
	    
	    $this->cart->insert($data);

	    redirect('home/index',reload);
	}	
}