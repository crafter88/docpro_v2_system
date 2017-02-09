<?php
class Journals extends CI_Controller{
    function __construct() {
        parent::__construct();
        if(!$this->session->userdata('logged_in')){redirect('login', 'refresh');}
    }
    public function get(){
        echo json_encode(['data'=>Co_Journals_Model::get($this->session->userdata('user'))]);
    }
    public function add(){
        $data = [
                    'j_name'=>$this->input->post('add-name'), 
                    'j_shortname'=>$this->input->post('add-shortname'),
                    'j_company'=>'company'
                ];
        Co_Journals_Model::add($data, $this->session->userdata('user'));
        redirect('company_settings/journals', 'refresh');
    }
    public function edit(){
        $data = [
                    'j_code'=>$this->input->post('edit-code'), 
                    'j_name'=>$this->input->post('edit-name'), 
                    'j_shortname'=>$this->input->post('edit-shortname'),
                ];
        $id = $this->input->post('edit-id');
        Co_Journals_Model::edit($data, $id, $this->session->userdata('user'));
        redirect('company_settings/journals', 'refresh');
    }
    public function update(){
        $data = [
                    'j_code'=>$this->input->post('update-code'),
                    'j_name'=>$this->input->post('update-name'), 
                    'j_shortname'=>$this->input->post('update-shortname'),
                    'j_company'=>'company' 
                ];
        $id = $this->input->post('update-id');
        Co_Journals_Model::update($data, $id, $this->session->userdata('user'));
        redirect('company_settings/journals', 'refresh');
    }
}