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
        $data = array(
                        'b_name'=>$this->input->post('add-name'), 
                        'b_shortname'=>$this->input->post('add-shortname')
                    );
        $b_id = Banks_Model::add($data);
        Banks_Model::edit($b_id, ['b_code' => $b_id]);
        redirect('docpro_settings/banks', 'refresh');
    }
    public function edit(){
        $id = $this->input->post('edit-id');
        $data = array(
                        'b_name'=>$this->input->post('edit-name'), 
                        'b_shortname'=>$this->input->post('edit-shortname')
                    );
        Banks_Model::edit($id, $data);
        redirect('docpro_settings/banks', 'refresh');
    }
    public function update(){
        $data = array(
                        'b_name'=>$this->input->post('update-name'), 
                        'b_shortname'=>$this->input->post('update-shortname')
                    );
        $b_id = Banks_Model::update($data, $this->input->post('update-id'));
        Banks_Model::edit($b_id, ['b_code' => $b_id]);
        redirect('docpro_settings/banks', 'refresh');    
    }
}