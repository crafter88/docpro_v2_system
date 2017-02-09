<?php
class Banks extends CI_Controller{
    function __construct() {
        parent::__construct();
        if(!$this->session->userdata('logged_in')){redirect('login', 'refresh');}
    }
    public function get(){
        echo json_encode(array('data'=> Banks_Model::get()));
    }
    public function add(){
        $data = [
                    'b_name'=>$this->input->post('add-name'), 
                    'b_shortname'=>$this->input->post('add-shortname'),
                    'b_company'=>'docpro',
                ];
        Banks_Model::add($data);
        redirect('docpro_settings/banks', 'refresh');
    }
    public function edit(){
        $data = [
                    'b_code'=>$this->input->post('edit-code'), 
                    'b_name'=>$this->input->post('edit-name'), 
                    'b_shortname'=>$this->input->post('edit-shortname'),
                ];
        $id = $this->input->post('edit-id');
        Banks_Model::edit($data, $id);
        redirect('docpro_settings/banks', 'refresh');
    }
    public function update(){
        $data = [
                    'b_code'=>$this->input->post('update-code'), 
                    'b_name'=>$this->input->post('update-name'), 
                    'b_shortname'=>$this->input->post('update-shortname'),
                    'b_company'=>'docpro',
                ];
        $id = $this->input->post('update-id');
        Banks_Model::update($data, $id);
        redirect('docpro_settings/banks', 'refresh');    
    }
}