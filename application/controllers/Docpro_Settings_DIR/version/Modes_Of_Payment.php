<?php
class Modes_Of_Payment extends CI_Controller{
    function __construct() {
        parent::__construct();
        if(!$this->session->userdata('logged_in')){redirect('login', 'refresh');}
    }
    public function get(){
        echo json_encode(array('data' => Modes_Of_Payment_Model::get()));
    }
}