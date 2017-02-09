<?php
class Banks extends CI_Controller{
    function __construct() {
        parent::__construct();
        if(!$this->session->userdata('logged_in')){redirect('login', 'refresh');}
    }
    public function get(){
        echo json_encode(['data' => Co_Banks_Model::get($this->session->userdata('user'))]);
    }
    public function add(){
        $bank = [
                    'b_name' => $this->input->post('add-name'),
                    'b_shortname' => $this->input->post('add-shortname'),
                    'b_company' => 'company'
                ];
        $co_bank = [
                    'co_b_no' => $this->input->post('add-acc-no'),
                    'co_b_class' => $this->input->post('add-classification'),
                    'cb_id' => $this->session->userdata('user')->cb_id
                ];
        Co_Banks_Model::add($bank, $co_bank, $this->session->userdata('user'));
        redirect('company_settings/banks', 'refresh');
    }
    public function edit(){
        $bank = [
                    'b_code' => $this->input->post('edit-code'),
                    'b_name' => $this->input->post('edit-name'),
                    'b_shortname' => $this->input->post('edit-shortname')
                ];
        $co_bank = [
                    'co_b_no' => $this->input->post('edit-acc-no'),
                    'co_b_class' => $this->input->post('edit-classification')
                ];
        $b_id = $this->input->post('edit-bank-id');
        $co_b_id = $this->input->post('edit-cobank-id');
        Co_Banks_Model::edit($bank, $co_bank, $b_id, $co_b_id, $this->session->userdata('user'));
        redirect('company_settings/banks', 'refresh');
    }
    public function update(){
         $bank = [
                    'b_code' => $this->input->post('update-code'),
                    'b_name' => $this->input->post('update-name'),
                    'b_shortname' => $this->input->post('update-shortname'),
                    'b_company' => 'company'
                ];
        $co_bank = [
                    'co_b_no' => $this->input->post('update-acc-no'),
                    'co_b_class' => $this->input->post('update-classification'),
                    'cb_id' => $this->session->userdata('user')->cb_id
                ];
        $b_id = $this->input->post('update-bank-id');
        $co_b_id = $this->input->post('update-cobank-id');
        Co_Banks_Model::update($bank, $co_bank, $b_id, $co_b_id, $this->session->userdata('user'));
        redirect('company_settings/banks', 'refresh');
    }
}