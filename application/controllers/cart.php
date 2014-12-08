<?php

if (! defined('BASEPATH'))
    exit('No direct script access allowed');

class Cart extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * http://example.com/detail
     * - or -
     * http://example.com/detail/index
     * - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * 
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('cart_model');
        $this->load->library('cart');
        $this->load->helper('form');
        $this->load->library('session');
    }

    public function index()
    {
        if ($this->session->userdata('logged_in') == TRUE) {
            $data = array(
                'logined' => TRUE,
                'username' => $this->session->userdata('username')
            );
            $this->load->view('cart', $data);
        } else {
            $data['message'] = "Please click ".anchor('login/auth', 'here').' to login.';
            $this->load->view('note', $data);
        }
    }
    
    // http://example.com/cart/update
    public function update()
    {
        
        $total = $this->cart->total_items();
        //echo $total;
        $item = $this->input->post('rowid');
        $qty = $this->input->post('qty');
        
        //var_dump($item);
        
        
        for($i=0;$i<$total;$i++){
            $data = array(
                'rowid' => $item[$i],
                'qty'   => $qty[$i]
            );
            //var_dump($data);
        $this->cart->update($data);
        }
        redirect('cart/index');
        
    }
    
    function empty_cart(){
        $this->cart->destroy(); // Destroy all cart data
        redirect('cart/index'); // Refresh te page
    }
    
    // http://example.com/cart/delete
    public function delete()
    {
        $id = $this->input->post('id');
        // $this->input->get('name'); see ->user_guide/libraries/input.html
        // $this->load->view('page',$data); page in view folder
    }
    
    // http://example.com/cart/submit
    public function submit()
    {
        // $this->input->get('name'); see ->user_guide/libraries/input.html
        // $this->load->view('page',$data); page in view folder
    }
}