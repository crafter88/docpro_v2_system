<?php
class Taxes extends CI_Controller{
    function __construct() {
        parent::__construct();
        if(!$this->session->userdata('logged_in')){redirect('login', 'refresh');}
    }
    public function get_list($slug){
        echo json_encode(array('data' => Co_Taxes_Model::get_list($slug, $this->session->userdata('user'))));
    }
    public function get_tax_types(){
        echo json_encode(Co_Taxes_Model::get_tax_types($this->session->userdata('user')));
    }
    public function add(){
        $data = [
                    't_atc'=>$this->input->post('add-atc'), 
                    't_name'=>$this->input->post('add-name'), 
                    't_shortname'=>$this->input->post('add-shortname'), 
                    't_rate'=>$this->input->post('add-rate'), 
                    't_base'=>$this->input->post('add-base'), 
                    'tt_id'=>$this->input->post('add-type-id'),
                    't_company'=>'company',
                    't_setup_company'=>'company'
                ];
        $tt_code = $this->input->post('add-type-code');
        Co_Taxes_Model::add($data, $tt_code, $this->session->userdata('user'));
        $this->session->set_flashdata('seq_active', '2');
        $this->session->set_flashdata('tt_id', $this->input->post('add-type-id'));
        $this->session->set_flashdata('tt_name', $this->input->post('add-type-name'));
        redirect('company_settings/taxes', 'refresh');
    }
    public function edit(){
        $data = [
                    't_code'=>$this->input->post('edit-code'),
                    't_atc'=>$this->input->post('edit-atc'),
                    't_name'=>$this->input->post('edit-name'), 
                    't_shortname'=>$this->input->post('edit-shortname'), 
                    't_rate'=>$this->input->post('edit-rate'), 
                    't_base'=>$this->input->post('edit-base'), 
                    'tt_id'=>$this->input->post('edit-type-id')
                ];
        $id = $this->input->post('edit-id');
        Co_Taxes_Model::edit($data, $id, $this->session->userdata('user'));
        $this->session->set_flashdata('seq_active', '2');
        $this->session->set_flashdata('tt_id', $this->input->post('edit-type-id'));
        $this->session->set_flashdata('tt_name', $this->input->post('edit-type-name'));
        redirect('company_settings/taxes', 'refresh');
    }
    public function update(){
        $data = [
                    't_code'=>$this->input->post('update-code'), 
                    't_atc'=>$this->input->post('update-atc'), 
                    't_name'=>$this->input->post('update-name'), 
                    't_shortname'=>$this->input->post('update-shortname'), 
                    't_rate'=>$this->input->post('update-rate'), 
                    't_base'=>$this->input->post('update-base'), 
                    'tt_id'=>$this->input->post('update-type-id'),
                    't_company'=>'company',
                    't_setup_company'=>'company'
                ];
        $id = $this->input->post('update-id');
        Co_Taxes_Model::update($data, $id, $this->session->userdata('user'));
        $this->session->set_flashdata('seq_active', '2');
        $this->session->set_flashdata('tt_id', $this->input->post('update-type-id'));
        $this->session->set_flashdata('tt_name', $this->input->post('update-type-name'));
        redirect('company_settings/taxes', 'refresh');
    }
    public function delete(){
        Co_Taxes_Model::delete($this->input->post('delete-id'));
        $this->session->set_flashdata('seq_active', '2');
        $this->session->set_flashdata('tt_id', $this->input->post('delete-type-id'));
        redirect('company_settings/taxes', 'refresh');
    }

    public function enable_tax(){
        Co_Taxes_Model::enable_tax($this->input->get('id'));
    }
    public function disable_tax(){
        Co_Taxes_Model::disable_tax($this->input->get('id'));
    }
}