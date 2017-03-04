<?php
class Modes_Of_Payment extends CI_Controller{
    function __construct() {
        parent::__construct();
        if(!$this->session->userdata('logged_in')){redirect('login', 'refresh');}
    }
    public function get(){
        echo json_encode(array('data'=>Co_Modes_Of_Payment_Model::get($this->session->userdata('user'))));
    }
    public function add(){
        $data = [
                    'mop_name' => $this->input->post('add-name'),
                    'mop_shortname' => $this->input->post('add-shortname'),
                    'top_id' => $this->input->post('add-type'),
                    'mop_company' => 'company',
                ];
        Co_Modes_Of_Payment_Model::add($data, $this->session->userdata('user'));
        redirect('company_settings/modes_of_payment', 'refresh');
    }
    public function edit(){
        $data = [
                    'mop_code' => $this->input->post('edit-code'),
                    'mop_name' => $this->input->post('edit-name'),
                    'mop_shortname' => $this->input->post('edit-shortname'),
                    'top_id' => $this->input->post('edit-type'),
                ];
        $id = $this->input->post('edit-id');
        Co_Modes_Of_Payment_Model::edit($data, $id, $this->session->userdata('user'));
        redirect('company_settings/modes_of_payment', 'refresh');
    }
    public function update(){
        $data = [
                    'mop_code' => $this->input->post('update-code'),
                    'mop_name' => $this->input->post('update-name'),
                    'mop_shortname' => $this->input->post('update-shortname'),
                    'top_id' => $this->input->post('update-type'),
                    'mop_company' => 'company'
                ];
        $id = $this->input->post('update-id');
        Co_Modes_Of_Payment_Model::update($data, $id, $this->session->userdata('user'));
        redirect('company_settings/modes_of_payment', 'refresh');
    }
    public function get_types_of_payment(){
        echo json_encode(Co_Modes_Of_Payment_Model::get_types_of_payment());
    }
    public function get_filter1(){
        echo json_encode(Co_Modes_Of_Payment_Model::get_filter1());
    }
    public function filter_table(){
        $filter1 = $this->input->get('filter1');
        echo json_encode(['data' => Co_Modes_Of_Payment_Model::filter_table($this->session->userdata('user'), $filter1)]);
    }
}