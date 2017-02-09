<?php
class Trade_Discounts extends CI_Controller{
    function __construct() {
        parent::__construct();
        if(!$this->session->userdata('logged_in')){redirect('login', 'refresh');}
    }
    public function get(){
        $sess_data = $this->session->userdata('logged_in');
        echo json_encode(array('data'=>Co_Discounts_Model::get_discounts($sess_data['company'])));
    }
    public function add(){
        $cb_id = $this->session->userdata('logged_in');
        $data = array('co_d_code'=>$this->input->post('add-code'), 'co_d_name'=>$this->input->post('add-name'), 'co_d_shortname'=>$this->input->post('add-shortname'), 'co_d_rate'=>$this->input->post('add-rate'), 'cb_id'=>$cb_id['company']);
        Co_Discounts_Model::add($data);
        redirect('company_settings/trade_discounts', 'refresh');
    }
    public function edit(){
        $id = $this->input->post('edit-id');
        $data = array('co_d_code'=>$this->input->post('edit-code'), 'co_d_name'=>$this->input->post('edit-name'), 'co_d_shortname'=>$this->input->post('edit-shortname'), 'co_d_rate'=>$this->input->post('edit-rate'));
        Co_Discounts_Model::edit($id, $data);
        redirect('company_settings/trade_discounts', 'refresh');
    }
    public function update(){
        $cb_id = $this->session->userdata('logged_in');
        $data = array('co_d_code'=>$this->input->post('update-code'), 'co_d_name'=>$this->input->post('update-name'), 'co_d_shortname'=>$this->input->post('update-shortname'), 'co_d_rate'=>$this->input->post('update-rate'), 'cb_id'=>$cb_id['company']);
        Co_Discounts_Model::update($data);
        redirect('company_settings/trade_discounts', 'refresh');    
    }
}