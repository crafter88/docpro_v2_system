<?php
class Discounts extends CI_Controller{
    function __construct() {
        parent::__construct();
        if(!$this->session->userdata('logged_in')){redirect('login', 'refresh');}
    }
    public function get(){
        echo json_encode(array('data'=>Co_Discounts_Model::get($this->session->userdata('user'))));
    }
    public function add(){ 
        $data = [
                    'co_d_name' => $this->input->post('add-name'),
                    'co_d_shortname' => $this->input->post('add-shortname'),
                    'co_d_rate' => $this->input->post('add-rate'),
                    'cb_id' => $this->session->userdata('user')->cb_id
                ];
        Co_Discounts_Model::add($data, $this->session->userdata('user'));
        redirect('company_settings/discounts', 'refresh');
    }
    public function edit(){
        $data = [
                    'co_d_code' => $this->input->post('edit-code'),
                    'co_d_name' => $this->input->post('edit-name'),
                    'co_d_shortname' => $this->input->post('edit-shortname'),
                    'co_d_rate' => $this->input->post('edit-rate')
                ];
        $id = $this->input->post('edit-id');
        Co_Discounts_Model::edit($data, $id, $this->session->userdata('user'));
        redirect('company_settings/discounts', 'refresh');
    }
    public function update(){
        $data = [
                    'co_d_code' => $this->input->post('update-code'),
                    'co_d_name' => $this->input->post('update-name'),
                    'co_d_shortname' => $this->input->post('update-shortname'),
                    'co_d_rate' => $this->input->post('update-rate'),
                    'cb_id' => $this->session->userdata('user')->cb_id
                ];
        $id = $this->input->post('update-id');
        Co_Discounts_Model::update($data, $id, $this->session->userdata('user'));
        redirect('company_settings/discounts', 'refresh');    
    }
}