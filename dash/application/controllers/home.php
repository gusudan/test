<?php
 
class Home extends CI_Controller
{
    
    // ------------------------------------------------------------------------
    
    public function index()
    {
        $this->load->view('home/inc/header_view');
        $this->load->view('home/home_view');
        $this->load->view('home/inc/footer_view');
        
    }
    
    // ------------------------------------------------------------------------
    
    public function register()
    {
        $this->load->view('home/inc/header_view');
        $this->load->view('home/register_view');
        $this->load->view('home/inc/footer_view');
        
    }
    
    // ------------------------------------------------------------------------
    
//    public function test()
//    {
//        $this->db->select('user_id, login');
//        $this->db->order_by('user_id DESC');
//        $q = $this->db->get('user');
//        print_r($q->result());
//    }
    
//    public function code()
//    {
//            echo hash('sha256', 'admin' . SALT);
//    }
}
