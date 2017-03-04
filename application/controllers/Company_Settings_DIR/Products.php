<?php
class Products extends CI_Controller{
    function __construct() {
        parent::__construct();
        if(!$this->session->userdata('logged_in')){redirect('login', 'refresh');}
    }
    public function get(){
        echo json_encode(array('data'=> Co_Products_Model::get($this->session->userdata('user'))));
    }
    public function add(){
        $data = [
                    'co_p_name' => $this->input->post('add-name'),
                    'co_p_shortname' => $this->input->post('add-shortname'),
                    'co_p_description' => $this->input->post('add-description'),
                    'co_de_id' => $this->input->post('add-department'),
                    'co_pcc_id' => $this->input->post('add-pcc')
                ];
        Co_Products_Model::add($data, $this->session->userdata('user'));
        redirect('company_settings/products', 'refresh');
    }
    public function edit(){
        $data = [
                    'co_p_code' => $this->input->post('edit-code'),
                    'co_p_name' => $this->input->post('edit-name'),
                    'co_p_shortname' => $this->input->post('edit-shortname'),
                    'co_p_description' => $this->input->post('edit-description'),
                    'co_de_id' => $this->input->post('edit-department'),
                    'co_pcc_id' => $this->input->post('edit-pcc')
                ];
        $id = $this->input->post('edit-id');
        Co_Products_Model::edit($data, $id, $this->session->userdata('user'));
        redirect('company_settings/products', 'refresh');
    }
    public function update(){
        $data = [
                    'co_p_code' => $this->input->post('update-code'),
                    'co_p_name' => $this->input->post('update-name'),
                    'co_p_shortname' => $this->input->post('update-shortname'),
                    'co_p_description' => $this->input->post('update-description'),
                    'co_de_id' => $this->input->post('update-department'),
                    'co_pcc_id' => $this->input->post('update-pcc')
                ];
        $id = $this->input->post('update-id');
        Co_Products_Model::update($data, $id, $this->session->userdata('user'));
        redirect('company_settings/products', 'refresh');  
    }
    public function get_departments(){
        echo json_encode(Co_Products_Model::get_departments($this->session->userdata('user')));
    }
    public function get_profit_cost_center(){
        echo json_encode(Co_Products_Model::get_profit_cost_center($this->session->userdata('user')));
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
    public function get_filter1(){
        echo json_encode(Co_Products_Model::get_filter1($this->session->userdata('user')));
    }
    public function get_filter2(){
        echo json_encode(Co_Products_Model::get_filter2($this->session->userdata('user')));
    }
    public function filter_table(){
        $filter1 = $this->input->get('filter1');
        $filter2 = $this->input->get('filter2');
        echo json_encode(['data'=> Co_Products_Model::filter_table($this->session->userdata('user'), $filter1, $filter2)]);
    }
}