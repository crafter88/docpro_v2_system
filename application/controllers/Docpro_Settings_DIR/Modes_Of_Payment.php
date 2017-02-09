<?php
class Modes_Of_Payment extends CI_Controller{
    function __construct() {
        parent::__construct();
        if(!$this->session->userdata('logged_in')){redirect('login', 'refresh');}
    }
    public function get(){
        echo json_encode(array('data' => Modes_Of_Payment_Model::get()));
    }
    public function add(){
    	$data = [
                    'mop_name' => $this->input->post('mop-add-name'),
                    'mop_shortname' => $this->input->post('mop-add-shortname'),
                    'top_id' => $this->input->post('mop-add-type'),
                    'mop_company' => 'docpro'
                ];
        Modes_Of_Payment_Model::add($data);
    	redirect('docpro_settings/modes_of_payment', 'refresh');
    }
    public function edit(){
    	$data = [
                    'mop_code' => $this->input->post('mop-edit-code'),
                    'mop_name' => $this->input->post('mop-edit-name'),
                    'mop_shortname' => $this->input->post('mop-edit-shortname'),
                    'top_id' => $this->input->post('mop-edit-type')
                ];
        $id = $this->input->post('mop-edit-id');
        Modes_Of_Payment_Model::edit($data, $id);
        redirect('docpro_settings/modes_of_payment', 'refresh');
    }
    public function update(){
    	$data = [
                    'mop_code' => $this->input->post('mop-update-code'),
                    'mop_name' => $this->input->post('mop-update-name'),
                    'mop_shortname' => $this->input->post('mop-update-shortname'),
                    'top_id' => $this->input->post('mop-update-type'),
                    'mop_company' => 'docpro'
                ];
        $id = $this->input->post('mop-update-id');
        Modes_Of_Payment_Model::update($data, $id);
        redirect('docpro_settings/modes_of_payment', 'refresh');
    }
    public function get_top(){
        echo json_encode(Modes_Of_Payment_Model::get_top());
    }
}