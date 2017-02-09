<?php
class Services extends CI_Controller{
    function __construct() {
        parent::__construct();
        if(!$this->session->userdata('logged_in')){redirect('login', 'refresh');}
    }
    public function get(){
        $sess_data = $this->session->userdata('logged_in');
        echo json_encode(array('data'=> Co_Services_Model::get($this->session->userdata('user'))));
    }
    public function add(){
        $data = [
                    'co_s_name' => $this->input->post('add-name'),
                    'co_s_shortname' => $this->input->post('add-shortname'),
                    'co_s_description' => $this->input->post('add-description'),
                    'co_de_id' => $this->input->post('add-department'),
                    'co_pcc_id' => $this->input->post('add-pcc')
                ];
        Co_Services_Model::add($data, $this->session->userdata('user'));
        redirect('company_settings/services', 'refresh');
    }
    public function edit(){
        $data = [
                    'co_s_code' => $this->input->post('edit-code'),
                    'co_s_name' => $this->input->post('edit-name'),
                    'co_s_shortname' => $this->input->post('edit-shortname'),
                    'co_s_description' => $this->input->post('edit-description'),
                    'co_de_id' => $this->input->post('edit-department'),
                    'co_pcc_id' => $this->input->post('edit-pcc')
                ];
        $id = $this->input->post('edit-id');
        Co_Services_Model::edit($data, $id, $this->session->userdata('user'));
        redirect('company_settings/services', 'refresh');
    }
    public function update(){
        $data = [
                    'co_s_code' => $this->input->post('update-code'),
                    'co_s_name' => $this->input->post('update-name'),
                    'co_s_shortname' => $this->input->post('update-shortname'),
                    'co_s_description' => $this->input->post('update-description'),
                    'co_de_id' => $this->input->post('update-department'),
                    'co_pcc_id' => $this->input->post('update-pcc')
                ];
        $id = $this->input->post('update-id');
        Co_Services_Model::update($data, $id, $this->session->userdata('user'));
        redirect('company_settings/services', 'refresh');  
    }
    public function get_departments(){
        echo json_encode(Co_Services_Model::get_departments($this->session->userdata('user')));
    }
    public function get_profit_cost_center(){
        echo json_encode(Co_Services_Model::get_profit_cost_center($this->session->userdata('user')));
    }
    public function add_department(){
        $data = [
                    'co_de_name' => $this->input->post('add-name'),
                    'co_de_shortname' => $this->input->post('add-shortname'),
                    'cb_id' => $this->session->userdata('user')->cb_id
                ];
        $id = Co_Departments_Model::add($data, $this->session->userdata('user'));
        echo json_encode(['id' => $id]);
    }
    public function add_pcc(){
        $data = [
                    'co_pcc_name' => $this->input->post('add-name'),
                    'co_pcc_shortname' => $this->input->post('add-shortname'),
                    'co_de_id' => $this->input->post('add-department')
                ];
        $id = Co_Profit_Cost_Centers_Model::add($data, $this->session->userdata('user'));
        echo json_encode(['id' => $id]);
    }
}