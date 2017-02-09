<?php
class Departments extends CI_Controller{
    function __construct() {
        parent::__construct();
        if(!$this->session->userdata('logged_in')){redirect('login', 'refresh');}
    }
    public function get(){
        $sess_data = $this->session->userdata('logged_in');
        echo json_encode(array('data'=> Co_Departments_Model::get($this->session->userdata('user'))));
    }
    public function add(){
        $data = [
                    'co_de_name' => $this->input->post('add-name'),
                    'co_de_shortname' => $this->input->post('add-shortname'),
                    'cb_id' => $this->session->userdata('user')->cb_id
                ];
        Co_Departments_Model::add($data, $this->session->userdata('user'));
        redirect('company_settings/departments', 'refresh');
    }
    public function edit(){
        $data = [
                    'co_de_code' => $this->input->post('edit-code'),
                    'co_de_name' => $this->input->post('edit-name'),
                    'co_de_shortname' => $this->input->post('edit-shortname')
                ];
        $id = $this->input->post('edit-id');
        Co_Departments_Model::edit($data, $id, $this->session->userdata('user'));
        redirect('company_settings/departments', 'refresh');
    }
    public function update(){
        $data = [
                    'co_de_code' => $this->input->post('update-code'),
                    'co_de_name' => $this->input->post('update-name'),
                    'co_de_shortname' => $this->input->post('update-shortname'),
                    'cb_id' => $this->session->userdata('user')->cb_id
                ];
        $id = $this->input->post('update-id');
        Co_Departments_Model::update($data, $id, $this->session->userdata('user'));
        redirect('company_settings/departments', 'refresh');   
    }
}