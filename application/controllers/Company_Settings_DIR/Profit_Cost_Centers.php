<?php
class Profit_Cost_Centers extends CI_Controller{
    function __construct() {
        parent::__construct();
        if(!$this->session->userdata('logged_in')){redirect('login', 'refresh');}
    }
    public function get(){
        $sess_data = $this->session->userdata('logged_in');
        echo json_encode(array('data'=> Co_Profit_Cost_Centers_Model::get($this->session->userdata('user'))));
    }
    public function add(){
        $data = [
                    'co_pcc_name' => $this->input->post('add-name'),
                    'co_pcc_shortname' => $this->input->post('add-shortname'),
                    'co_de_id' => $this->input->post('add-department')
                ];
        Co_Profit_Cost_Centers_Model::add($data, $this->session->userdata('user'));
        redirect('company_settings/profit_cost_centers', 'refresh');
    }
    public function edit(){
        $data = [
                    'co_pcc_code' => $this->input->post('edit-code'),
                    'co_pcc_name' => $this->input->post('edit-name'),
                    'co_pcc_shortname' => $this->input->post('edit-shortname'),
                    'co_de_id' => $this->input->post('edit-department')
                ];
        $id = $this->input->post('edit-id');
        Co_Profit_Cost_Centers_Model::edit($data, $id, $this->session->userdata('user'));
        redirect('company_settings/profit_cost_centers', 'refresh');
    }
    public function update(){
        $data = [
                    'co_pcc_code' => $this->input->post('update-code'),
                    'co_pcc_name' => $this->input->post('update-name'),
                    'co_pcc_shortname' => $this->input->post('update-shortname'),
                    'co_de_id' => $this->input->post('update-department')
                ];
        $id = $this->input->post('update-id');
        Co_Profit_Cost_Centers_Model::update($data, $id, $this->session->userdata('user'));
        redirect('company_settings/profit_cost_centers', 'refresh');  
    }
    public function get_departments(){
        echo json_encode(Co_Profit_Cost_Centers_Model::get_departments($this->session->userdata('user')));
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
    public function get_filter1(){
        echo json_encode(Co_Profit_Cost_Centers_Model::get_filter1($this->session->userdata('user')));
    }
    public function filter_table(){
        $filter1 = $this->input->get('filter1');
        echo json_encode(['data'=> Co_Profit_Cost_Centers_Model::filter_table($this->session->userdata('user'), $filter1)]);
    }
}