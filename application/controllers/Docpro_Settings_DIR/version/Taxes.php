<?php
class Taxes extends CI_Controller{
    function __construct() {
        parent::__construct();
        if(!$this->session->userdata('logged_in')){redirect('login', 'refresh');}
    }
    public function get(){
        echo json_encode(array('data' => Taxes_Model::get()));
    }
    public function add(){
        $data = array(
                        't_name'=>$this->input->post('add-name'), 
                        't_shortname'=>$this->input->post('add-shortname'), 
                        't_rate'=>$this->input->post('add-rate'), 
                        't_base'=>$this->input->post('add-base'), 
                        'tt_id'=>$this->input->post('add-type-id')
                    );
        $insert_id = Taxes_Model::add($data);
        $code = array('t_code'=>$this->input->post('add-type-code')."".$insert_id);
        Taxes_Model::edit($insert_id, $code);
        redirect('docpro_settings/taxes', 'refresh');
    }
    public function edit(){
        $id = $this->input->post('edit-id');
        $data = array(
                        't_code'=>$this->input->post('edit-type-code')."".$id, 
                        't_name'=>$this->input->post('edit-name'), 
                        't_shortname'=>$this->input->post('edit-shortname'), 
                        't_rate'=>$this->input->post('edit-rate'), 
                        't_base'=>$this->input->post('edit-base'), 
                        'tt_id'=>$this->input->post('edit-type-id')
                    );
        Taxes_Model::edit($id, $data);
        redirect('docpro_settings/taxes', 'refresh');    
    }
    public function update(){
        $data = array(
                        't_name'=>$this->input->post('update-name'), 
                        't_shortname'=>$this->input->post('update-shortname'), 
                        't_rate'=>$this->input->post('update-rate'), 
                        't_base'=>$this->input->post('update-base'), 
                        'tt_id'=>$this->input->post('update-type-id')
                    );
        $insert_id = Taxes_Model::update($data, $this->input->post('update-id'));
        $code = array('t_code'=>$this->input->post('update-type-code')."".$insert_id);
        Taxes_Model::edit($insert_id, $code);
        redirect('docpro_settings/taxes', 'refresh');
    }
}