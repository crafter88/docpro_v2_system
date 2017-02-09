<?php
class Page_not_found extends CI_Controller{
    function __construct(){
	    parent::__construct();
            if(!$this->session->userdata('logged_in')){
                redirect(site_url(), 'refresh');
            }
    }
    public function index(){
        $this->output->set_status_header('404');
        $data = array('title' => 'Page Not Found');
        $this->load->view('page_not_found', $data);
    }
}